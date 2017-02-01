<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Spice Heaven</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- fonts -->
    <link href="css/fonts.css" rel="stylesheet">
    <!-- font awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">	
    <!-- bxSlider CSS file -->
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <!-- custom -->
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,700i" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Kristi" rel="stylesheet"> 
	<link href="css/normal.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	
</head>
<body>
<section class="header_block">
<div class="imp"> 
<div class="header_fixed">
	<!--
	<div class="sub_bar">
		<div class="container">
			<div class="col-md-6">
				<div class="sub_left">
					<span><i class="fa fa-map-marker" aria-hidden="true"></i> 732/21 Second Street, King Street, United Kingdom</span>
					<span><i class="fa fa-phone" aria-hidden="true"></i> +65.4566743</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="sub_right">
					<ul>
						<li><a href="#">Menu </a></li>
						<li><a href="#">Cart </a></li>
						<li><a href="#">Test Drive </a></li>
						<li><a href="#">Purchase </a></li>
					</ul>
					<div class="social">
					<span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
					<span><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
					<span><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></span>
					<span><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></span>
					<span><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
-->
	<div class="container first">
		<div class="col-md-3">
			<div class="logo"> 
				<a href="http://www.spiceheaven.com.au/" ><img src="images/final_logo2.png" alt="logo" /></a>
			</div>
		</div>
		<div class="col-md-9">
			<div class="navigation"> 
				<ul>
					<li><a href="index.html">Home </i></a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="menu.html">Menu </a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="container second">
		<div class="col-md-3">
			<div class="logo"> 
				<a href="http://www.spiceheaven.com.au/" ><img src="images/final_logo.png" alt="logo" /></a>
			</div>
		</div>
		<div class="col-md-9">
			<div class="navigation"> 
				<ul>
					<li><a href="index.html">Home </i></a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="menu.html">Menu </a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
<div class="mobile_nav">
		<div class="mobile_veiw">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="glyphicon glyphicon-menu-hamburger spice"> </span>
					
				  </button>
				  <div class="col-md-3">
						<div class="logo"> 
							<a href="http://www.spiceheaven.com.au/" ><img src="images/final_logo.png" alt="logo" /></a>
						</div>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
								<li><a href="index.html">Home </i></a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="menu.html">Menu </a></li>
								<li><a href="contact.html">Contact Us</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
	<div class="container">
		<div class="col-md-8">
			<div class="welcome_text wow fadeInLeft animated" data-wow-duration="2s"> 
				<h2>Welcome to </h2>
				<h3>SPICE HEAVEN RESTAURANT </h3>
				<p>AN AUTHENTIC INDIAN CUISINE</p>
			</div>
		</div>
		
	</div>
</section> 

   
    <?php //include 'inc/rightbar.php'; ?>

<?php
/**
 * This example shows making an SMTP connection without using authentication.


 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require_once 'inc/PHPMailerAutoload.php';
include_once('inc/class.phpmailer.php');
require_once('inc/class.smtp.php');

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
//$mail->Host = "smtp.gmail.com";
$mail->Host = "mail.spiceheaven.com.au";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;

// SMTP username
$mail->Username = 'info@spiceheaven.com.au';                 
$mail->Password = 'nK{yk6~IUuPL';


//Set who the message is to be sent from
$mail->setFrom('info@spiceheaven.com.au', 'Spice Heaven');
//Set an alternative reply-to address
$mail->addReplyTo('kshitij.fboxer@gmail.com', 'Spice Heaven');
//Set who the message is to be sent to
$mail->addAddress('kshitij.fboxer@gmail.com', 'Spice Heaven');
//Set the subject line
//$mail->Subject = $_POST['subject'];
$mail->Subject = 'Message from '.$_POST['fname'].' at Spice Heaven';
//Read an HTML message body from an e xternal file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$phone= $_POST['mobile'];
//$company= $_POST['company'];
///$country= $_POST['country'];
///$platform= $_POST['platform'];
//$budget= $_POST['budget'];
//$subject= $_POST['subject'];
$message= $_POST['message'];
//$body.= $_POST['Address'];
$body= <<<EOD

<strong>First Name:</strong> $fname
<br />
<strong>Last Name:</strong> $lname
<br />
<br />
<strong>Email:</strong> $email
<br />
<br />
<strong>Phone:</strong> $phone
<br />
<strong>Message us:</strong> $message

<br />
<br />
EOD;


//$body= eregi_replace("[\]",'',$body);


 //$full_name =  // required
 //$address =  // required
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML='output';
//echo $mail->msgHTML->full_name;

//echo $mail->msgHTML->address;


//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
 $mail->MsgHTML($body);



//send the message, check for errors

if (!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    echo "Sorry not send";
	header( "refresh:500;url=index.html" );
	
} else {

    echo "<div class='inquiry-message'>Message sent!  Contact you soon</div>";
	header( "refresh:500;url=index.html" );
}
?>

</h1>
</div>
</div>
	<section class="footer">
		<div class="container">
			<div class="col-md-3 col-sm-6">
				<div class="footer_tab"> 
					<div class="footer_logo">
						<img src="images/final_logo2.png"  alt="logo"/>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="map">
					<iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=%202%2F119-121%20Grange%20Road%2CAllenby%20Gardens%20Adelaide%2C%20South%20Australia&key=AIzaSyAf09-nCBXM7ZDIYYhC7nRdMp3kZUVFl9Q" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="footer_tab2">
					<h2>Contact</h2>
					<div class="contact_block">
						<p><i class="fa fa-map-marker" aria-hidden="true"></i>
							2/119-121 Grange Road,Allenby Gardens
							Adelaide, South Australia
						</p>
							<h3><a href="tel:0883400093" ><i class="fa fa-phone" aria-hidden="true"></i>
							08 8340 0093 </a></h3>
							<h3><a href="mailto:info@spiceheaven.com.au"><i class="fa fa-envelope-o" aria-hidden="true"></i>
							 info@spiceheaven.com.au</a></h3>
							<h3><a href="www.spiceheaven.com.au"><i class="fa fa-globe" aria-hidden="true"></i> www.spiceheaven.com.au</a></h3>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
	<section class="sub_footer">
		<div class="container">
			<div class="col-md-6 col-sm-6">
				<div class="copyright"> 
					<h3>© Copyright Spice Heaven</h3>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="bottom_menu"> 
				<ul>
					<li><a href="index.html">Home </i></a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="menu.html">Menu </a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
				</div>
			</div>
		</div>
	</section>
	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/wow.js"></script>

<!-- bxSlider Javascript file -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- custom Javascript file -->
<script src="js/custom.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>