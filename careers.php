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
    <title>Careers</title>
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
      $active_tab = "careers";
    ?>
            <?php include("includes/header.php") ?>
            <!-- Banner Section -->
            <div class="career-banner wow fadeIn" data-wow-duration="1s" data-wow-delay="0.80s">
                <div class="overlay">
                    <a href="get-a-quote.php">
                        <div class="quote wow slideInRight" data-wow-duration="1s" data-wow-delay="0.80s">Get A Quote</div>
                    </a>
                    <div class="page-title">
                        <h1>Careers</h1>
                    </div>
                    <div class="breadcumb-example">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Careers</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Banner Section -->
            <!-- Career Start-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="career-txt wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p>Airglow Aviation Services is committed to providing a work environment free from discrimination and harassment. It is our policy to comply with all applicable local laws prohibiting employment discrimination.</p>
                            <p>If you are interested in working for Airglow Aviation Services, feel free to send your application to <a href="mailto:cargo@airglowaviation.com" class="active-email">cargo@airglowaviation.com.</a>
                            </p>
                        </div>
                        <div class="carrer-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <h2 class="section-title">Application Form<hr></h2>
                            <div class="form-box">
                                <form id="career-form" class="common-form" enctype="multipart/form-data" action="career-submit.php" method="post">
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/2.png"></span>
                                        <input type="text" name="uname" placeholder="Your Name*" class="common-inputfd">
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/3.png"></span>
                                        <input type="text" name="uphone" placeholder="Mobile No*" class="common-inputfd">
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/21.png"></span>
                                        <input type="text" name="uemail" placeholder="Your E-mail*" class="common-inputfd">
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/4.png"></span>
                                        <input type="text" name="umessage" placeholder="Enter your message here" class="common-inputfd">
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/6.png"></span>
                                        <input type="text" name="position" placeholder="Enter Position" class="common-inputfd">
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/5.png"></span>
                                        <input type="file" name="upload" placeholder="Upload CV" class="common-inputfd uploadcv" accept=".doc,.docx,.jpg,.png,.pdf">
                                        <label class="error-upload">JPEG, PNG, Doc, PDF files are allowed</label>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button class="submit-btn" type="submit">Send<span class="sum-arrow">
                                         <img src="img/right-small.png"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Career End -->
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