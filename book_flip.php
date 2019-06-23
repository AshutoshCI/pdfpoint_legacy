<?php
ob_start();
include("include/config_pvt.inc.php");
$id = $_GET['book_id'];
$cat_id = $_GET['cat_id'];

$sql_book_detail = "select * from pdfpoint_supersubcategory inner join pdfpoint_subcategory on pdfpoint_subcategory.subcategory_id=pdfpoint_supersubcategory.subcategory_id where supercategory_id = '$id'";

$sql_book_detail = mysqli_query($conn, $sql_book_detail);
$result_book_detail = mysqli_fetch_assoc($sql_book_detail);

include_once("view_article_count.php");


$ip = $_SERVER['REMOTE_ADDR'];
$articleid = $_GET['book_id'];

/*$purl = htmlspecialchars($_GET['page_url']);*/
//$purl = htmlspecialchars($_SERVER['HTTP_REFERER']);
include_once("tracking_url.php");

 $num = array();
	$files = glob("admin/$articleid/img/*.jpg*"); 
    for ($i=0; $i<count($files); $i++) { // $i mean to start first files names.
    $num[] = $files[$i];
 
       }


?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
<title>PDFpoint.com :: <?=$result_book_detail['supercategory_title']?></title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta name="Keywords" content="<?=$result_book_detail['supercategory_keywords']?>"/>
<meta name="Description" content="<?=$result_book_detail['supercategory_short_description']?>"/>

<meta property="og:title" content="PDFpoint.com :: <?=$result_book_detail['supercategory_title']?>"/>
<meta property="og:image" content="<?=SITE_SSL_PATH?>admin/supercategory_long_image/<?=$result_book_detail['supercategory_long_image']?>"/>
<meta property="og:site_name" content="PDFpoint"/>
<meta property="og:description" content="<?=$result_book_detail['supercategory_short_description']?>"/>
	


<script type='text/javascript'>
	var mytheme_urls = {
		stickynav:'enable'
 		,scroll:'enable'
	};
 </script>
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/shortcodes.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/tooltipster-shadow.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/style.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/main-style.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/responsive.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?=SITE_SSL_PATH?>css/fonts.css' type='text/css' media='all' />
<link rel="stylesheet" type="text/css" href="<?=SITE_SSL_PATH?>flip_css/css/bookblock.css" />
<link rel="stylesheet" type="text/css" href="<?=SITE_SSL_PATH?>flip_css/css/demo1.css" />
<script src="<?=SITE_SSL_PATH?>flip_css/js/modernizr.custom.js"></script>

<script>
(function($) {

    $(function() {
        $( "#name" ).autocomplete({
            source: '<?=SITE_SSL_PATH?>ajax_search.php'
        });
        
    });
    
})( jQuery );
</script>
<script type="text/javascript">

        function viewCount(articleid) {
            var currentLocation = window.location;
            var xhr;
            if (window.XMLHttpRequest) xhr = new XMLHttpRequest(); // all browsers
            else xhr = new ActiveXObject("Microsoft.XMLHTTP");     // for IE

            var url = '<?=SITE_SSL_PATH?>article_view_count.php?aid=' + articleid+'&page_url='+currentLocation;
            xhr.open('GET', url, false);
            xhr.onreadystatechange = function () {
                if (xhr.readyState===4 && xhr.status===200) {
                    var div = document.getElementById('viewno');
                    div.innerHTML = xhr.responseText;
                    var div = document.getElementById('viewcntno');
                    div.innerHTML = xhr.responseText;
                }
            };
            xhr.send();
            // ajax stop
            return false;
        }
    </script>

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

.featured-listing .container .marquee ul li{ font-size:13px; font-weight:normal; padding-bottom:10px; border-bottom:1px dotted #999; margin-bottom:10px;}
/* Make it move! */
@keyframes marquee {
    0%   { top:   8em }
    100% { top: -11em }
}

/* Make it look pretty */
.microsoft .marquee {
	margin: 0;
    padding: 0 1em;
    line-height: 1.5em;
}

.microsoft:before, .microsoft::before,
.microsoft:after,  .microsoft::after {
    left: 0;
    z-index: 1;
    content: '';
    position: absolute;
    pointer-events: none;
    width: 100%; height: 2em;
    background-image: linear-gradient(180deg, #FFF, rgba(255,255,255,0));
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

.zoom:hover {
    -ms-transform: scale(2); /* IE 9 */
    -webkit-transform: scale(2); /* Safari 3-8 */
    transform: scale(2); 
}

</style>
</head>
<body class="home page">
<?php include_once("analyticstracking.php") ?>

<!-- **Wrapper** -->
<div class="wrapper">
  <div id="header-wrapper">
    <header id="header">
     
      <?php include("topbar.php");?>
      <!-- **Header Container** -->
      <div class="container"> 

        <!-- **Navigation** -->
       <?php include("header.php");?>
      <!-- **Header Container End** --> 
      
    </header>
  </div>
  <section class='breadcrumb-section dark-bg'>
    <div class='breadcrumb-wrapper'>
        <h1 class='page-title'><marquee width="100%">PDFpoint.com, Academic database...!!! Your Solution is Here...</marquee></h1>
    </div>
  </section>
  <div id="main" style="padding:0;">
    <div id="main-container" class="container">
	<div id="main-container" class="container">
      <div class="content-full-width">
        <div class="search-wrapper">
          <form action="<?=SITE_SSL_PATH?>search_data" method="post">
            <div class="column dt-sc-three-fourth first">
              <input class="search-input" type = "text" id = "name" required placeholder="Find topic wise Study Material, Ebooks, Subject Notes, Projects,Question paper,Lecture Videos and College event Videos, Research Paper." name="name" >           
            </div>
            <div class="column dt-sc-one-fourth" style="margin:0;">
              <button class="btn-search" type="submit">Search</button>
            </div>
            <div class="clear"></div>
          </form>
		  <!--<div id="display_inside"></div>!-->
        </div>
      </div>
     <div class="dt-sc-border-title ">
             <h2><span><?=$result_book_detail['subcategory_title']?> >><?=$result_book_detail['supercategory_name']?></span></h2>
            </div>
       <section id="primary" class="page-with-sidebar with-right-sidebar">
        <div id="post-2345" class="post-2263 page type-page status-publish hentry">
		
          <div class='column dt-sc-one-column'>
           
            <div class="contact_content1">
            	<div class='book_container'>
				
				<? if($result_book_detail['supercategory_channel'] == 1) {?>
				<div class=" column dt-sc-one-column with-sidebar blog-fullwidth first">
          <article class="blog-entry post-449 post type-post status-publish format-video hentry category-apartment category-cottage category-retail tag-blog-2 tag-news-2 tag-video-2 post_format-post-format-video">
            <div class="entry-thumb-meta">
              <div class="entry-thumb">
                <div class='dt-video-wrap'>
                  <iframe src="<?=$result_book_detail['supercategory_content']?>" width="1060" height="500" frameborder="0" title="<?=$result_book_detail['supercategory_title']?>"></iframe>
                </div>
              </div>
             
            <div class="entry-details">
              <div class="entry-title">
                <h4><a href="#" title="Vimeo &#8211; Nam malesuada augue"> <?=$result_book_detail['supercategory_title']?></a></h4>
              </div>
              
              <div class="entry-body">
                <p><?=$result_book_detail['supercategory_short_description']?></p>
                </div>
            </div>
          </article>
          <div class="hr"> </div>
        </div>
				<? } else {  ?>
  		         <div id='book1'>
				
<div class="main clearfix">
				<div class="bb-custom-wrapper">
					
					<div id="bb-bookblock" class="bb-bookblock">
					
					<?php
							foreach($num as $val){
								?>
								<div class="bb-item">
								
								<img src="<?=SITE_SSL_PATH?><?=$val?>" alt="image01" height="200%" width="90%" />

								</div>
										<?	}?>
										
						
					</div>
					<nav>
						<a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
						<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
						<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
						<a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
					</nav>
				</div>
			</div>				 

		</div>
				<?}?>
	            </div>
                
            </div>
          </div>
        </div>
      </section>
     
      <section id="secondary" class="contact_content">
        <aside class="widget widget_popular_entries">
		
            <h3 style="font-size:18px;"><span>Recent Post</span></h3>
            <div class="recent-property-widget">
              <ul>
			  <li><a class="thumb" href="<?=SITE_SSL_PATH?>article/<?=$result_book_detail['category_id']?>/<?=$result_book_detail['supercategory_id']?>" onclick='viewCount("<?=$result_book_detail['supercategory_id']?>")'> <img alt="<?=$result_book_detail['supercategory_title']?>" src="<?=SITE_SSL_PATH?>admin/supercategory_long_image/<?=$result_book_detail['supercategory_long_image']?>"> </a>
			  <h6><a href="<?=SITE_SSL_PATH?>article/<?=$result_book_detail['category_id']?>/<?=$result_book_detail['supercategory_id']?>" onclick='viewCount("<?=$result_book_detail['supercategory_id']?>")'><?=$result_book_detail['supercategory_title']?></a></h6>
                  <p><?=$result_book_detail['supercategory_slug']?></span></p>
				  <div class="tags"><span class="fa fa-eye"> </span><span><?=view_article_count($result_book_detail['supercategory_id'],$conn)?></span></div>
			  </li>
			  
			  <?
			  
			  $sql_ebook_channel_recent = "select * from pdfpoint_supersubcategory where category_id='$cat_id' && supercategory_id!='$id' && supercategory_channel ='". $result_book_detail['supercategory_channel'] ."' && supercategory_url ='". $result_book_detail['supercategory_url'] ."' && supercategory_id != '$id' && supercategory_privileges = 'Show' limit 4";

			   $sql_ebook_channel_recent = mysqli_query($conn, $sql_ebook_channel_recent);
			 
			 while($result_ebook_channel_recent = mysqli_fetch_assoc($sql_ebook_channel_recent)){
			  ?>
                <li> <a class="thumb" href="<?=SITE_SSL_PATH?>article/<?=$result_ebook_channel_recent['category_id']?>/<?=$result_ebook_channel_recent['supercategory_id']?>" onclick='viewCount("<?=$result_ebook_channel_recent['supercategory_id']?>")'> <img alt="<?=$result_ebook_channel_recent['supercategory_title']?>" src="<?=SITE_SSL_PATH?>admin/supercategory_long_image/<?=$result_ebook_channel_recent['supercategory_long_image']?>"> </a>
                  <h6><a href="<?=SITE_SSL_PATH?>article/<?=$result_ebook_channel_recent['category_id']?>/<?=$result_ebook_channel_recent['supercategory_id']?>" onclick='viewCount("<?=$result_ebook_channel_recent['supercategory_id']?>")'><?=$result_ebook_channel_recent['supercategory_title']?></a></h6>
                  <p><?=$result_ebook_channel_recent['supercategory_slug']?></span></p>
				  <div class="tags"><span class="fa fa-eye"> </span><span><?=view_article_count($result_ebook_channel_recent['supercategory_id'],$conn)?></span></div>
                </li>
			  <?}?>
                </ul>
            </div>
          </aside>
      </section>
    </div>
  </div>
  
  <!--</div>--><!-- **Main - End** --> 
  
  <!-- **Footer** -->
  <?php include("footer.php");?>
</div>
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/jquery.smartresize.js'></script> 
<script type='text/javascript' src='<?=SITE_SSL_PATH?>js/jquery.mobilemenu.js'></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="<?=SITE_SSL_PATH?>flip_css/js/jquerypp.custom.js"></script>
		<script src="<?=SITE_SSL_PATH?>flip_css/js/jquery.bookblock.js"></script>
		<script>
			var Page = (function() {
				
				var config = {
						$bookBlock : $( '#bb-bookblock' ),
						$navNext : $( '#bb-nav-next' ),
						$navPrev : $( '#bb-nav-prev' ),
						$navFirst : $( '#bb-nav-first' ),
						$navLast : $( '#bb-nav-last' )
					},
					init = function() {
						config.$bookBlock.bookblock( {
							speed : 800,
							shadowSides : 0.8,
							shadowFlip : 0.7
						} );
						initEvents();
					},
					initEvents = function() {
						
						var $slides = config.$bookBlock.children();

						// add navigation events
						config.$navNext.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'next' );
							return false;
						} );

						config.$navPrev.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'prev' );
							return false;
						} );

						config.$navFirst.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'first' );
							return false;
						} );

						config.$navLast.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'last' );
							return false;
						} );
						
						// add swipe events
						$slides.on( {
							'swipeleft' : function( event ) {
								config.$bookBlock.bookblock( 'next' );
								return false;
							},
							'swiperight' : function( event ) {
								config.$bookBlock.bookblock( 'prev' );
								return false;
							}
						} );

						// add keyboard events
						$( document ).keydown( function(e) {
							var keyCode = e.keyCode || e.which,
								arrow = {
									left : 37,
									up : 38,
									right : 39,
									down : 40
								};

							switch (keyCode) {
								case arrow.left:
									config.$bookBlock.bookblock( 'prev' );
									break;
								case arrow.right:
									config.$bookBlock.bookblock( 'next' );
									break;
							}
						} );
					};

					return { init : init };

			})();
		</script>
		<script>
				Page.init();
		</script>

</body>
</html>