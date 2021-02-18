<?php
    $name = $_POST['name'];
    $visitors_email = $_POST['email'];
    $mobile_num = $_POST['phone'];
    $message = $_POST['message'];
    
    $email_from = 'rakshith178@gmail.com';

    $email_subject = 'New from Submission';

    $email_body = "User Name: $name. \n".
                    "User Email: $visitors_email. \n".
                    "User Mobile Number: $mobile_num. \n".
                    "User message: $message. \n";
    $to = 'rakshith1777@gmail.com';
    
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-to: $visitors_email \r\n";

    if(mail($to,$email_subject,$email_body,$headers)){
        echo "Email sent successfully";
        echo "<script>alert('Successfully submitted!!! \\n$name\\n$visitors_email\\n$mobile_num\\n$message')</script>";
        header("Location: index.html");
    }
    else{
        echo "<script>alert('Error in sending details!!! \\n$name\\n$visitors_email\\n$mobile_num\\n$message')</script>";

    }
    //header("Location: index.html");

?>  