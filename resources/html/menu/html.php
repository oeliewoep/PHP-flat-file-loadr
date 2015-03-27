<?php
// to be optimised

// retrieve menu_data (from controller)
$menu = $this->get('marray');

if(!isset($params)){
    // root
    $parent = 'menu';
    // initiate output
    $params = "\r\n".'<ul>'."\r\n";
    // pointer
    $parent_stack = array();
/*
 Dit werkt omdat each() onthoud waar de interne pointer zit.
 Parrent stack houdt bij op welk niveau je zit
 
 De niveaus hebben een key op 1ste dimensie zie controller
 */
    do{
        $item = each($menu[$parent]);
        if ( !empty( $item ) )
        {
            // build list-item
            // extract first paramater from url
            $url = explode('=',$item['value']['link']);
            $key = $url[0];
            $value = $url[1];
            $url = $item['value']['link'];
            
            $value = $item['value']['id'];
            $class = '';
            
            // merge URL-parameters or not..
            // if($item['value']['link'][0]=='?' || $item['value']['link'][0]=='#')
            if(!in_array(substr($url,0,1),array('?','#')))
            {
                $url = "?". $html->uri($url);
                // add .active 
                if($html->pg[$key]==$value)
                    $class = "active ";
            }
            
            // add list-item to final string 
            $params .= '<li class="'.$item['value']['position'].'"><a href="'.urldecode($url).'" class="'.$class.'">'.$item['value']['title'].'</a>';
            
            // ga een menu dieper als er nog andere niveaus bestaan
            if ( !empty( $menu[$item['value']['id']] )){
                $params .= "\r\n".'<ul>'."\r\n";
                array_push( $parent_stack, $parent );        
                $parent = $item['value']['id'];
            }
            // of sluit en ga naar het volgende list-item
            else{
                $params .= '</li>'."\r\n";
            }
        }
        // kom een niveau terug, of stop alles
        else{
            $params .= '</ul>'."\r\n";
            // delete key
            array_pop($menu[$parent]);
            if(!empty($parent_stack))
            $parent = array_pop( $parent_stack );
            else
            $parent_stack=null;
        }
    }
    while(is_array($parent_stack));
}else{
    //  iteration to get one level of menu_items
    $menu  = $menu[$params];
    $params = array();
    if(is_array($menu))
    {
        foreach($menu as $item){
            // extract first paramater from url
            $url = explode('=',$item['link']);
            $key = $url[0];
            $value = $url[1];
            $url = $item['link'];

            $value = $item['id'];
            $class = '';
            
            // merge URL-parameters or not..
            if(!in_array($url[0],array('?','#')))
            {
                $url = "?". $html->uri($url);
                // add .active 
                if($html->pg[$key]==$value)
                    $class = " active";
            }
            $class = 'class="'.$item['position'].$class.'"';
            $params[] = '<a href="'.urldecode($url).'" '.$class.'>'.$item['title'].'</a>'."\r\n";
        }        
    } 
}
