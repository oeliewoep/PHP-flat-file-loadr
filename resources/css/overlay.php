#overlay{
/*    <?php if(!$this->is_pointer('overlay')) echo 'display: none;'; ?>
    position: fixed;
    top: 0;
    left:0;
    width:100%;
    height: 100%;
    z-index:999;
*/}
#overlaybg{
    position: fixed;
    top: 0;
    left:0;
    width:100%;
    height: 100%;
    background-color: #000;
}
#overlaywrapper{
/* scroll or not to scroll */
    position: absolute;
    top: 0;
    width: 100%;
}
#overlaychrome{
    position: relative;
    max-width: 1000px;
    margin: 2em auto;
    background-color: #ECECEC;
    border: 1px solid #008c8c;
}
#overlaycontent{
    position: relative;
    margin: 1em 5%;
}

.translucent {
	/* Required for IE 5, 6, 7 */
	/* ...or something to trigger hasLayout, like zoom: 1; */
	width: 100%; 
		
	/* Theoretically for IE 8 & 9 (more valid) */	
	/* ...but not required as filter works too */
	/* should come BEFORE filter */
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
	
	/* This works in IE 8 & 9 too */
	/* ... but also 5, 6, 7 */
	filter: alpha(opacity=70);
	
	/* Older than Firefox 0.9 */
	-moz-opacity:0.7;
	
	/* Safari 1.x (pre WebKit!) */
	-khtml-opacity: 0.7;
    
	/* Modern!
	/* Firefox 0.9+, Safari 2?, Chrome any?
	/* Opera 9+, IE 9+ */
	opacity: 0.7;
}