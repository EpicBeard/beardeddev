<?php

require_once 'recaptchalib.php';

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    //form submitted

    //check if other form details are correct

    //verify captcha
    $recaptcha_secret = "6Lc3rCgTAAAAAHpvUowOYd-EIklxt1jgNzRlakhq";
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
    $response = json_decode($response, true);
    if($response["success"] === true)
    {
        include 'send_email.php';
    }
    else
    {
        echo "You are a robot";
    }
}

?>

