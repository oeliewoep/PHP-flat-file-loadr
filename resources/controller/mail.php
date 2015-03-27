<?php
if(isset($_GET['action']))
{
    $to = 'gaetanhariot@oeliewoep.be';
    $subject = 'oeliewoep.be';
    $body = "Bericht:\r\n ";
    
    $sendmail = false;
    foreach($_POST as $key => $value)
    {
            $body .= "$key: $value \r\n ";
            if (!empty($value)) $sendmail = true;
    }    
    $result = @mail($to, $subject, $body, "From: ".$to."\n". "Return-path: $to");
    
    $overlay = &$this->p['overlay'];
    if($result)
        $overlay->set_file('thankyou.php');
    else
        $overlay->set_file('sorry.php');
}