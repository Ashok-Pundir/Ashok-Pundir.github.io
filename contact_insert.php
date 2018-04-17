<?php 
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['email'];
$d=$_POST['phone'];
$e=$_POST['msg'];

    $to ="pundiramit936@gmail.com";
	$subject ="Contact Form $a";
    $message ='<table width="707" height="90" border="0">
	<tr>
		<td>'.$a.'</td>
	</tr>
	<tr>
		<td>'.$b.'</td>
	</tr>
	<tr>
		<td>'.$c.'</td>
	</tr>
	<tr>
		<td>'.$d.'</td>
	</tr>
	<tr>
		<td>'.$e.'</td>
	</tr>
	</table>';
   
    $headers = "MIME-Version: 1.0" . "\r\n";
	$headers .="Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .='From:<web@halexo.in>' . "\r\n";
	if(mail($to, $subject, $message, $headers))
	{
		echo"<h1>sent successfully</h1>";
	}
	else
	{
		echo"error";
	}
?>