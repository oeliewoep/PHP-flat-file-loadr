
/* IMG EFFECTS ON HOVER*/
.imghover .default{
    display: inline;
}
.imghover .hover{
    display: none;
}
.imghover a:hover .default{
     display: none;
}
/* use .hover to swap betweep 2 images */
.imghover a:hover .hover{
     display: inline;
}
/* use .tover to change opacity of image on hover */
.imghover a:hover .tover
{
    display: inline;
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
    filter: alpha(opacity=70);
    -moz-opacity:0.7;
    -khtml-opacity: 0.7;
    opacity: 0.7;     
}
/* Apply for iconizing */
/* change background of image, no need to tover or hover */
.icon{
    text-align: center;
}
.icon a{
    display: block;
    overflow: hidden;
    width: 110px;

    padding: 16px 0;
}
.icon a:hover{
    background-color: #ddd;
    border-radius: 10px;
    border: 1px solid #aaa;
    padding: 15px 0;
}
.icon span{
    display: block;
    width: 100%;
}
.icon img{
    height: 1.5em;
}

/* list view */
.list {
    text-align: left;
}
.list a{
    width: auto;
    padding: 5px;
}
.list a:hover{
    padding: 5px;
    border: 0;
}
.list span{
    display: inline-block;
    width: 30px;
}
.list img{
    vertical-align: bottom;
}