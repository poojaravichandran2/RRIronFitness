<?php

session_start();
$link = mysqli_connect("localhost", "root", "");
$selectdb = mysqli_select_db($link,'fitness');

if(isset($_POST['submit'])){
    $to = "hegdekala@gmail.com"; // this is your Email address
    $from = "kshamakbhat@gmail.com";//$_POST['email']; // this is the sender's Email address
    $first_name = "kshama";// $_POST['name'];
    $last_name = "bhat";// $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n"; 
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" ;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>