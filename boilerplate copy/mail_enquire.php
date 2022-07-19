<?php 
    $message_sent = false;

    if(isset($_POST['email']) && $_POST['email'] != '') {

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

            echo

            $userName = $_POST['thename'];
            $userEmail = $_POST['email'];
            $userContact = $_POST['contact'];
            $userEnquire = $_POST['enquire'];

            $to = "marco.brunetti@onqor.co.uk";
            $body = "";

            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Contact: ".$userContact. "\r\n";
            $body .= "Enquire: ".$userEnquire. "\r\n";

            mail($to,$userEnquire,$body);

            $message_sent = true;

        }

    }
?>