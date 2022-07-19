<?php 
    $message_sent = false;
    
    if(isset($_POST['email']) && $_POST['email'] != '') {

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

            $userName = $_POST['thename'];
            $userEmail = $_POST['email'];
            $userContact = $_POST['contact'];
            $userMessage = $_POST['message'];
            $userReferral = $_POST['referral'];

            $to = "marco.brunetti@onqor.co.uk";
            $body = "";

            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Contact: ".$userContact. "\r\n";
            $body .= "Referral: ".$userReferral. "\r\n";
            $body .= "Message: ".$userMessage. "\r\n";

            mail($to,$userReferral,$body);

            $message_sent = true;

        }

    }
?>