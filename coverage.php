<?php
ob_start();

include("include/config_pvt.inc.php");
include("service/category.php");
$cat = new Category();

$id = $cat_id = $_GET['id'];
$sql_category_detail = $cat->getDataCategoryWise($id);
$sql_category_detail = mysqli_query($conn, $sql_category_detail);
$result_category_detail = mysqli_fetch_assoc($sql_category_detail);

include ("category_description.php");
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <title>PDFpoint.com :: <?= $result_category_detail['category_name'] ?></title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="<?= $result_category_detail['category_keywords'] ?>"/>
    <meta name="Description" content="<?= $result_category_detail['category_slug'] ?>"/>
    <script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery-1.11.2.min.js'></script>
    <script src="<?= SITE_SSL_PATH ?>js/owl.carousel.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script>
        (function ($) {

            $(function () {
                $("#name").autocomplete({
                    source: '<?=SITE_SSL_PATH?>ajax_search.php'
                });

            });

        })(jQuery);
    </script>
    <script type='text/javascript'>
        var mytheme_urls = {
            stickynav: 'enable'
            , scroll: 'enable'
        };
    </script>

    <!--  Added by GoogleAnalytics integration -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-75381911-1', 'auto');
        ga('send', 'pageview');

    </script>

    <!-- /Added by GoogleAnalytics integration -->

    <script>
        $('.btnShare').click(function () {
            elem = $(this);
            postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));

            return false;
        });
    </script>
    <script src="<?= SITE_SSL_PATH ?>js/script.js"></script>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/shortcodes.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/tooltipster-shadow.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/main-style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/responsive.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/fonts.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/hover-effect.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/left-menu.css' type='text/css' media='all'/>

    <link href="<?= SITE_SSL_PATH ?>css/custom.css" rel="stylesheet">
    <link href="<?= SITE_SSL_PATH ?>css/owl.carousel.css" rel="stylesheet">
    <link href="<?= SITE_SSL_PATH ?>css/owl.theme.css" rel="stylesheet">
    <script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery-1.11.2.min.js'></script>
    <script src="<?= SITE_SSL_PATH ?>js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {

            //Sort random function
            function random(owlSelector) {
                owlSelector.children().sort(function () {
                    return Math.round(Math.random()) - 0.5;
                }).each(function () {
                    $(this).appendTo(owlSelector);
                });
            }

            $(".owl-demo").owlCarousel({
                items: 4,
                navigation: true,
                navigationText: [
                    "<i class='fa fa-angle-left'></i>",
                    "<i class='fa fa-angle-right'></i>"
                ],
                //Autoplay
                autoPlay: true,
                stopOnHover: false,
                pagination: false,
                slideSpeed: 200,
                paginationSpeed: 800,
                rewindSpeed: 1000,
                //Call beforeInit callback, elem parameter point to $("#owl-demo")
                beforeInit: function (elem) {
                    random(elem);
                }

            });

        });
    </script>

    <script type="text/javascript">

        function viewCount(articleid) {
            var currentLocation = window.location;
            var xhr;
            if (window.XMLHttpRequest) xhr = new XMLHttpRequest(); // all browsers
            else xhr = new ActiveXObject("Microsoft.XMLHTTP");     // for IE

            var url = '<?=SITE_SSL_PATH?>article_view_count.php?aid=' + articleid + '&page_url=' + currentLocation;
            xhr.open('GET', url, false);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
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

    <style>
        h3 {
            text-transform: capitalize;
        }
    </style>
    <meta name="generator" content="WordPress 4.0"/>
</head>
<body class="home page">

<!--   fb tools code !-->

<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<!--   fb tools code end !-->

<!-- **Wrapper** -->
<div class="wrapper">
    <div id="header-wrapper">
        <header id="header">
            <?php include("topbar.php"); ?>

            <!-- **Header Container** -->
            <div class="container">

                <!-- **Navigation** -->
                <?php include("header.php"); ?>
        </header>
    </div>
    <section class='breadcrumb-section dark-bg'>
        <!--<div class='breadcrumb-wrapper'>
            <h1 class='page-title'><marquee width="100%">PDFpoint.com, Academic database...!!! Your Solution is Here...</marquee></h1>
        </div>!-->
    </section>
    <div id="main" style="padding:0;">
        <div id="main-container" class="container">
            <div class="content-full-width">
                <div class="search-wrapper">
                    <form action="<?= SITE_SSL_PATH ?>search_data" method="post">
                        <div class="column dt-sc-three-fourth first">

                            <input class="search-input" type="text" id="name" required
                                   placeholder="Find topic wise Study Material, Ebooks, Subject Notes, Projects,Question paper,Lecture Videos and College event Videos, Research Paper."
                                   name="name">
                        </div>
                        <div class="column dt-sc-one-fourth" style="margin:0;">
                            <button class="btn-search" type="submit">Search</button>
                        </div>
                        <div class="clear"></div>
                    </form>

                </div>
            </div>
            <h1><?= $categoryTitle ?></h1>
            <div class="content"><p><?= $categoryDescription ?></p></div>
            <?
            $sql_2 = $cat->getCatBranches($id);
            $sql_1 = mysqli_query($conn, $sql_2);
            ?>
            <section id="secondary" class="left-sidebar">
                <div class="cntnt-box navigation_left_menu">
                    <aside id="my_property_widget-4" class="widget_popular_entries">

                        <div id='cssmenu'>
                            <ul>
                                <li class="active"><a href='#'><span><?= $branch ?> BRANCHES</span></a></li>
                                <?
                                if (mysqli_num_rows($sql_1) > 0) {
                                    while ($result_1 = mysqli_fetch_assoc($sql_1)) {

                                        $sql_super = $cat->getCatBranchesDetails($id, $result_1['subcategory_id']);
                                        $sql_super = mysqli_query($conn, $sql_super);

                                        ?>
                                        <li<? if (mysqli_num_rows($sql_super) > 0) {
                                            ?> class='has-sub'<?
                                        } ?>><a href='<?= SITE_SSL_PATH ?>#'><span
                                                        class="fa fa-check-square"><?= $result_1['subcategory_name'] ?></span></a>
                                            <ul>
                                                <?

                                                while ($result = mysqli_fetch_assoc($sql_super)) {
                                                    ?>
                                                    <li>
                                                        <a href="<?= SITE_SSL_PATH ?>category_detail/<?= $result['category_id'] ?>/<?= $result['supercategory_url'] ?>"><span><?= $result['supercategory_name'] ?></span></a>
                                                    </li>
                                                    <?
                                                } ?>
                                            </ul>
                                        </li>
                                        <?
                                    }
                                } else {
                                    ?>
                                    <li class='last'><a href='#'><span>Coming Soon</a></li>
                                <? } ?>
                            </ul>
                        </div>

                    </aside>
                </div>
            </section>

            <!-- **Primary Section** -->
            <section id="primary" class="with-left-sidebar">

                <div id="post-2123" class="post-2123 page type-page status-publish hentry"></div>
                <div class="clear"></div>
                <?
                $sql_top = $cat->getCatTopStory($cat_id);
                $sql_top = mysqli_query($conn, $sql_top);
                $result = mysqli_fetch_assoc($sql_top);

               $superCategorySql = $cat->getSuperCatDetail();
                ?>
                <div class="cntnt-box">
                    <div class=" column dt-sc-one-half with-sidebar blog-fullwidth first">
                        <article
                                class="blog-entry post-486 post type-post status-publish format-image has-post-thumbnail sticky hentry category-post-format-audio category-retail tag-creative tag-design tag-news-2 post_format-post-format-image">
                            <div class="entry-thumb-meta">
                                <div class="entry-thumb">
                                    <a href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result['supercategory_id'] ?>"
                                       title="<?= $result['supercategory_title'] ?>"
                                       onclick='viewCount("<?= $result['supercategory_id'] ?>")'> <img
                                                src='<?= SITE_SSL_PATH ?>admin/supercategory_long_image/<?= $result['supercategory_long_image'] ?>'/>
                                    </a>
                                </div>
                            </div>
                            <div class="entry-details-coverage">
                                <div class="entry-title">
                                    <h5>
                                        <? if ($result['supercategory_flip_status'] != 'Yes') { ?>
                                            <a href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result['supercategory_id'] ?>"
                                               onclick='viewCount("<?= $result['supercategory_id'] ?>")'><?= $result['supercategory_title'] ?></a>
                                        <? } else { ?>
                                            <a href="<?= SITE_SSL_PATH ?>flip/<?= $recId ?>/<?= $result['supercategory_id'] ?>"
                                               onclick='viewCount("<?= $result['supercategory_id'] ?>")'><?= $result['supercategory_title'] ?></a>
                                        <? } ?>
                                    </h5>
                                    <? if ($result['supercategory_short_description'] != '' & strtolower($result['supercategory_short_description']) != 'n/a') { ?>
                                        <p><?= substr($result['supercategory_short_description'], 0, 150) ?>...</p>
                                    <? } ?>
                                </div>
                                <div class="entry-metadata ">
                                    <div class="categories"><span
                                                class="fa fa-user"> </span><span><?= $result['supercategory_slug'] ?></span>
                                    </div>
                                    <div class="tags"><span
                                                class="fa fa-eye"> </span><span><?= $cat->view_article_count($result['supercategory_id'], $conn) ?></span>
                                        <span class="fb-share-button"
                                              data-href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result['supercategory_id'] ?>"
                                              data-layout="box_count" data-size="small" data-mobile-iframe="true"><a
                                                    class="fb-xfbml-parse-ignore" target="_blank"
                                                    href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></span>
                                    </div>


                                </div>
                        </article>
                    </div>
                    <div class="column dt-sc-one-half">
                        <div class="widget widget_popular_entries">
                            <div class="recent-property-widget">
                                <ul>
                                    <?
                                    $sql_ebook_channel_recent = $cat->getCatRecentStory($recId);
                                    $sql_ebook_channel_recent = mysqli_query($conn, $sql_ebook_channel_recent);
                                    while ($result_ebook_channel_recent = mysqli_fetch_assoc($sql_ebook_channel_recent)) {
                                        ?>
                                        <li><a class="thumb"
                                               href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_ebook_channel_recent['supercategory_id'] ?>"
                                               onclick='viewCount("<?= $result_ebook_channel_recent['supercategory_id'] ?>")'>
                                                <img class="book"
                                                     alt="<?= $result_ebook_channel_recent['supercategory_title'] ?>"
                                                     src="<?= SITE_SSL_PATH ?>admin/supercategory_long_image/<?= $result_ebook_channel_recent['supercategory_long_image'] ?>"
                                                     width='338' height='229'> </a>
                                            <div class="entry-detail">
                                                <h6>
                                                    <a href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_ebook_channel_recent['supercategory_id'] ?>"
                                                       onclick='viewCount("<?= $result_ebook_channel_recent['supercategory_id'] ?>")'><?= $result_ebook_channel_recent['supercategory_title'] ?></a>
                                                </h6>
                                                <div class="categories"><span
                                                            class="fa fa-user"> </span><span><?= substr($result_ebook_channel_recent['supercategory_slug'], 0, 30) ?></span>
                                                </div>
                                                <div class="tags"><span
                                                            class="fa fa-eye"> </span><span><?= $cat->view_article_count($result_ebook_channel_recent['supercategory_id'], $conn) ?></span>
                                                </div>
                                            </div>
                                        </li>
                                    <? } ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <section id="primary" class="content-full-width">
                    <div class="post-2261 page type-page status-publish hentry">

                        <?

                        $sql_video_channel =  $cat->getCatChannelData($id,'1');

                        $sql_video_channel = mysqli_query($conn, $sql_video_channel);

                        if (mysqli_num_rows($sql_video_channel) > 0) {
                            ?>
                            <div class="dt-sc-margin20"></div>
                            <div class='dt-sc-border-title'>
                                <H3><span><font color="green">Videos</font></span></H3>

                            </div>
                            <p class="ex1"><?= $videoDescription ?></p></br>
                            <div class="cntnt-box">
                                <div id="" class="owl-carousel owl-demo">

                                    <? while ($result_ebook_channel = mysqli_fetch_assoc($sql_video_channel)) { ?>
                                        <div class="item">
                                            <div class="property-item">
                                                <div class="property-thumb ">
                                                    <ul class="porperty-slider">
                                                        <li>
                                                            <div class="video-thumb">
                                                                <a href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_ebook_channel['supercategory_id'] ?>">
                                                                    <span class="play">&#9658;</span>
                                                                    <div class="overlay"></div>
                                                                </a>
                                                                <img src='<?= SITE_SSL_PATH ?>/admin/supercategory_long_image/<?= $result_ebook_channel['supercategory_long_image'] ?>'
                                                                     width='338' height='130'
                                                                     title='<?= $result_ebook_channel['supercategory_title'] ?>'
                                                                     alt='<?= $result_ebook_channel['supercategory_title'] ?>'/>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="video-details">
                                                    <a href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_ebook_channel['supercategory_id'] ?>"
                                                       onclick='viewCount("<?= $result_ebook_channel['supercategory_id'] ?>")'><?= $result_ebook_channel['supercategory_title'] ?></a>
                                                    <div class="entry-metadata" style="margin:2px 0 0 0;">
                                                        <div class="tags"><span
                                                                    class="fa fa-user"> </span><span><?= $result_ebook_channel['supercategory_slug'] ?></span>
                                                        </div>
                                                        <div class="tags"><span
                                                                    class="fa fa-eye"> </span><span><?= $cat->view_article_count($result_ebook_channel['supercategory_id'], $conn) ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                        <? }

                        $sql_ebook_channel = $cat->getCatChannelData($id,'2');
                        $sql_ebook_channel = mysqli_query($conn, $sql_ebook_channel);
                        if (mysqli_num_rows($sql_ebook_channel) > 0) {


                            ?>
                            <div class='dt-sc-border-title'>

                                <H3><span><font color="green">E-Books</font></span></H3>
                            </div>
                            <p class="ex1"><?= $ebookDescription ?></p></br>
                            <div class="cntnt-box">
                                <div id="" class="owl-carousel owl-demo">
                                    <? while ($result_ebook_channel = mysqli_fetch_assoc($sql_ebook_channel)) { ?>
                                        <div class="item">
                                            <div class="thumb-design">
                                                <div class="property-thumb ">
                                                    <ul class="porperty-slider">
                                                        <li>
                                                            <a href='<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_ebook_channel['supercategory_id'] ?>'
                                                               onclick='viewCount("<?= $result_ebook_channel['supercategory_id'] ?>")'
                                                               class='link'><img
                                                                        src='<?= SITE_SSL_PATH ?>admin/supercategory_long_image/<?= $result_ebook_channel['supercategory_long_image'] ?>'
                                                                        width='338' height='130'
                                                                        title='<?= $result_ebook_channel['supercategory_title'] ?>'
                                                                        alt='<?= $result_ebook_channel['supercategory_title'] ?>'/></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="video-details">
                                                    <a href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_ebook_channel['supercategory_id'] ?>"
                                                       onclick='viewCount("<?= $result_ebook_channel['supercategory_id'] ?>")'><?= $result_ebook_channel['supercategory_title'] ?></a>
                                                    <div class="entry-metadata" style="margin:2px 0 0 0;">
                                                        <div class="tags"><span
                                                                    class="fa fa-user"> </span><span><?= $result_ebook_channel['supercategory_slug'] ?></span>
                                                        </div>
                                                        <div class="tags"><span
                                                                    class="fa fa-eye"> </span><span><?= $cat->view_article_count($result_ebook_channel['supercategory_id'], $conn) ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                        <? }

                        $sql_notes_channel = $cat->getCatChannelData($id,'3');
                        $sql_notes_channel = mysqli_query($conn, $sql_notes_channel);

                        if (mysqli_num_rows($sql_notes_channel) > 0) {
                            ?>

                            <div class='dt-sc-border-title'>
                                <H3><span><font color="green">Subject Notes</font></span></H3>
                            </div>
                            <p class="ex1"><?= $subjectNotesDescription ?></p><br>
                            <div class="cntnt-box">
                                <div id="" class="owl-carousel owl-demo">
                                    <? while ($result_notes_channel = mysqli_fetch_assoc($sql_notes_channel)) { ?>
                                        <div class="item">
                                            <div class="thumb-design">
                                                <div class="property-thumb ">
                                                    <ul class="porperty-slider">
                                                        <li>
                                                            <a href='<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_notes_channel['supercategory_id'] ?>'
                                                               onclick='viewCount("<?= $result_notes_channel['supercategory_id'] ?>")'
                                                               class='link'><img
                                                                        src='<?= SITE_SSL_PATH ?>admin/supercategory_long_image/<?= $result_notes_channel['supercategory_long_image'] ?>'
                                                                        width='338' height='130'
                                                                        title='<?= $result_notes_channel['supercategory_title'] ?>'
                                                                        alt='<?= $result_notes_channel['supercategory_title'] ?>'/></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="video-details">
                                                    <a href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_notes_channel['supercategory_id'] ?>"
                                                       onclick='viewCount("<?= $result_notes_channel['supercategory_id'] ?>")'><?= $result_notes_channel['supercategory_title'] ?></a>
                                                    <div class="entry-metadata" style="margin:2px 0 0 0;">
                                                        <div class="tags"><span
                                                                    class="fa fa-user"> </span><span><?= $result_notes_channel['supercategory_slug'] ?></span>
                                                        </div>
                                                        <div class="tags"><span
                                                                    class="fa fa-eye"> </span><span><?= $cat->view_article_count($result_notes_channel['supercategory_id'], $conn) ?></span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>

                            </div>
                        <? }

                        $sql_exam_papers_channel = $cat->getCatChannelData($id,'5');

                        $sql_exam_papers_channel = mysqli_query($conn, $sql_exam_papers_channel);
                        if (mysqli_num_rows($sql_exam_papers_channel) > 0) {


                            ?>

                            <div class='dt-sc-border-title '>
                                <H3><span><font color="green">Exam Papers</font></span></H3>
                            </div>

                            <div class="cntnt-box">
                                <div id="" class="owl-carousel owl-demo">
                                    <? while ($result_exam_papers_channel = mysqli_fetch_assoc($sql_exam_papers_channel)) { ?>
                                        <div class="item">
                                            <div class="thumb-design">
                                                <div class="property-thumb ">
                                                    <ul class="porperty-slider">
                                                        <li>
                                                            <a href='<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_exam_papers_channel['supercategory_id'] ?>'
                                                               onclick='viewCount("<?= $result_exam_papers_channel['supercategory_id'] ?>")'
                                                               class='link'><img
                                                                        src='<?= SITE_SSL_PATH ?>admin/supercategory_long_image/<?= $result_exam_papers_channel['supercategory_long_image'] ?>'
                                                                        width='338' height='130'
                                                                        title='<?= $result_exam_papers_channel['supercategory_title'] ?>'
                                                                        alt='<?= $result_exam_papers_channel['supercategory_title'] ?>'/></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="video-details">
                                                    <a href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_exam_papers_channel['supercategory_id'] ?>"
                                                       onclick='viewCount("<?= $result_exam_papers_channel['supercategory_id'] ?>")'><?= $result_exam_papers_channel['supercategory_title'] ?></a>
                                                    <div class="entry-metadata" style="margin:2px 0 0 0;">
                                                        <div class="tags"><span
                                                                    class="fa fa-user"> </span><span><?= $result_exam_papers_channel['supercategory_slug'] ?></span>
                                                        </div>
                                                        <div class="tags"><span
                                                                    class="fa fa-eye"> </span><span><?= $cat->view_article_count($result_exam_papers_channel['supercategory_id'], $conn) ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                            <?
                        }

                        $sql_novel_channel = $cat->getCatChannelData($id,'14');
                        $sql_novel_channel = mysqli_query($conn, $sql_novel_channel);
                        if (mysqli_num_rows($sql_novel_channel) > 0) {

                            ?>

                            <div class='dt-sc-border-title '>
                                <H3><span><font color="green">Novel</font></span></H3>
                            </div>

                            <div class="cntnt-box">
                                <div id="" class="owl-carousel owl-demo">
                                    <? while ($result_novel_channel = mysqli_fetch_assoc($sql_novel_channel)) { ?>
                                        <div class="item">
                                            <div class="thumb-design">
                                                <div class="property-thumb ">
                                                    <ul class="porperty-slider">
                                                        <li>
                                                            <a href='<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_novel_channel['supercategory_id'] ?>'
                                                               onclick='viewCount("<?= $result_novel_channel['supercategory_id'] ?>")'
                                                               class='link'><img
                                                                        src='<?= SITE_SSL_PATH ?>admin/supercategory_long_image/<?= $result_novel_channel['supercategory_long_image'] ?>'
                                                                        width='338' height='130'
                                                                        title='<?= $result_novel_channel['supercategory_title'] ?>'
                                                                        alt='<?= $result_novel_channel['supercategory_title'] ?>'/></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="video-details">
                                                    <a href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_novel_channel['supercategory_id'] ?>"
                                                       onclick='viewCount("<?= $result_novel_channel['supercategory_id'] ?>")'><?= $result_novel_channel['supercategory_title'] ?></a>
                                                    <div class="entry-metadata" style="margin:2px 0 0 0;">
                                                        <div class="tags"><span
                                                                    class="fa fa-user"> </span><span><?= $result_novel_channel['supercategory_slug'] ?></span>
                                                        </div>
                                                        <div class="tags"><span
                                                                    class="fa fa-eye"> </span><span><?= $cat->view_article_count($result_novel_channel['supercategory_id'], $conn) ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                            <?
                        }
                        $sql_poetry_channel = $cat->getCatChannelData($id,'10');
                        $sql_poetry_channel = mysqli_query($conn, $sql_poetry_channel);
                        if (mysqli_num_rows($sql_poetry_channel) > 0) {


                            ?>

                            <div class='dt-sc-border-title '>
                                <H3><span><font color="green">Poetry</font></span></H3>
                            </div>

                            <div class="cntnt-box">
                                <div id="" class="owl-carousel owl-demo">
                                    <? while ($result_poetry_channel = mysqli_fetch_assoc($sql_poetry_channel)) { ?>
                                        <div class="item">
                                            <div class="thumb-design">
                                                <div class="property-thumb ">
                                                    <ul class="porperty-slider">
                                                        <li>
                                                            <a href='<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_poetry_channel['supercategory_id'] ?>'
                                                               onclick='viewCount("<?= $result_poetry_channel['supercategory_id'] ?>")'
                                                               class='link'><img
                                                                        src='<?= SITE_SSL_PATH ?>admin/supercategory_long_image/<?= $result_poetry_channel['supercategory_long_image'] ?>'
                                                                        width='338' height='130'
                                                                        title='<?= $result_poetry_channel['supercategory_title'] ?>'
                                                                        alt='<?= $result_poetry_channel['supercategory_title'] ?>'/></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="video-details">
                                                    <a href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_poetry_channel['supercategory_id'] ?>"
                                                       onclick='viewCount("<?= $result_poetry_channel['supercategory_id'] ?>")'><?= $result_poetry_channel['supercategory_title'] ?></a>
                                                    <div class="entry-metadata" style="margin:2px 0 0 0;">
                                                        <div class="tags"><span
                                                                    class="fa fa-user"> </span><span><?= $result_poetry_channel['supercategory_slug'] ?></span>
                                                        </div>
                                                        <div class="tags"><span
                                                                    class="fa fa-eye"> </span><span><?= $cat->view_article_count($result_poetry_channel['supercategory_id'], $conn) ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                        <? }

                        $sql_poetry_channel = $cat->getCatChannelData($id,'6');
                        $sql_poetry_channel = mysqli_query($conn, $sql_poetry_channel);
                        if (mysqli_num_rows($sql_poetry_channel) > 0) {

                            ?>
                            <div class='dt-sc-border-title '>
                                <H3><span><font color="green">Projects</font></span></H3>
                            </div>

                            <div class="cntnt-box">
                                <div id="" class="owl-carousel owl-demo">
                                    <? while ($result_poetry_channel = mysqli_fetch_assoc($sql_poetry_channel)) { ?>
                                        <div class="item">
                                            <div class="thumb-design">
                                                <div class="property-thumb ">
                                                    <ul class="porperty-slider">
                                                        <li>
                                                            <a href='<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_poetry_channel['supercategory_id'] ?>'
                                                               onclick='viewCount("<?= $result_poetry_channel['supercategory_id'] ?>")'
                                                               class='link'><img
                                                                        src='<?= SITE_SSL_PATH ?>admin/supercategory_long_image/<?= $result_poetry_channel['supercategory_long_image'] ?>'
                                                                        width='338' height='130'
                                                                        title='<?= $result_poetry_channel['supercategory_title'] ?>'
                                                                        alt='<?= $result_poetry_channel['supercategory_title'] ?>'/></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="video-details">
                                                    <a href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_poetry_channel['supercategory_id'] ?>"
                                                       onclick='viewCount("<?= $result_poetry_channel['supercategory_id'] ?>")'><?= $result_poetry_channel['supercategory_title'] ?></a>
                                                    <div class="entry-metadata" style="margin:2px 0 0 0;">
                                                        <div class="tags"><span
                                                                    class="fa fa-user"> </span><span><?= $result_poetry_channel['supercategory_slug'] ?></span>
                                                        </div>
                                                        <div class="tags"><span
                                                                    class="fa fa-eye"> </span><span><?= $cat->view_article_count($result_poetry_channel['supercategory_id'], $conn) ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                            <?
                        }

                        $sql_poetry_channel = $cat->getCatChannelData($id,'4');
                        $sql_poetry_channel = mysqli_query($conn, $sql_poetry_channel);
                        if (mysqli_num_rows($sql_poetry_channel) > 0) {

                            ?>
                            <div class='dt-sc-border-title '>
                                <H3><span><font color="green">PowerPoint Presentations</font></span></H3>
                            </div>
                            <p class="ex1"><?= $pptDescription ?></p></br>
                            <div class="cntnt-box">
                                <div id="" class="owl-carousel owl-demo">
                                    <? while ($result_poetry_channel = mysqli_fetch_assoc($sql_poetry_channel)) { ?>
                                        <div class="item">
                                            <div class="thumb-design">
                                                <div class="property-thumb ">
                                                    <ul class="porperty-slider">
                                                        <li>
                                                            <a href='<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_poetry_channel['supercategory_id'] ?>'
                                                               onclick='viewCount("<?= $result_poetry_channel['supercategory_id'] ?>")'
                                                               class='link'><img
                                                                        src='<?= SITE_SSL_PATH ?>admin/supercategory_long_image/<?= $result_poetry_channel['supercategory_long_image'] ?>'
                                                                        width='338' height='130'
                                                                        title='<?= $result_poetry_channel['supercategory_title'] ?>'
                                                                        alt='<?= $result_poetry_channel['supercategory_title'] ?>'/></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="video-details">
                                                    <a href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_poetry_channel['supercategory_id'] ?>"
                                                       onclick='viewCount("<?= $result_poetry_channel['supercategory_id'] ?>")'><?= $result_poetry_channel['supercategory_title'] ?></a>
                                                    <div class="entry-metadata" style="margin:2px 0 0 0;">
                                                        <div class="tags"><span
                                                                    class="fa fa-user"> </span><span><?= $result_poetry_channel['supercategory_slug'] ?></span>
                                                        </div>
                                                        <div class="tags"><span
                                                                    class="fa fa-eye"> </span><span><?= $cat->view_article_count($result_poetry_channel['supercategory_id'], $conn) ?></span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                            <?
                        }


                        $sql_poetry_channel = $cat->getCatChannelData($id,'16');

                        $sql_poetry_channel = mysqli_query($conn, $sql_poetry_channel);
                        if (mysqli_num_rows($sql_poetry_channel) > 0) {

                            ?>

                            <div class='dt-sc-border-title '>
                                <H3><span><font color="green">Biographys</font></span></H3>
                            </div>

                            <div class="cntnt-box">
                                <div id="" class="owl-carousel owl-demo">
                                    <? while ($result_poetry_channel = mysqli_fetch_assoc($sql_poetry_channel)) { ?>
                                        <div class="item">
                                            <div class="thumb-design">
                                                <div class="property-thumb ">
                                                    <ul class="porperty-slider">
                                                        <li>
                                                            <a href='<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_poetry_channel['supercategory_id'] ?>'
                                                               onclick='viewCount("<?= $result_poetry_channel['supercategory_id'] ?>")'
                                                               class='link'><img
                                                                        src='<?= SITE_SSL_PATH ?>admin/supercategory_long_image/<?= $result_poetry_channel['supercategory_long_image'] ?>'
                                                                        width='338' height='130'
                                                                        title='<?= $result_poetry_channel['supercategory_title'] ?>'
                                                                        alt='<?= $result_poetry_channel['supercategory_title'] ?>'/></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="video-details">
                                                    <a href="<?= SITE_SSL_PATH ?>article/<?= $recId ?>/<?= $result_poetry_channel['supercategory_id'] ?>"
                                                       onclick='viewCount("<?= $result_poetry_channel['supercategory_id'] ?>")'><?= $result_poetry_channel['supercategory_title'] ?></a>
                                                    <div class="entry-metadata" style="margin:2px 0 0 0;">
                                                        <div class="tags"><span
                                                                    class="fa fa-user"> </span><span><?= $result_poetry_channel['supercategory_slug'] ?></span>
                                                        </div>
                                                        <div class="tags"><span
                                                                    class="fa fa-eye"> </span><span><?= $cat->view_article_count($result_poetry_channel['supercategory_id'], $conn) ?></span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </section>
            </section>

        </div>
    </div>


    <?php include("footer.php"); ?>
</div>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/shortcodes.js'></script>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery.form.min.js'></script>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/scripts.js'></script>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/easing.js'></script>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery.nicescroll.min.js'></script>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery.ui.totop.min.js'></script>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery.sticky.js'></script>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery.isotope.min.js'></script>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery.prettyPhoto.js'></script>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery.fitvids.js'></script>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery.cookie.js'></script>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery.smartresize.js'></script>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery.mobilemenu.js'></script>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/custom.js'></script>
<script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery.carouFredSel-6.2.1-packed.js'></script>

</body>
</html>
