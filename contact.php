<?php

    if(isset($_POST['name']) && $_POST['name'] != ''){

        if(first_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userPhone = $_POST['phone'];
            $userMessage = $_POST['message'];

            $to = "cheabunthong168@gmail.com";
            $subject = "Contact Form Info";
            $body = "";

            $body .= "From : ".$userName. "\r\n";
            $body .= "Email : ".$userEmail. "\r\n";
            $body .= "Phone : ".$userPhone. "\r\n";
            $body .= "Message : ".$userMessage. "\r\n";

            mail($to, $subject, $body);

        }
    }

    
?>
