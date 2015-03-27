* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
form{
    width: 100%;
}
form > div > label,
legend {
    width: 25%;
    float: left;
}
form > div > div{
    width: 75%;
    float: right;
}
form  > div {
    clear: both;
    overflow: hidden;
}
textarea {
    resize:vertical;
}
input[type=text],
input[type=email],
input[type=url],
input[type=password],
input[type=tel],
textarea {
    border: 1px solid #ccc;
    border-right: 1px solid #eee;
    border-bottom: 1px solid #eee;
    width: 100%;
}
input[type=text]:focus,
input[type=email]:focus,
input[type=url]:focus,
input[type=password]:focus,
input[type=tel]:focus,
textarea:focus {
    outline: 0;
    border-color: #39c;
}

form  > div {
    padding: 1px;
    margin: 0 0 0.6em 0;
}
input,
textarea{
    font-family: "Trebuchet MS";
    font-size: 1em;
    padding: 0.2em 0.4em;
}
form > div > label,
legend {
    line-height: 1.5em;
}
form{
    font-family:
        "Trebuchet MS",
        "Verdana", "Tahoma",
        "Geneva",
        "helvetica", "Arial",sans-serif;
    font-size: 0.85em;
}

/*

#content .form,
#overlaychrome
{
    background-color: #ECECEC;
    border: 1px solid #AF2;
}

form fieldset {
  border: 0;
  padding: 0;
}
form > div > fieldset > div {
  width: 75%;
  float: right;
}
form > div > fieldset > div > div {
  margin: 0 0 5px 0;
}
form > div > fieldset label {
  font-size: 90%;
}

*/