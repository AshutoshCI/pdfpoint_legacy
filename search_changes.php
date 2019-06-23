<?
include("include/config_pvt.inc.php");
$name = $_POST['name'];

$limit = 5;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit; 

$sql_1 = "SELECT * FROM pdfpoint_supersubcategory WHERE (supercategory_title LIKE '%$name%' OR supercategory_keywords LIKE '%$name%') AND supercategory_privileges = 'Show' LIMIT $start_from, $limit";
$sql = mysqli_query($conn, $sql_1);

function view_article_count($articleId,$conn){
    // echo $articleId; echo "<br>"; echo $conn;
    $countSql = "select ah_click from pdfpoint_article_hits where ah_article = '$articleId'";
    $sqlQuery = mysqli_query($conn, $countSql);
    $count = 0;
    while($rowResult = mysqli_fetch_array($sqlQuery)){
        $count += $rowResult['ah_click'];
    }
    return $count;
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
<title>PDFpoint.com, India's 1st Academic Database...!!! Your Solution is Here...</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta name="Keywords" content="engineering, management, medical, literature, 10+2, competition,textbook, ebooks, subject notes, question paper, research paper, projects, study material,students creations, poems, story, novel, fantasy, comics. "/>
<meta name="Description" content="India's 1 Academic database. Find topic wise Study Material, Ebooks, Subject Notes, Projects,Question paper,Lecture Videos and College event Videos, Research Paper."/>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
(function($) {

    $(function() {
        $( "#name" ).autocomplete({
            source: 'ajax_search.php'
        });
        
    });
    
})( jQuery );
</script>
<style type="text/css">
nav#main-menu ul li a, .mobile-menu {
	font-family: Lato, sans-serif;
}
body {
	font-family: Lato, sans-serif;
	margin: 0;
	padding: 0;
	font-size: 14px;
}
H1 {
	font-family: Lato;
}
H2 {
	font-family: Lato;
}
H3 {
	font-family: Lato;
}
H4 {
	font-family: Lato;
}
H5 {
	font-family: Lato;
}
H6 {
	font-family: Lato;
}
.featured-listing .container {
	width: 100%;
	overflow: hidden;
	position: relative;
	box-sizing: border-box;
	height: 250px;
}
.marquee {
	top: 6em;
	position: relative;
	box-sizing: border-box;
	animation: marquee 15s linear infinite;
	text-align: left;
}
.marquee:hover {
	animation-play-state: paused;
}
.featured-listing .container .marquee ul li {
	font-size: 13px;
	font-weight: normal;
	padding-bottom: 10px;
	border-bottom: 1px dotted #999;
	margin-bottom: 10px;
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
	bottom: 0;
}
.dt-sc-social-icons li {
	margin: 0;
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
      <h1 class="page-title">
        <marquee width="100%">
        PDFpoint.com, Academic database...!!! Your Solution is Here...
        </marquee>
      </h1>
      <!--<div class="breadcrumb"> <a href="#">Home</a><span  class = "fa default" > </span>
          <h2>II Column With Left Sidebar</h2>
        </div>!--> 
    </div>
  </section>
  <!--<section class='breadcrumb-section dark-bg'>
    <div class='breadcrumb-wrapper'>
      <div class="container">
        <h1 class='page-title'>Filter : <?=$_POST['name']?></h1>
        <div class="breadcrumb"> <a href="#">Home</a><span  class = "fa default" > </span>
          <h2>Filter</h2>
        </div>
      </div>
    </div>
  </section>-->
  <div id="main" style="padding:0;">
    <div id="main-container" class="container"> 
	<div class="content-full-width">
        <div class="search-wrapper">
          <form action="search.php" method="post">
            <div class="column dt-sc-three-fourth first">
              <input class="search-input" type = "text" id = "name" placeholder="Find topic wise Study Material, Ebooks, Subject Notes, Projects,Question paper,Lecture Videos and College event Videos, Research Paper." name="name" >           
            </div>
            <div class="column dt-sc-one-fourth" style="margin:0;">
              <button class="btn-search" type="submit">Search</button>
            </div>
            <div class="clear"></div>
          </form>
		  <!--<div id="display_inside"></div>!-->
        </div>
      </div>
      <!-- **Primary Section** -->
      <div class="contact_content">
        <table>
          <tr>
            <th colspan="2">Filter data related - <font color="green">
              <?=$_POST['name']?>
              </font></th>
          </tr>
          <?if(mysqli_num_rows($sql)>0){
		  while($query3=mysqli_fetch_array($sql)){
		  ?>
          <tr>
            <td><img src='admin/supercategory_long_image/<?=$query3['supercategory_long_image']?>' width='110px' height='150px' title='<?=$query3['supercategory_title']?>' alt='<?=$query3['supercategory_title']?>' /></td>
            <td class="search_tbl_txt">
            <p><strong>Book Name :: <?php echo $query3['supercategory_title']; ?></strong></p>
            <p><strong>Written by ::</strong> <?=$query3['supercategory_slug']?><br><span class="fa fa-eye"> </span> <span><?=view_article_count($query3['supercategory_id'],$conn)?></span></p>

		   <p class="des">The main agenda of this website is to feed complete package to the students as well as professionals. Generally video lectures, creative writing, projects, sample papers, notes are found at different sites. <a href="book_show.php?cat_id=<?=$query3['category_id']?>&&book_id=<?=$query3['supercategory_id']?>">Read More...</a></p></td>

		  </tr>
          <?} }else {?>
          <tr>
            <td colspan="2"><font color="red">No Record Found
              </fon></td>
          </tr>
          <?php }?>
          
        </table>
      </div>
	  <?
	 // $sql = "SELECT COUNT(id) FROM posts";  
$rs_result = mysqli_query($conn, $sql_1);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<a href='search.php?page=".$i."'>".$i."</a>";  
};  
echo $pagLink . "</div>";  
	  
	  ?>
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