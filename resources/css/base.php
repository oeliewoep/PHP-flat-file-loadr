html, body{
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    border: 0;
}
body{
    position: relative;
    overflow-x: hidden;
    overflow-y: auto;
    overflow-y: scroll;
    font-size: 1.2em;
    font-family:
        "Garamond",
        "Palatino Linotype", "Book Antiqua", "Palatino",
        "Georgia",
        "Times New Roman", "Times", serif;
}

a{
    color: #009;
    text-decoration: none;
    font-family: "Century Gothic",sans-serif;
	font-size: 0.8em;
}
a:hover{
    color: #66f;
    text-decoration: underline;
}

h1,h2,h3,h4,h5,h6{
    margin-top: 0.3em;
    margin-bottom: 0;
    margin: 0;
}
hr{
    margin: 0;
}
ul{
    list-style-type: square;
    list-style: url('<?=$shared;?>img/green-square.png');
}
li img{
    height: 0.9em;
}
dt{
    font-family: "Century Gothic";
    color: #339;
    margin-top: 0.6em;
    margin-bottom:  0;
}
table{
    margin: 1em 0;
}
th,td{
    padding: 0.5em;
    text-align: left;
    border: 1px solid #999;
}

pre{
    white-space: pre-wrap;
}


.left{
    float: left !important;
}
.right{
    float: right !important;
}
.spacer{
    clear: both !important;
}
.hmargin{
    margin: 0 auto;
    max-width: 900px;
}