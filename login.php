<?php
include("include/config_pvt.inc.php");
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
<title>PDFpointcom, India's 1st Academic Database...!!! Your Solution is Here...</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta name="Keywords" content="engineering, management, medical, literature, 10+2, competition,textbook, ebooks, subject notes, question paper, research paper, projects, study material,students creations, poems, story, novel, fantasy, comics. "/>
<meta name="Description" content="India's 1st Academic database. Find topic wise Study Material, Ebooks, Subject Notes, Projects,Question paper,Lecture Videos and College event Videos, Research Paper."/>
<script type='text/javascript'>
	var mytheme_urls = {
		stickynav:'enable'
 		,scroll:'enable'
	};
 </script>
<link rel='stylesheet'  href='css/shortcodes.css' type='text/css' media='all' />
<link rel='stylesheet'  href='css/tooltipster-shadow.css' type='text/css' media='all' />
<link rel='stylesheet'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet'  href='css/main-style.css' type='text/css' media='all' />
<link rel='stylesheet'  href='css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet'  href='css/responsive.css' type='text/css' media='all' />
<link rel='stylesheet'  href='css/fonts.css' type='text/css' media='all' />
<link rel='stylesheet'  href='css/hover-effect.css' type='text/css' media='all' />
<link rel='stylesheet'  href='css/left-menu.css' type='text/css' media='all' />
<script type='text/javascript' src='js/jquery.js'></script>
<script src="js/script.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css_login/bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="css_login/style.css" rel="stylesheet" type="text/css" />
    <!-- font CSS -->
    <link href="css_login/font-awesome.css" rel="stylesheet" />
    <!-- //font-awesome icons -->
    <!-- js-->
     <script src="js/TemplateJS/jquery-2.2.2.js" type="text/javascript"></script>
    <!--//Metis Menu -->
    <script type="text/javascript">

//     <!--        //for preventing Back cursor --- works on all browsers-->
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 10);
        window.onunload = function () { null };

        //         <!-- //for disable back cursor on the basis of session--  works on few browsers--- >
        $(document).ready(function () {
            $(".pageload").on("click", function (e) {
                e.preventDefault();
                $.session.remove('Id');
                $.session.clear();
                var checksession = $.session.get('test');
                if (checksession != undefined) {
                    $(".page-content").load("../Login.aspx");
                }
            });
        });

        //validate login form
        function Validate() {
            var ret = true;
            if (document.getElementById("userId").value == "") {
                document.getElementById("userId_validation").textContent = "Please enter user ID";
                userId_validation.style.display = "block";
                userId_validation.style.color = "red";
                ret = false;
            }
            else { document.getElementById("userId_validation").textContent = ""; }

            if (document.getElementById("userPw").value == "") {
                document.getElementById("userPw_validation").textContent = "Please enter password";
                userPw_validation.style.display = "block";
                userPw_validation.style.color = "red";
                ret = false;
            }
            else {
                document.getElementById("userPw_validation").textContent = "";
            }
        }
        //User Login 
        $(function () {
            $("[id*=btnLogin]").bind("click", function () {
                var valid = Validate();
                //  if (valid == true) {
                var userL = {};
                userL.s_Employee_Id = $("[id*=userId]").val();
                userL.s_Employee_Login_password = $("[id*=userPw]").val();
                $.ajax({
                    type: "post",
                    contentType: "application/json; charset=utf-8",
                    url: "Login.aspx/Login_user",
                    data: '{userL: ' + JSON.stringify(userL) + '}',
                    dataType: "json",
                    success: function (data) {
                        for (var i = 0; i < data.d.length; i++) {
                            var Post = data.d[i].s_Employee_Post;
                            var status = data.d[i].s_status;
                            var role = data.d[i].s_Role;
                            var m = data.d[i].message;

                            if (status == "3" || status == "2") // id=3 is pending & id=2 is blocked
                            {
                                document.getElementById("userPw_validation").textContent = "You Not Allow To Login";
                                userPw_validation.style.display = "block";
                                userPw_validation.style.color = "red";
                            }
                            else 

                            if (status == "1") {
                                if (Post == "admin") {
                                    var eid = document.getElementById("userId").value;
                                    var pic = data.d[i].s_pic;
                                    sessionStorage.setItem('Id', eid);
                                    sessionStorage.setItem('post', Post);
                                    sessionStorage.setItem('s_pic', pic);
                                    sessionStorage.setItem('s_Role', role);
                                    window.location.href = "../Content_page/Welcome_home.aspx";
                                }
                                else if (Post == "Trainee") {
                                    var eid = document.getElementById("userId").value;
                                    var pic = data.d[i].s_pic;
                                    sessionStorage.setItem('Id', eid);
                                    sessionStorage.setItem('post', Post);
                                    sessionStorage.setItem('s_pic', pic);
                                    sessionStorage.setItem('s_Role', role);
                                    window.location.href = "../Content_page/TRainee.aspx";
                                }

                                else if (Post == "Employee") {
                                    var eid = document.getElementById("userId").value;
                                    var pic = data.d[i].s_pic;
                                    sessionStorage.setItem('Id', eid);
                                    sessionStorage.setItem('post', Post);
                                    sessionStorage.setItem('s_pic', pic);
                                    sessionStorage.setItem('s_Role', role);

                                    window.location.href = "../Content_page/Welcome_home.aspx";
                                }
                                else {
                                    document.getElementById("userPw_validation").textContent = m;
                                    userPw_validation.style.display = "block";
                                    userPw_validation.style.color = "red";
                                }
                            }
                            else {
                                document.getElementById("userPw_validation").textContent = m;
                                userPw_validation.style.display = "block";
                                userPw_validation.style.color = "red";
                            }
                        }
                    }

                });
                return false;
                window.location.reload();
            });
        });
            
    </script>
      <!-- Metis Menu -->
    
    <script src="js/TemplateJS/metisMenu.min.js" type="text/javascript"></script>
    <script src="js/TemplateJS/custom.js" type="text/javascript"></script>
    <link href="css/custom.css" rel="stylesheet" />
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
  <!--<section class='breadcrumb-section dark-bg'>
    <div class='breadcrumb-wrapper'>
      <div class="container">
        <h1 class='page-title'>Terms and Condition</h1>
        <div class="breadcrumb"> <a href="#">Home</a><span  class = "fa default" > </span>
          <h2></h2>
        </div>
      </div>
    </div>
  </section>!-->
  <div id="main">
    <div id="main-container" class="container">
 
<!--<iframe src="Privacypolicy.pdf" width="100%" height="600px"></iframe>!-->

               <div class="login-form">
                    <h4 style="text-align: center">
                        PDFpoint Login</h4>
                    <form name="LoginFrm" id="LoginForm" action="#" method="post">
                     <div class="bottom-form">
                                <div class="col-md-3 grid-form">
                                    
                                </div>
                                <div class="col-md-9 grid-form1">
                                <input type="text" name="TextId" id="userId" placeholder="User ID" style="margin-right:2%;"/>
                                 <span id="userId_validation" class="error"></span>
                                </div>
                                
                            </div>

                     <div class="bottom-form">
                                <div class="col-md-3 grid-form">
                                   
                                                                   </div>
                                <div class="col-md-9 grid-form1">
                                 <input type="password" name="TextPw" id="userPw" class="pass" placeholder="User password" style="margin-right:2%;" />
                    <span id="userPw_validation" class="error"></span>
                   </div>
                                <div class="clearfix"></div>
                            </div>

                     <div class="bottom-form">
                         <button class="btn btn-info btn-block" id="btnLogin" type="submit"> Log in</button>                  
                        <div class="clearfix"></div>
                            </div>                
                    <br />
                    <div style="height:40px">
                    <div style="float:left">  <a href="#">Forgot Password?</a></div>
                  <div style="float:left; margin:0 0 0 47%;"> <a href="<?=SITE_SSL_PATH?>register">SignUp</a>   </div> 
                    </div>
                    
                    </form>
                   
                </div>
                
            
    
    </div>
  </div>
  
  <!-- **Footer** -->
  <?php include("footer.php");?>
</div>
<script type='text/javascript' src='js/shortcodes.js'></script> 
<script type='text/javascript' src='js/jquery.form.min.js'></script> 
<script type='text/javascript' src='js/scripts.js'></script> 
<script type='text/javascript' src='js/easing.js'></script> 
<script type='text/javascript' src='js/jquery.nicescroll.min.js'></script> 
<script type='text/javascript' src='js/jquery.ui.totop.min.js'></script> 
<script type='text/javascript' src='js/jquery.sticky.js'></script> 
<script type='text/javascript' src='js/jquery.isotope.min.js'></script> 
<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script> 
<script type='text/javascript' src='js/jquery.fitvids.js'></script> 
<script type='text/javascript' src='js/jquery.cookie.js'></script> 
<script type='text/javascript' src='js/jquery.smartresize.js'></script> 
<script type='text/javascript' src='js/jquery.mobilemenu.js'></script> 
<script type='text/javascript' src='js/custom.js'></script> 
<script type='text/javascript' src='js/jquery.carouFredSel-6.2.1-packed.js'></script> 

</body>
</html>