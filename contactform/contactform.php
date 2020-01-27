<?php
/**
 * Created by PhpStorm.
 * User: ZiaulHaque
 * Date: 11-10-2015
 * Time: 18:21
 */
include '../nav.php';//include auth.php file on all secure pages
	
include("dbconnect.php");
$note=$_REQUEST['note'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Contact</title>
	<link type="text/css" rel="stylesheet" href="contactform.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script src="contactform/contact.js" type="text/javascript"></script>
</head>

<body background="../img/contact image.jpg"  >
    
		<div class="h1"> Contact With Us</div><br>
	
    <div class="h12">
    <h2>We will be glad to hear from you if:</h2><br>
    <ul>
	</li>You have found a mistake in our phone specifications.</li>
    <li> You have info about a phone which we don't have in our database.</li> 
    <li>You have found a broken link.</li>
    <li> You have a suggestion for improving our website or you want to request a feature.</li>
	</ul>
    <h2>Before sending us an email, please keep in mind:</h2>
	<ul>
    <li> We do not sell mobile phones.</li>
    <li> We do not know the price of any mobile phone in your country.</li>
    <li> We don't answer any "unlocking" related questions.</li>
    <li> We don't answer any "Which mobile should I buy?" questions.</li>
	</ul>
    </div>

<div >
    <?PHP if($note=='success')
    {
    echo "<div class=\"success\">Form successfully submitted!</div>";
    }
?>  
<div class="contact1">
	
	<div class="container-contact1">
	
			<div class="sidee">
			<!--<img src="contactform/logo.jpg" alt="ACM">-->
			<div><iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.1606714850504!2d72.8288362146627!3d18.96851028714971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce40ffcfcacd%3A0x5d71ff22760f8e77!2sM.H.%20Saboo%20Siddik%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1570973600640!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>
			<br>

	<form method="post" action="user_process.php" onsubmit = "return validation()">
		<div class="contact-title">
			<span class="">Contact Us</span>
		</div>
    	<div class="wrap-input1">
			<input class="input1" type="text" name="name" placeholder="Name" id="name" >
    	</div>
		<div class="wrap-input1">
			<input class="input1" type="text" name="email" placeholder="Email" id="email" >
		</div>
		<div class="wrap-input1">
			<input class="input1" type ='text' name="subject" placeholder="Subject" id="subject">
		</div>
		<div class="wrap-input1">
			<textarea class="input1" id="message" name="message" placeholder="Message" ></textarea>
		</div>
		<div align="center" class="wrap-input1">
			<input class="contact-button" type="submit" name="submit" id="submit">
		</div>
		
		</form>
	</div>
</div>

</div>
<footer>
<?php include '../footer.php'?>
</footer>
</body>
<script src="contact.js" type="text/javascript"></script>
</html>