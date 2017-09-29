<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<!-- Header Start -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Aircraft Guide</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- Header End -->
<!-- Main Body Start -->

<body>
    <?php
      $active_tab = "guide";
    ?>
        <?php include("includes/header.php") ?>
        <!-- Banner Section -->
        <div class="aircraft-banner wow fadeIn" data-wow-duration="1s" data-wow-delay="0.80s">
            <div class="overlay">
                <a href="get-a-quote.php">
                    <div class="quote wow slideInRight" data-wow-duration="1s" data-wow-delay="0.80s">Get A Quote</div>
                </a>
                <div class="page-title">
                    <h1>Aircraft Guide</h1>
                </div>
                <div class="breadcumb-example">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Aircraft Guide</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Banner Section -->
        <!-- Search Start-->
        <div class="guide_mainbox">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="guide_content_box">
                            <input type="text" id="Searchbar" onkeyup="aircraftfilter()" placeholder="Search" title="Type in a name" onkeydown="aircraftfilter()">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search End -->
            <!-- Detail Boxes -->
            <div class="guide_detail_box" id="guide_detail">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Antonov 225</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>250</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>1100</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>4300 x 640 x 440</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>640 X 400</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4  wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Boeing 747-800</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>140</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>850</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>5400 x 485 x 300</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>340 x 312</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4  wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Antonov 124</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>120</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>800</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>3650 x 640 x 440</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>640 x 440</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 1 line End-->
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Boeing 747-300/400</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>110</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>675</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>5000 x 488 x 300</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>340 x 312</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Boeing 747-200</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>100</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>675</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>4900 x 488 x 300</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>340 x 312</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Boeing 777</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>100</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>625</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>4400 x 488 x 300</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>372 x 305</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 2 line  End-->
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Ilyushin 96</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>90</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>580</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>4440 x 570 x 287</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>485 x 287</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>McDonnell Douglas MD11</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>85</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>500</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>4800 x 350 x 245</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>355 x 255</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Airbus 330</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>65</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>475</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>580 x 525 x 245</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>358 x 256</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 3 line  End-->
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Douglas DC10</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>65</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>400</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>3725 x 448 x 245</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>350 x 255</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Lockheed Tristar</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>55</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>420</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>3300 x 360 x 274</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>431 x 284</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Boeing 767</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>55</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>400</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>3000 x 400 x 250</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>340 x 254</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 4 line  End-->
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Airbus 300-600</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>47</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>410</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>4000 x 525 x 245</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>358 x 256</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Ilyushin 76</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>45</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>180</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>1850 x 345 x 325</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>344 x 340</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Airbus 300-200</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>43</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>295</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>3550 x 477 x 245</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>358 x 256</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 5 line  End-->
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Airbus 310</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>40.5</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>270</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>390 x 477 x 223</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>358 x 257</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Ilyushin 62</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>40</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>240</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>280 x 375 x 200</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>345 x 200</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Douglas DC8-62</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>40</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>200</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>3400 x 317 x 203</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>355 x 215</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 6 line  End-->
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Boeing 757</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>39</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>187</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>3327 x 353 x 218</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>340 x 218</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Tupolev 204</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>28.5</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>165</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>290 x 274 x 200</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>340 x 208</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Boeing 727</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>23.5</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>144</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>2712 x 351 x 218</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>340 x 218</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 7 line  End-->
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Lockheed Hercules</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>21</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>140</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>1707 x 302 x 274</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>302 x 274</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Antonov 12</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>18</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>95</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>1380 x 300 x 250</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>300 x 250</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>DC9</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>17</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>120</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>210 x 274 x 205</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>345 x 205</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 8 line  End-->
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Boeing 737</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>16</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>115</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>2100 x 310 x 220</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>340 x 215</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Lockheed Electra</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>15</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>135</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>2000 x 280 x 220</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>355 x 203</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>BAe ATP</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>8.2</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>78</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>1500 x 195 x 180</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>250 x 169</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 9 line  End-->
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Antonov 26</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>6.5</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>45</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>1110 x 220 x 160</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>230 x 171</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Antonov 74</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>6.5</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>45</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>1000 x 215 x 220</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>226 x 220</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Fokker 27</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>6.3</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>58</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>1336 x 210 x 190</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>228 x 175</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 10 line  End-->
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>ATR 42</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>4.6</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>40</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>1080 x 225 x 143</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>125 x 153</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Saab 340</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>3.8</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>40</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>1300 x 170 x 170</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>135 x 130</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Shorts 360</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>3.5</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>40</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>815 x 190 x 190</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>142 x 168</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 11 line  End-->
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Falcon 20 / 200</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>2.5</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>11</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>704 x 156 x 142</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>190 x 140</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Metroliner 23</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>2.8</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>18</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>775 x 158 x 145</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>127 x 115</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Metroliner III</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>2.1</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>12</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>775 x 158 x 145</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>130 x 115</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 12 line  End-->
                         <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Metroliner II</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>1.4</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>12</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>835 x 115 x 120</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>130 x 115</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Beech 200 Kingair</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>1.2</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>5</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>280 x 124 x 138</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>132 x 138</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main">
                                <div class="title_box">
                                    <h3>Cessna 406 Titan</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>1.2</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>6.5</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>320 x 120 x 117</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>124 x 116</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 12 line  End-->
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="guide-main last-guide">
                                <div class="title_box">
                                    <h3>Piper 31</h3>
                                </div>
                                <div class="guide-inner">
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/23.png" class="ico_1 img-responsive"></span>
                                        <span class="guide-line">Max Payload Tonnes : <strong>0.6</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/24.png" class="ico_2 img-responsive"></span>
                                        <span class="guide-line">Max Loadable Volume CBM3 : <strong>4</strong>
                                        </span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/25.png" class="ico_3 img-responsive"></span>
                                        <span class="guide-line">Cargo Hold Dims LxWxH cm :<br/><strong>350 x 100 x 125</strong></span>
                                    </p>
                                    <p>
                                        <span class="guide-img"><img src="img/form-icons/26.png" class="ico_4 img-responsive"></span>
                                        <span class="guide-line">Cargo Door Size WxH cm :<br/><strong>65 x 110</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 13 line  End-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Detail Boxes -->
        <?php include("includes/footer.php") ?>
        <!-- All Scripts Start-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--  <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
        </script> -->
        <!-- All Scripts End-->
</body>
<!-- Main Body End -->

</html>