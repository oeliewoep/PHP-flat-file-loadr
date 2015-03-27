.menu ul{
    list-style: none;
    margin: 0;
    padding: 0;
}
.menu li{
    float: left;
    position: relative;
    white-space: nowrap;    	margin: 0 0.1em;/*border: 0px solid #0f0;border-width: 0 1px;*/
}
.menu ul:after {/* give height to parrent */
    content: ""; clear: both; display: block;
}
.menu a{
    display: block;
	width:100%;
}
.menu img{
    padding: 0;
    height: 0.9em;
    vertical-align: middle;
}
.menu a span{
    display: inline-block;
    width: 30px;
}
.menu li ul{
    display: none;
    position: absolute;min-width: 200px;
    z-index:999;
}
.menu li li{
    float: none; display:block;width:100%;
}
.menu ul ul ul {
    position: absolute;
    left: 100%;
    top:0;
}
/* Dropdown menu disabled
 * Dropdowns still exists for SEO 
.menu ul li:hover > ul{
    display: block;
}
/*/
.menu ul ul li:hover > ul{
    display: none;
}
.menu li ul{
	margin-left:-40%;
}
.menu li.right ul{
    right: -40%;
}



.navbar a{
    color: #fff;
    text-decoration: none;
    font-family: "Century Gothic",sans-serif;
    font-size: 0.8em;
    padding: 0.8em 1.1em;

}
.navbar ul li:hover,
.navbar li ul{
    background-color: #333;
}
.navbar li li{
    font-size: 0.9em;
    border-bottom: 1px solid #666;
}
.pagemenu a{

    padding-top: 0.5em;
    padding-right: 0.5em;
    padding-left: 0.5em;

    color: #006;
    text-decoration: none;
    font-family: "Century Gothic",sans-serif;
    font-size: 0.75em;
    line-height: 1.5em;
}
.pagemenu a:hover,
.pagemenu a:active,
.pagemenu a.active{
    text-decoration: underline;
    color: #009;
}

.banner{
    position: relative;
    text-align: center;
    margin: 0;
    border: 0;
}
.banner img{
    height: 1.8em;
}
