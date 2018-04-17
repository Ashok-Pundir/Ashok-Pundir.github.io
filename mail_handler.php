<--?php 
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
?-->
 <?php






         $to ="pundiramit936@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
