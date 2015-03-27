@media print {
    #header,#menu,#footer, .noprint
    {
        display: none;
    }
    #content
    {
        padding: 0em 3em;
    }
    #content .wf{
        margin: 0;
        padding: 0;
        border: 0;
    }
}
@media (max-width: 500px) {
    form > div {
        margin: 0 0 15px 0; 
    }
    form > div > label,
    legend {
        width: 100%;
        float: none;
        margin: 0 0 5px 0;
    }
    form > div > div,
    form > div > fieldset > div {
        width: 100%;
        float: none;
    }
    input[type=text],
    input[type=email],
    input[type=url],
    input[type=password],
    textarea,
    select {
        width: 100%;
    }
    #content .wf{
        padding: 0;
    }
    #overlaycontent
    {
        position: relative;
        margin: 1em 0;
    }
/*
    #header a{
        clear: both;
        width: 100%;
        padding: 0;
        padding-bottom: 3px;
    }
    #menu a{
        clear: both;
        width: 100%;
        padding: 0;
        padding-bottom: 3px;
    }
*/
}
/*
@media (min-width: 1200px) {
  form > div > label,
  legend {
    text-align: right;
    padding-right: 10px;
  }
}
*/