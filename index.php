<!DOCTYPE html>
<html lang="en-us">
<head>
<title>Ashok's Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="CSS/portfolio.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
if(isset($_POST['submit'])){
    $to ="pundiramit936@gmail.com";
    $from =$_POST['email'];
    $first_name =$_POST['fname'];
    $last_name =$_POST['lname'];
    $subject ="Contact Form";
    $message =$first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['textarea'];
   
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>
<div class="row header">
	<div class="logo-text col-6">
		<strong>IT FRESHER</strong>
	</div>
	<div class="col-6 menu">
		<ul>
			<li><a href="#home">HOME</a></li>
			<li><a href="#about">ABOUT</a></li>
			<li><a href="#mywork">MY WORK</a></li>
			<li><a href="#contact">CONTACT</a></li>
		</ul>
	</div>
</div>
<div id="home" class="row bckimage">
	<div class="img-text-heading">
		<span style="font-size:180px;">I'm</span><br> <span style="font-size:100px;">Ashok</span>
	</div>
	<div class="img-text-subheading">
		Bachelor's Degree In <b><q>Information Technology</q></b>
	</div>
</div>
<div id="about" class="row aboutheading">
	<hr>
	<span>ABOUT ME</span>
	<hr>
</div>
<div  class="row">
	<div class="col-6 aboutcontent">
		Hey! I am Ashok Pundir. I completed my graduation in Information Technology in 2017 with honors degree from <q>Graphic Era Hill University</q> located in Dehradun
		, Uttrakhand, India.<br><br>
		I am currently a <q>Fresher</q>.<br><br>
		I started programming from class 11<sup>th</sup> but i actually became good at programming when i was in my B.Tech 3<sup>rd</sup> semester. I started programming in C language
		and currently working on Java(basic + advance).<br><br>
		My area of interest is programming in C, Java, web designing and also i am quite well in Data Structures and Algorithms which i learned in a training given by <q>Ritambhara 
		Technologies.</q> 
	</div>
	<div class="col-6 aboutgraphics">
		C<div class="graphics"><div class="colorfilled" style="width:80%"></div></div>
		Java<div class="graphics"><div class="colorfilled" style="width:70%"></div></div>
		HTML & CSS<div class="graphics"><div class="colorfilled" style="width:80%"></div></div>
		DATA STRUCTURES<div class="graphics"><div class="colorfilled" style="width:70%"></div></div>
		ALGORITHMS<div class="graphics"><div class="colorfilled" style="width:40%"></div></div>
	</div>
</div>
<div id="mywork" class="row myworkheading">
	<hr>
	<span>MY WORK</span>
	<hr>
	<div class="col-3">
		<a href="https://github.com/Ashok-Pundir"><img src="Images/github.png" alt="git-hub " title="Link to Github Profile"></a>
	</div>
	<div class="col-3">
		<a href="https://www.linkedin.com/in/iamashokpundir/"><img src="Images/linkedin.png" alt="linkedin" style="width:200px" title="Link to Linkedin Profile"></a>
	</div>
	<div class="col-3">
		<a href="https://www.hackerrank.com/Pundiramit936?hr_r=1"><img src="Images/hackerrank.jpg" alt="hackerrank " title="Link to Hackerrank Profile"></a>
	</div>
	<div class="col-3">
		<a href="https://www.hackerearth.com/@pundiramit936"><img src="Images/hackerearth.png" alt="hackerearth " title="Link to Hackerearth Profile"></a>
	</div>
</div>
<div id="contact" class="row contactheading">
	<hr>
	<span>CONTACT ME</span>
	<hr>
	<div class="col-12">
		<form action="" method="post" enctype="text/plain">
			<input type="text" name="fname" size="40" placeholder="Your First Name*" required>
			<input type="text" name="lname" size="40" placeholder="Your Last Name*" required><br>
			<input type="text" name="email" size="40" placeholder="Your Email*" required>
			<input type="text" name="phoneNo" size="40" placeholder="Your Phone No"><br>
			<textarea name="textarea" placeholder="Message for me*" required></textarea><br>
			<input type="submit" name="submit" value="Send Message">
		</form>	
	</div>
</div>
<footer>
	<div class="col-6" style="text-align:center;margin-top:40px;">
		<a href="https://www.facebook.com/ashok.pundir.54" class="fa fa-facebook"></a>
		<a href="https://www.instagram.com/iamashok1/" class="fa fa-instagram"></a>
	</div>
	<div class="col-6">
		<p>� 2018 Ashok Pundir. All Rights Reserved</p>
	</div>
</footer>
</body>
</html>