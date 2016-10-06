<?php
session_start();

if (isset($_POST['submit'])) {
    $to = "tommygordon103@gmail.com, beardmaster@devwithabeard.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $comments = $_POST['message'];
    $subject = "The Beard Is Needed!!!";
    $message = "Full Name:  " . $full_name . "\n\n" . "Email: " . $email . "\n\n" . "Phone: " . $telephone . "\n\n" . "Message: " . $_POST['message'];


    mail($to, $subject, $message);
    header('Location: contact.php');
}
?>