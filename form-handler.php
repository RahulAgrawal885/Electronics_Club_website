<?php
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];

    $message=$_POST['message'];

    $email_from="yourwebsite@gmail/outlook.com";
    $email_subject="Form Submission : $name";
    $email_body=" User Name: $name .\n".
                "User Email: $visitor_email .\n".
                "User Message: $message .\n";
    $to="electronicsclub@iitg.ac.in";

    $headers="From: $email_from \r\n";
    $headers.="Reply-To: $visitor_email \r \n";

    if(mail($to,$email_subject,$email_body,$headers)){
        echo " Email succesfully send to $to";
    }
    else{
        echo "Failed to send your message";
    }
    // landing page after submitiing
    // header("Location: team.html"); 

    // .PHP: Redirect same page after click the submit button
    // $referer = $_SERVER['HTTP_REFERER'];
    // header("Location: $referer");


?>

<!-- *@outlook.com	smtp.live.com	587 (TLS) -->
                 
