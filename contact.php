<?php
if($_SERVER["REQUEST_METHOD"] =="POST" ){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    //Email Settings
    $to = "aranyawijayasekara@gamil.com";
    $subject = "New Message From Protfolio Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    //sending email
    if(mail($to, $subject, $body)){
        echo "Thank You, $name! Youe message has been sent.";
    
    }else{
        echo "Sorry,there was an error sending your message. Please try again later";
    }
}
?>