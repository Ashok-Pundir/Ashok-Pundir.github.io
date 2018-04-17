<?php 
if(isset($_GET['submit'])){
    $to ="pundiramit936@gmail.com";
    $from =$_GET['email'];
    $first_name =$_GET['fname'];
    $last_name =$_GET['lname'];
    $subject ="Contact Form";
    $message =$first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_GET['textarea'];
   
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>