<?php
 
/**
 * Generate HTML for multi-dimensional menu from MySQL database
 * with ONE QUERY and WITHOUT RECURSION
 * @author J. Bruni
 */
class MenuBuilder
{
        /**
         * MySQL connection
         */
        var $conn;
       
        /**
         * Menu items
         */
        var $items = array();
       
        /**
         * HTML contents
         */
        var $html  = array();
       
        /**
         * Create MySQL connection
         */
        function MenuBuilder()
        {
                $this->conn = mysql_connect( 'localhost', 'user', 'pass' );
                mysql_select_db( 'example', $this->conn );
        }
       
        /**
         * Perform MySQL query and return all results
         */
        function fetch_assoc_all( $sql )
        {
                $result = mysql_query( $sql, $this->conn );
               
                if ( !$result )
                        return false;
               
                $assoc_all = array();
               
                while( $fetch = mysql_fetch_assoc( $result ) )
                        $assoc_all[] = $fetch;
               
                mysql_free_result( $result );
               
                return $assoc_all;
        }
       
        /**
         * Get all menu items from database
         */
        function get_menu_items()
        {
                // Change the field names and the table name in the query below to match tour needs
                $sql = 'SELECT id, parent_id, title, link, position FROM menu_item ORDER BY parent_id, position;';
                return $this->fetch_assoc_all( $sql );
        }
       
        /**
         * Build the HTML for the menu
         */
        function get_menu_html( $root_id = 0 )
        {
                $this->html  = array();
                $this->items = $this->get_menu_items();
               
                foreach ( $this->items as $item )
                        $children[$item['parent_id']][] = $item;
               
                // loop will be false if the root has no children (i.e., an empty menu!)
                $loop = !empty( $children[$root_id] );
               
                // initializing $parent as the root
                $parent = $root_id;
                $parent_stack = array();
               
                // HTML wrapper for the menu (open)
                $this->html[] = '<ul>';
               
                while ( $loop && ( ( $option = each( $children[$parent] ) ) || ( $parent > $root_id ) ) )
                {
                        if ( $option === false )
                        {
                                $parent = array_pop( $parent_stack );
                               
                                // HTML for menu item containing childrens (close)
                                $this->html[] = str_repeat( "\t", ( count( $parent_stack ) + 1 ) * 2 ) . '</ul>';
                                $this->html[] = str_repeat( "\t", ( count( $parent_stack ) + 1 ) * 2 - 1 ) . '</li>';
                        }
                        elseif ( !empty( $children[$option['value']['id']] ) )
                        {
                                $tab = str_repeat( "\t", ( count( $parent_stack ) + 1 ) * 2 - 1 );
                               
                                // HTML for menu item containing childrens (open)
                                $this->html[] = sprintf(
                                        '%1$s<li><a href="%2$s">%3$s</a>',
                                        $tab,   // %1$s = tabulation
                                        $option['value']['link'],   // %2$s = link (URL)
                                        $option['value']['title']   // %3$s = title
                                );
                                $this->html[] = $tab . "\t" . '<ul class="submenu">';
                               
                                array_push( $parent_stack, $option['value']['parent_id'] );
                                $parent = $option['value']['id'];
                        }
                        else
                                // HTML for menu item with no children (aka "leaf")
                                $this->html[] = sprintf(
                                        '%1$s<li><a href="%2$s">%3$s</a></li>',
                                        str_repeat( "\t", ( count( $parent_stack ) + 1 ) * 2 - 1 ),   // %1$s = tabulation
                                        $option['value']['link'],   // %2$s = link (URL)
                                        $option['value']['title']   // %3$s = title
                                );
                }
               
                // HTML wrapper for the menu (close)
                $this->html[] = '</ul>';
               
                return implode( "\r\n", $this->html );
        }
}
 
$menu = new MenuBuilder();
echo '<pre>' . htmlentities( $menu->get_menu_html() ) . '</pŕe>';
 
/*** SAMPLE DATABASE: ***
 
CREATE TABLE `menu_item` (
  `id` int(11) NOT NULL,
  `title` varchar(75) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
 
INSERT INTO `menu_item` (`id`, `title`, `link`, `parent_id`, `position`) VALUES (1,'1','1.html',0,1);
INSERT INTO `menu_item` (`id`, `title`, `link`, `parent_id`, `position`) VALUES (2,'2','2.html',0,2);
INSERT INTO `menu_item` (`id`, `title`, `link`, `parent_id`, `position`) VALUES (3,'11','11.html',1,1);
INSERT INTO `menu_item` (`id`, `title`, `link`, `parent_id`, `position`) VALUES (4,'12','12.html',1,2);
INSERT INTO `menu_item` (`id`, `title`, `link`, `parent_id`, `position`) VALUES (5,'21','21.html',2,1);
INSERT INTO `menu_item` (`id`, `title`, `link`, `parent_id`, `position`) VALUES (6,'22','22.html',2,2);
INSERT INTO `menu_item` (`id`, `title`, `link`, `parent_id`, `position`) VALUES (7,'3','3.html',0,3);
 
*/
 
?>