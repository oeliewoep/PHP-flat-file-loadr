<?php
// SESSION Controller
// if(isset($_GET['action']) || isset($_COOKIE["PHPSESSID"]) || true)
{
    // Start session: cookie created
    session_start();
    // Old cookie found, reload session
    session_regenerate_id(true);
    
    if($_GET['action']=='login')
    {
        // DB lookup for username and pwhash
        // if authentification succesfull
        $_SESSION['rights']=1;
    }
    
    if($_GET['action']=='logout')
    {
        // delete session cookie
        $cookieParams = session_get_cookie_params();
        setcookie(session_name(), '', 0, $cookieParams['path'], $cookieParams['domain'], $cookieParams['secure'], $cookieParams['httponly']);

        // remove all session variables       
        $_SESSION = array();
        unset($_SESSION);
        session_unset();
        session_destroy();
        
        // restart session
        session_start();
    }
}
if(!isset($_SESSION['rights']))
$_SESSION['rights'] = 0;

$_SESSION['lang'] = $lang = $this->get('lang',null);
