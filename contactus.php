<?php
include("include/config_pvt.inc.php");
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
<title>PDFpoint.com :: Contact us</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta name="Keywords" content="contact us, pdfpoint contact us, pdfpoint contact us page, connect with pdfpoint"/>
<meta name="Description" content="Feel free to drop a message for any type of query, suggestion and feedback. Let me know the need of your study material. Send your literature writings to upload on the website."/>
<script type='text/javascript'>
	var mytheme_urls = {
		stickynav:'enable'
 		,scroll:'enable'
	};
 </script>
  <!--  Added by GoogleAnalytics integration -->
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75381911-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- /Added by GoogleAnalytics integration -->
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/shortcodes.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/tooltipster-shadow.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/style.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/main-style.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/responsive.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/fonts.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/hover-effect.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/left-menu.css' type='text/css' media='all' />
<link rel="stylesheet" href="<?=SITE_SSL_PATH?>css/bootstrap.min.css">
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/jquery.js'></script>
<style type="text/css">
nav#main-menu ul li a, .mobile-menu {
	font-family:Lato, sans-serif;
}
body {
	font-family:Lato, sans-serif;
	margin:0;
	padding:0;
	font-size:14px;
}
H1 {
	font-family:Lato;
}
H2 {
	font-family:Lato;
}
H3 {
	font-family:Lato;
}
H4 {
	font-family:Lato;
}
H5 {
	font-family:Lato;
}
H6 {
	font-family:Lato;
}
.featured-listing .container {
	width: 100%;
	overflow: hidden;
	position: relative;
	box-sizing: border-box;
	height:250px;
}
.marquee {
	top: 6em;
	position: relative;
	box-sizing: border-box;
	animation: marquee 15s linear infinite;
	text-align:left;
}
.marquee:hover {
	animation-play-state: paused;
}
.featured-listing .container .marquee ul li {
	font-size:13px;
	font-weight:normal;
	padding-bottom:10px;
	border-bottom:1px dotted #999;
	margin-bottom:10px;
}
/* Make it move! */
@keyframes marquee {
 0% {
top:   8em
}
 100% {
top: -11em
}
}
/* Make it look pretty */
.microsoft .marquee {
	margin: 0;
	padding: 0 1em;
	line-height: 1.5em;
}
 .microsoft:before, .microsoft::before, .microsoft:after, .microsoft::after {
 left: 0;
 z-index: 1;
 content: '';
 position: absolute;
 pointer-events: none;
 width: 100%;
height: 2em;
 background-image: linear-gradient(180deg, #FFF, rgba(255, 255, 255, 0));
}
 .microsoft:after, .microsoft::after {
 bottom: 0;
 transform: rotate(180deg);
}
 .microsoft:before, .microsoft::before {
 top: 0;
}
/* Style the links */
.vanity {
	color: #333;
	text-align: center;
}
.vanity a, .microsoft a {
	color: #1570A6;
 transition: color .5s;
	text-decoration: none;
}
.vanity a:hover, .microsoft a:hover {
	color: #F65314;
}
.dt-sc-social-icons li img:first-child {
	bottom:0;
}
.dt-sc-social-icons li {
	margin:0;
}
</style>
<meta name="generator" content="WordPress 4.0" />
</head>
<body class="home page">

<!-- **Wrapper** -->
<div class="wrapper">
  <div id="header-wrapper">
    <header id="header">
 <?php include("topbar.php");?>
      
      <!-- **Header Container** -->
      <div class="container"> 
        <!-- **Logo - End** --> 
        
        <!-- **Navigation** -->
        <?php include("header.php");?>
		
    </header>
  </div>
  <section class="breadcrumb-section dark-bg">
    <div class="breadcrumb-wrapper">
        <h1 class="page-title"><marquee width="100%">PDFpoint.com, Academic database...!!! Your Solution is Here...</marquee></h1>
    </div>
  </section>
 <!-- <section class='breadcrumb-section dark-bg'>
    <div class='breadcrumb-wrapper'>
      <div class="container">
        <h1 class='page-title'>Contact Us</h1>
        </div>
      </div>
    </div>
  </section>-->
  <div id="main"><?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "ashu0vns@gmail.com";
 
    $email_subject = "PDFpoint.com ::" . $_POST['name'];
 
     
 
     /*
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }*/
 
     
 
    // validation expected data exists
 
    /*if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['subject']) ||
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }*/
 
     
 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
 
    $subject = $_POST['subject']; // required
 
    $message = $_POST['message']; // not required
 
    //$comments = $_POST['comments']; // required
 
     
 
    //$error_message = "";
 
    /*$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }*/
 
 /* if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($message) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }*/
 
    $email_message = "Form details below.\n\n";
 
     
 /*
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
   */  
 
    $email_message .= "Name: ".$name."\n";
 
  //  $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".$email_from."\n";
 
    $email_message .= "Subject: ".$subject."\n";
 
    $email_message .= "Message: ".$message."\n";
 
  
 
$headers = "From: PDFpoint.com" . "\r\n" .
"CC: test@gmail.com";

 @mail($email_to, $email_subject, $email_message, $headers); 

 ?>
 
<!-- include your own success html here -->
<div style="margin-left: 7cm; color: green;">Thank you for contacting us. We will be in touch with you very soon.</div>
 
 
 
<?php
}
?> 
	
    <div id="main-container" class="container"> 
      <!-- **Primary Section** -->
      <section class="content-full-width" id="primary"> 
        <div class="dt-sc-border-title ">
        <h2><span> Contact us Pdfpoint</span></h2>
      </div>
        <div class="contact_content">
          <p>Feel free to drop a message for any type of query, suggestion and feedback. Let me know the need of your study material. Send your literature writings to upload on the website.</p>
                
        <br><br>
        <div class="post-2600 page type-page status-publish hentry" id="post-2600">
		       	<div class="column dt-sc-two-third  first">
              <form method="post" action="" name="">
                <div class="dt-sc-one-half column first">
                  <p>Your Name (required) <span class="wpcf7-form-control-wrap your-name">
                    <input type="text" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" size="40" value="" name="name" required>
                    </span> </p>
                </div>
                <div class="dt-sc-one-half column">
                  <p>Your Email (required) <span class="wpcf7-form-control-wrap your-email">
                    <input type="email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" size="40" value="" name="email" required>
                    </span> </p>
                </div>
                <div class="dt-sc-one-column column">
                  <p>Subject <span class="wpcf7-form-control-wrap your-subject">
                    <input type="text" class="wpcf7-form-control wpcf7-text" size="40" value="" name="subject" required>
                    </span> </p>
                </div>
                <div class="dt-sc-one-column column">
                  <p>Your Message <span class="wpcf7-form-control-wrap your-message">
                    <textarea class="wpcf7-form-control wpcf7-textarea" rows="10" cols="40" name="message" required></textarea>
                    </span> </p>
                </div>
                <p>
                  <input type="submit" class="wpcf7-form-control wpcf7-submit" value="Send">
                </p>
              </form>
          </div>
          <div class="column dt-sc-one-third  ">
            <div class="dt-sc-border-title ">
              <h2><span>Contact Details</span></h2>
            </div>
            <div class=" grey-box">
          <p> <span class="fa fa-phone"> </span> <strong>Phone</strong> :+91-8744947208, +91-8178551671 </p>
              <p> <span class="fa fa-envelope-o"> </span> <strong>Email</strong> : <a href="mailto: info@pdfpoint.com">info@pdfpoint.com</a> </p>
              <p> <span class="fa fa-globe"> </span> <strong>Website</strong> : <a href="http://pdfpoint.com/">PDFpoint.com</a> </p>
              <h4>Working Hours</h4>
              <p class="working-hours"> <span class="fa fa-clock-o"></span>Mon - Sat : 8am - 6pm<br>
                Sunday : Closed</p>
            </div>
          </div>
        </div>
        </div>
        <!-- #post-2600 --> 
        
      </section>
    </div>
  </div>
  
  <!-- **Footer** -->
<?php include("footer.php");?>
</div>
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/shortcodes.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/jquery.form.min.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/scripts.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/easing.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/jquery.nicescroll.min.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/jquery.ui.totop.min.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/jquery.sticky.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/jquery.isotope.min.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/jquery.prettyPhoto.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/jquery.fitvids.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/jquery.cookie.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/jquery.smartresize.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/jquery.mobilemenu.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/custom.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/jquery.carouFredSel-6.2.1-packed.js'></script> 
</body>
</html>