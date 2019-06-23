<?php
include("include/config_pvt.inc.php");
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>PDFpoint.com: India's 1st Academic Database...!!! Your Solution is Here.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <meta name="google-site-verification" content="XAnZ9U1q_Al6KfUfcLR40Yc1pNOfR4zxtu_iBye3WJo"/>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="Keywords"
          content="engineering, management, literature, 10+2, textbook, ebooks, subject notes, exam paper, question paper, previous year question paper, research paper, projects, study material, students creations, pdf, report"/>
    <meta name="Description"
          content="PDFpoint is a Free PDF Library, which holds all Engineering/Management/10+2 Study Material like eBooks, Subject Notes, Exam Papers,Ppts, Academic Projects, Research Papers, NCERT Books and Literature Contents in well defined channels."/>
    <script type="text/javascript" src="<?= SITE_SSL_PATH ?>js/jquery.min.js"></script>
    <link href="<?= SITE_SSL_PATH ?>css/jquery-ui.css" rel="stylesheet">
    <script src="<?= SITE_SSL_PATH ?>js/jquery-1.10.2.js"></script>
    <script src="<?= SITE_SSL_PATH ?>js/jquery-ui.js"></script>
    <script type='text/javascript'>
        var mytheme_urls = {
            stickynav: 'enable'
            , scroll: 'enable'
        };
    </script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-2071155006088117",
            enable_page_level_ads: true
        });
    </script>

    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'c6c2a1656893b637ba79ab8197cd0f1943c56483';
        window.smartsupp || (function (d) {
            var s, c, o = smartsupp = function () {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
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

            return false;
        }
    </script>

    <script>
        $(function () {
            $("#name").autocomplete({
                source: '<?=SITE_SSL_PATH?>ajax_search.php'
            });
        });
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

    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/shortcodes.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/tooltipster-shadow.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/main-style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/responsive.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/fonts.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/hover-effect.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= SITE_SSL_PATH ?>css/settings.css' type='text/css' media='all'/>
    <script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery.js'></script>
    <script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='<?= SITE_SSL_PATH ?>js/jquery.themepunch.revolution.min.js'></script>
    <style>
        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 150px;

            position: absolute;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 13px;
            width: 13px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>


    <style type="text/css">
        nav#main-menu ul li a, .mobile-menu {
            font-family: Lato, sans-serif;
        }

        body {
            font-family: Lato, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 14px;
            background: #eeeeee;
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
                top: 8em
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

    </style>
    <meta name="generator" content="WordPress 4.0"/>
</head>
<body class="home page">

<!-- **Wrapper** -->
<div class="wrapper">
    <div id="header-wrapper">
        <header id="header">
            <?php include("topbar.php"); ?>
            <!-- **Header Container** -->
            <div class="container">

                <!-- **Navigation** -->
                <?php include("header.php"); ?>
                <!-- **Header Container End** -->

        </header>
    </div>
    <div class="clear"></div>
    <div class="container">
        <div class="content-full-width">
            <div class="search-wrapper">
                <form action="<?= SITE_SSL_PATH ?>search_data" method="POST">
                    <div class="column dt-sc-three-fourth first">
                        <input class="search-input" type="text" required id="name"
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
    </div>
    <section id="slider">
        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
             style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:750px;">
            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner"
                 style="display:none;max-height:750px;height:750px;">
                <ul>

                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="<?= SITE_SSL_PATH ?>images/banner_images/e-reader-1213214.jpg" alt="slider31"
                             data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                    </li>
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="<?= SITE_SSL_PATH ?>images/banner_images/team_1.jpg" alt="slider31"
                             data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                    </li>
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="<?= SITE_SSL_PATH ?>images/banner_images/team_4.png" alt="slider31"
                             data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                    </li>
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="<?= SITE_SSL_PATH ?>images/banner_images/team_3.png" alt="slider31"
                             data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                    </li>

                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="<?= SITE_SSL_PATH ?>images/banner_images/main-banner.jpg" alt="slider11"
                             data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="<?= SITE_SSL_PATH ?>images/banner_images/banner_2.png" alt="slider21"
                             data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
            <script type="text/javascript">
                var setREVStartSize = function () {
                    var tpopt = new Object();
                    tpopt.startwidth = 960;
                    tpopt.startheight = 750;
                    tpopt.container = jQuery('#rev_slider_1_1');
                    tpopt.fullScreen = "off";
                    tpopt.forceFullWidth = "off";

                    tpopt.container.closest(".rev_slider_wrapper").css({height: tpopt.container.height()});
                    tpopt.width = parseInt(tpopt.container.width(), 0);
                    tpopt.height = parseInt(tpopt.container.height(), 0);
                    tpopt.bw = tpopt.width / tpopt.startwidth;
                    tpopt.bh = tpopt.height / tpopt.startheight;
                    if (tpopt.bh > tpopt.bw) tpopt.bh = tpopt.bw;
                    if (tpopt.bh < tpopt.bw) tpopt.bw = tpopt.bh;
                    if (tpopt.bw < tpopt.bh) tpopt.bh = tpopt.bw;
                    if (tpopt.bh > 1) {
                        tpopt.bw = 1;
                        tpopt.bh = 1
                    }
                    if (tpopt.bw > 1) {
                        tpopt.bw = 1;
                        tpopt.bh = 1
                    }
                    tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
                    if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on") tpopt.height = tpopt.startheight;
                    if (tpopt.fullScreen == "on") {
                        tpopt.height = tpopt.bw * tpopt.startheight;
                        var cow = tpopt.container.parent().width();
                        var coh = jQuery(window).height();
                        if (tpopt.fullScreenOffsetContainer != undefined) {
                            try {
                                var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
                                jQuery.each(offcontainers, function (e, t) {
                                    coh = coh - jQuery(t).outerHeight(true);
                                    if (coh < tpopt.minFullScreenHeight) coh = tpopt.minFullScreenHeight
                                })
                            } catch (e) {
                            }
                        }
                        tpopt.container.parent().height(coh);
                        tpopt.container.height(coh);
                        tpopt.container.closest(".rev_slider_wrapper").height(coh);
                        tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
                        tpopt.container.css({height: "100%"});
                        tpopt.height = coh;
                    } else {
                        tpopt.container.height(tpopt.height);
                        tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
                        tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);
                    }
                };

                /* CALL PLACEHOLDER */
                setREVStartSize();


                var tpj = jQuery;
                tpj.noConflict();
                var revapi1;

                tpj(document).ready(function () {

                    if (tpj('#rev_slider_1_1').revolution == undefined)
                        revslider_showDoubleJqueryError('#rev_slider_1_1');
                    else
                        revapi1 = tpj('#rev_slider_1_1').show().revolution(
                            {
                                dottedOverlay: "none",
                                delay: 9000,
                                startwidth: 960,
                                startheight: 350,
                                hideThumbs: 200,

                                thumbWidth: 100,
                                thumbHeight: 50,
                                thumbAmount: 3,


                                simplifyAll: "off",

                                navigationType: "bullet",
                                navigationArrows: "solo",
                                navigationStyle: "round",

                                touchenabled: "on",
                                onHoverStop: "off",
                                nextSlideOnWindowFocus: "off",

                                swipe_threshold: 0.7,
                                swipe_min_touches: 1,
                                drag_block_vertical: false,


                                keyboardNavigation: "off",

                                navigationHAlign: "center",
                                navigationVAlign: "bottom",
                                navigationHOffset: 0,
                                navigationVOffset: 20,

                                soloArrowLeftHalign: "left",
                                soloArrowLeftValign: "center",
                                soloArrowLeftHOffset: 20,
                                soloArrowLeftVOffset: 0,

                                soloArrowRightHalign: "right",
                                soloArrowRightValign: "center",
                                soloArrowRightHOffset: 20,
                                soloArrowRightVOffset: 0,

                                shadow: 0,
                                fullWidth: "on",
                                fullScreen: "off",

                                spinner: "spinner0",

                                stopLoop: "off",
                                stopAfterLoops: -1,
                                stopAtSlide: -1,

                                shuffle: "off",

                                autoHeight: "off",
                                forceFullWidth: "off",


                                hideThumbsOnMobile: "off",
                                hideNavDelayOnMobile: 1500,
                                hideBulletsOnMobile: "off",
                                hideArrowsOnMobile: "off",
                                hideThumbsUnderResolution: 0,

                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLilmit: 0,
                                startWithSlide: 0
                            });


                });
                /*ready*/

            </script>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </section>
    <div id="main">
        <div id="main-container" class="container">
            <section id="primary" class="page-with-sidebar with-right-sidebar">

                <div id="post-2345" class="post-2263 page type-page status-publish hentry">
                    <div class='column dt-sc-one-column'>
                        <div class="cntnt-box">
                            <p style="margin-top:0;">We are the valued education partners for an education program in
                                the field of Engineering, Management and Literature.
                                Stating that, we at PDF Point also believe in the quality education system that is why
                                our online programme is the filled with the most relevant content related to the higher
                                classes as well as the academics till standard XII. One can read, download and even
                                upload their respective notes for the others following the board.</p>
                            <p style="margin-top:0;">This site is basically a platform for all those who are readers and
                                one who are preachers, that means there is something for everyone on PDFpoint.com.
                                PDFpoint basically acts as the best platform bringing along students, teachers as well
                                as the researchers for the best online knowledge exchange program, where they can share
                                thoughts, search for their queries, download notes as well as for the educationist they
                                can answer the curious students by uploading the relevant matter on the queries
                                raised.</p>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class='column dt-sc-one-column'>
                        <div class="dt-sc-border-title ">
                            <h2 style="text-transform:none;"><span><font color="green">Why should you visit PDFpoint.com?</font></span>
                            </h2>
                        </div>
                        <div class="cntnt-box">
                            <div class="featured-item">
                                <ol class="rounded-list">
                                    <li><a href="">To act as a bridge helping to fill the gap between the teaching
                                            faculty and students by the knowledge exchange program.</a></li>
                                    <li><a href="">Bring a variety of resources at a place for referencing purpose, so
                                            that it can be the next Google for anyone related to the education
                                            field.</a></li>
                                    <li><a href="">Giving the literature community a platform to showcase their work and
                                            bring them avid followers.</a></li>
                                    <li><a href="">To make learning a task that can be enjoyed by the Students.</a></li>
                                    <li><a href="">To encourage the students to participate actively in the learning
                                            tasks so that they can value the spirit of Group Discussions and can learn
                                            digitally and practically.</a></li>
                                </ol>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class='column dt-sc-one-column'>
                        <div class="dt-sc-border-title ">
                            <h2 style="text-transform:none;"><span><font color="green">What makes us different from others?</font></span>
                            </h2>
                        </div>
                        <div class="cntnt-box">
                            <p style="margin-top:0;">You must be thinking in this competitive environment, why should
                                you follow us in comparison to the old site of yours, here is the reason because of
                                which the database of PDFpoint is increasing on daily basis;</p>
                            <div class="featured-item">
                                <ol class="rounded-list">
                                    <li><a href="">Content from Around the Globe:</a></li>
                                    <p style="margin-top:0;">PDFpoint.com is the only platform around the world which
                                        does not believe in restrictions. We are open to anyone and everyone who has
                                        some knowledge related to a particular subject and wants to share it. It does
                                        not matter to us whether the content comes from a student or a scholar
                                        educationist.</p>
                                    <li><a href="">Best Educationist on panel:</a></li>
                                    <p style="margin-top:0;">We have got some best educationist on panel, which enjoys
                                        helping you with the queries raised, hence giving you the most relevant reply
                                        along with the additional sources which you can refer to.</p>
                                    <li><a href="">Showcasing the best happenings from all over the world:</a></li>
                                    <p style="margin-top:0;">PDFpoint.com believes in showcasing even the minutest
                                        happening on the site which is related to the field of engineering, literature
                                        or the academics, so that the visitors can remain updated and enjoy expanding
                                        knowledge.</p>
                                </ol>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class='column dt-sc-one-column'>
                        <div class="dt-sc-border-title ">
                            <h2><span><font color="green">The vision behind the concept</font></span></h2>
                        </div>
                        <div class="cntnt-box">
                            <p style="margin-top:0;">Our vision is basically to bring the entire academics on one
                                platform, so that you need not refer multiple sites or articles at different sites. We
                                enlist the most relevant and do not leave any stone unturned in order to publish the
                                entire information related to the topic. At PDFpoint.com generally we refer to the
                                encouragement required to build the best education portal as we aim for the
                                following;</p>
                            <div class="featured-item">
                                <ol class="rounded-list">
                                    <li><a href="">Creating an online Wikipedia kind of site where each and every
                                            concept related to the subject is listed in the form of e-books, notes,
                                            ppts, previous year solved papers or assignments for references.</a></li>
                                    <li><a href="">Holding contests and rewarding the creative writings from all type of
                                            literature.</a></li>
                                </ol>
                            </div>
                            <p style="margin-top:0;">In short we believe only in one thing that is to gather information
                                and bring it to our people under one head.</p>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="secondary" class="">
                <aside class="widget widget_popular_entries" style="padding-bottom:25px;">
                    <h3 class="add-heading">VIDEO</h3>
                    <div class="add-box">
                        <div class="featured-listing"><a id="dt-gallery-item" href="#inline-audiovideo-audio-video">
                                <div class="dt-video-wrap">
                                    <iframe src="https://www.youtube.com/embed/qThQjzBM430" frameborder="0"
                                            allowfullscreen></iframe>
                                </div>
                            </a></div>
                    </div>
                </aside>
                <?
                $sliderSql = "select * from pdfpoint_supersubcategory Inner join pdfpoint_category on pdfpoint_category.category_id = pdfpoint_supersubcategory.category_id  where supercategory_privileges = 'Show' order by 1 desc limit 1, 10";
                $sliderQuery = mysqli_query($conn, $sliderSql);
                ?>
                <aside class="widget widget_popular_entries">
                    <h3 class="add-heading">PDFpoint Highlight</h3>
                    <div class="add-box">
                        <br>
                        <div class="featured-listing">
                            <div class="microsoft container">
                                <div class="slideshow-container">
                                    <?
                                    $count = mysqli_num_rows($sliderQuery);
                                    $i = 1;
                                    while ($result = mysqli_fetch_assoc($sliderQuery)) {
                                        ?>
                                        <div class="mySlides fade">
                                            <div class="numbertext"><?= $i ?>/<?= $count ?></div>

                                            <a href="<?= SITE_SSL_PATH ?>article/<?= $result['category_id'] ?>/<?= $result['supercategory_id'] ?>"
                                               onclick='viewCount("<?= $result['supercategory_id'] ?>")'><img
                                                        src='<?= SITE_SSL_PATH ?>admin/supercategory_long_image/<?= $result['supercategory_long_image'] ?>'
                                                        style='width:100%' title='<?= $result['supercategory_title'] ?>'
                                                        alt='<?= $result['supercategory_title'] ?>'/></a>
                                            <!--<div class="text"><strong><a href="#"><?= $result['supercategory_title'] ?></a></strong></div>!-->
                                        </div>

                                        <? $i++;
                                    } ?>

                                </div>
                                <div style="text-align:center">
                                    <?
                                    $sliderSql1 = "select * from pdfpoint_supersubcategory  where supercategory_privileges = 'Show' order by 1 desc limit 1, 10";
                                    $sliderQuery1 = mysqli_query($conn, $sliderSql1);
                                    while ($result = mysqli_fetch_assoc($sliderQuery1)) {
                                        ?>
                                        <span class="dot"></span>
                                    <? } ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </aside>
                <script>
                    var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {
                            slideIndex = 1
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        setTimeout(showSlides, 5000); // Change image every 2 seconds
                    }
                </script>
                <aside class="widget widget_popular_entries">
                    <h3 class="add-heading">PDFpoint Update</h3>
                    <div class="add-box">
                        <div class="featured-listing">
                            <div class="microsoft container">
                                <div class="marquee">
                                    <ul>
                                        <li>All Engineering eBooks, topic wise subject notes and projects.</li>
                                        <li>All management eBooks, topic wise videos lecture, seminars and many
                                            more...
                                        </li>
                                        <li>NCERT textbooks and their solutions, reference book science projects and
                                            many more...
                                        </li>
                                        <li>In literature good collection of poetry, quotes story jokes and blogs on the
                                            social issues...
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class='dt-sc-social-icons'>
                        <li><a href='https://www.facebook.com/pdfpoint/' target='_blank'><img
                                        src='images/facebook_hover.png'/></a></li>
                        <li><a href='https://plus.google.com/u/0/' target='_blank'><img src='images/google_hover.png'/></a>
                        </li>
                        <li><a href='https://twitter.com/' target='_blank'><img src='images/twitter_hover.png'/></a>
                        </li>
                        <li><a href='https://www.youtube.com/channel/UCs2W9o2p2gYnPZdcyBdvPGA?guided_help_flow=3'
                               target='_blank'><img src='images/youtube_hover.png'/></a></li>
                        <li>
                            <a href='https://www.linkedin.com/company/pdfpoint.com?report.success=KJ_KkFGTDCfMt-A7wV3Fn9Yvgwr02Kd6AZHGx4bQCDiP6-2rfP2oxyVoEQiPrcAQ7Bf'
                               target='_blank'><img src='images/linkedin_hover.png'/></a></li>
                        <li><a href='#'><img src='images/instagram_hover.png'/></a></li>
                    </ul>
                </aside>
            </section>
            <?php
            $sql_1 = "select * from pdfpoint_category where category_privileges='Show'";
            $sql = mysqli_query($conn, $sql_1);

            ?>
            <div class='fullwidth-section '>
                <div id="cat-container" class="container">
                    <?
                    $i = 1;
                    $column = 7;
                    while ($result = mysqli_fetch_assoc($sql)) {
                        if ($i % $column == 0) {
                            ?>
                        <? } ?>
                        <div class='column dt-sc-one-third'>
                            <div class="view view-ninth"><img
                                        src="<?= SITE_SSL_PATH ?>admin/category_short_image/<?= $result['category_short_image'] ?>"/>
                                <div class="bottom-txt"><a
                                            href="<?= SITE_SSL_PATH ?>category/<?= $result['category_id'] ?>">
                                        <?= $result['category_name'] ?>
                                    </a></div>
                                <div class="mask mask-1"></div>
                                <div class="mask mask-2"></div>
                                <div class="content">
                                    <?php if ($result['category_id'] == 7) { ?>
                                        <h2><a href="#">
                                                <?= $result['category_name'] ?>
                                            </a></h2>
                                    <?php } else { ?>
                                        <h2><a href="<?= SITE_SSL_PATH ?>category/<?= $result['category_id'] ?>">
                                                <?= $result['category_name'] ?>
                                            </a></h2>
                                    <?php } ?>
                                    <p>
                                        <?= $result['category_short_description'] ?>
                                    </p>
                                    <a href="<?= SITE_SSL_PATH ?>category/<?= $result['category_id'] ?>" class="info">Read
                                        More</a></div>
                            </div>
                        </div>
                        <? $i++;
                        if ($i % $column == 0) {
                            ?>
                        <?
                        }
                    } ?>
                    <div class="clear"></div>
                </div>
            </div>
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
</body>
</html>