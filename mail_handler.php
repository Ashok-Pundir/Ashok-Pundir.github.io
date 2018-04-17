
 <?php

 $fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$text=$_POST['textarea'];
echo "$fname";
         $to ="pundiramit936@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>$fname</b>";
         
         $header = "From:$email \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
