body{
    background-image: url("<?=$shared;?>/img/bokeh.png");
}
h1,h2,h3,h4,h5,h6{
    font-family: 'Century Gothic';
    color: #146600;
    font-weight: normal;
}
dt{
    color: #9a0;
}
#content .wf{
    border:  0 solid #AF2;
    border-left-width: 5px;
    border-radius: 0 50px 50px 0;
 /*   
    background-color: #f5ffd9; 
    background-color: #fff;
 */   
    background-image: url('<?=$shared;?>img/gradient_green.png');
    background-repeat: repeat-x;
    background-attachment: fixed;
}


nav{
/*    top: 0;   left: 0;    width: 100%;    z-index: 999;  position: fixed;  display: block;  float: left;
*/
}
.navbar{
    background-color: #719301;
}
.navbar a:hover{
    background-color: #92BE00;
    background-color: #81df00;
}
.navbar a:active,
.navbar a.active{
    background-color: #146600;
    background-color: #AEFF64;
}
.navbar li ul{
    border-top: 1px solid #719301;
}


#header{
    margin-bottom: 2em;
}
#header div{
    position: relative;
    overflow: hidden;
    height: 10em;
    width: 100%;
    border-bottom: 1px solid #146600;
}
#header h1{
    position: absolute;
    bottom: 0;
    font-size: 3em;
    color: #9a0;
    font-weight: bold;
    letter-spacing: 0.5em;
}
#header img{
    display: block;
    float: right;
    width: 70%;
    height: 20em;
    border-radius: 50%;
    border: 1px solid #AF2;
    padding: 2px;
    background: #fff;
}


.grid .icon a{
    margin: auto;
    width: auto;
}

.grid .icon a:hover{
    border-color: #0f0;
    background-color: #ceff9d;
}


 .grid0{
    width: 25%;
    min-width: 200px;
    float: left;
    text-align: center;
}
  .block{
    position: relative;
    margin: 3px auto;
/*
    border: 1px solid #666;
    border-radius: 10px;
    background-color: #99f;
*/
}
 .grid h3{
    width: 100%;
    background-color: #d2d2ff;
    padding: 0.5em 0;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.banner{
    text-align: center;
    margin: 2em auto;
}





@media (max-width: 801px) {
     .grid{
        width: 50%;
    }
      h2{
        font-size: 1.3em;
    }
      h3{
        font-size: 1.1em;
    }
}
@media (max-width: 401px) {
     .grid{
        width: 100%;
    }
      h2{
        font-size: 1.1em;
    }
      h3{
        font-size: 1.0em;
    }
}