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
    <title>About Airglow</title>
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
<div class="stick-foot">

    <?php
      $active_tab = "about";
    ?>
        <?php include("includes/header.php") ?>
        <!-- Banner Section -->
        <div class="about-banner wow fadeIn" data-wow-duration="1s" data-wow-delay="0.80s">
            <div class="overlay">
                <a href="get-a-quote.php">
                    <div class="quote wow slideInRight" data-wow-duration="1s" data-wow-delay="0.80s">Get A Quote</div>
                </a>
                <div class="page-title">
                    <h1>About Airglow</h1>
                </div>
                <div class="breadcumb-example">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">About Airglow</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Banner Section -->
        <!-- About Section Start -->
        <div class="wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
            <div class="container-fluid">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs-right nav-tabs-right-responsive" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#story" id="story-tab" role="tab" data-toggle="tab" aria-controls="story" aria-expanded="true">
                                <span class="text">Our Story</span>
                            </a>
                        </li>
                        <li role="presentation" class="next">
                            <a href="#msg" role="tab" id="msg-tab" data-toggle="tab" aria-controls="msg">
                                <span class="text">Director’s Message</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#team" role="tab" id="team-tab" data-toggle="tab" aria-controls="team">
                                <span class="text">Our Team</span>
                            </a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="story" aria-labelledby="story-tab">
                            <div class="side-img">
                                <img src="img/our-story.jpg" class="img-responsive">
                            </div>
                            <div class="tab-content">
                                <p>Established in 2011 and based in UAE, Airglow brings a fresh approach to the Aviation Industry within the Middle East and African region.</p>
                                <p>We are an ACMI based operator offering aviation services in the form of Air Cargo Charters, GSSA, Passenger Charters, &amp; Aircraft Leasing to the following regions- Europe, Middle East, Africa, Asia, Asia Pacific and the South-west Pacific region.</p>
                                <p>Our objective is to provide professional, reliable and cost effective service to our customers. With an Industry Experience of more than 15 years, we at Airglow Aviation Services are Confident of delivering what we promise.</p>
                                <p>Our extensive network enables us to offer quick response and ensures that all enquiries are dealt with maximum efficiency. With a team of highly skilled professionals, we, at Airglow are committed to constantly improving and expanding our services to offer our clients the highest level of quality and value.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="msg" aria-labelledby="msg-tab">
                            <div class="tab-content">
                                <h2 class="direct">Mr. Rohit Thakwani</h2>
                                <div class="side-img">
                                <img src="img/Mr-Rohit.jpg" class="img-responsive">
                            </div>
                                <div class="side-img-right">
                                    <img src="img/director.png" class="img-responsive">
                                </div>
                                <div class="tab-content">
                                    <p>We shall always aim to develop and facilitate procedures and policies that shall help us grow and help our partners in the supply chain. We believe in the policy of transparency and work relationship- based on trust and mutual benefit.</p>
                                    <p>Airglow was established in the year 2011 and since then we have emerged to become a strong organization that our customers can entrust. </p>
                                    <p>I would like to thank all my employees for being the backbone of the organization and proving it time and again that we exist for a purpose- a purpose to surpass our customer’s expectations. </p>
                                    <p>This successful journey would not have been as exciting and fulfilling without the unconditional support of all our customers. I would like to express my deep gratitude and indebtedness to them and hope to improve each day to serve you better. </p>
                                    <p>We shall continue to deliver cargo and your vested trust in us! </p>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="team" aria-labelledby="team-tab">
                            <div class="side-img">
                                <img src="img/team.jpg" class="img-responsive">
                            </div>
                            <div class="tab-content">
                                <p>Airglow Aviation Services FZC is a team of young, dynamic and energetic individuals with a collective work experience of more than 20 years in the aviation industry.</p>
                                <p> What set us apart are our skill sets and the level of professionalism we bring in for our principals. Our team is what defines our success. With extensive knowledge of the local market and experience teamed with unparalleled dedication.</p>
                                <p>With a team of highly skilled professionals, we, at Airglow are committed to constantly improving and expanding our services to offer our clients the highest level of quality and value.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- About Section End -->
        <?php include("includes/footer.php") ?>
        <!-- All Scripts Start-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
        </script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <!--   <script>
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
