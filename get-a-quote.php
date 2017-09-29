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
    <title>Get A Quote</title>
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
      $active_tab = "get_quote";
    ?>
            <?php include("includes/header.php") ?>
            <!-- Banner Section -->
            <div class="get-banner wow fadeIn" data-wow-duration="1s" data-wow-delay="0.80s">
                <div class="overlay">
                    <a href="get-a-quote.php">
                        <div class="quote wow slideInRight" data-wow-duration="1s" data-wow-delay="0.80s">Get A Quote</div>
                    </a>
                    <div class="page-title">
                        <h1>Get A Quote</h1>
                    </div>
                    <div class="breadcumb-example">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Get A Quote</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Banner Section -->
            <!-- Career Start-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="career-txt wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <p>Tell us your requirements, and we will get back with a competitive rate.</p>
                        </div>
                        <div class="carrer-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="">
                                <form id="get_quote" class="common-form" enctype="multipart/form-data" action="getquote-submit.php" method="post">
                              <!--   <div class="form-border-bt">
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/8.png"></span>
                                        <input type="text" name="origin" placeholder="Origin" class="common-inputfd">
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box common-select-box">
                                        <span class="input-img"><img src="img/form-icons/12.png"></span>
                                        <select name="shipment" class="common-select">
                                          <option value="shipment">Type of Shipment</option>
                                          <option value="ship1">Ship 1</option>
                                          <option value="ship2">Ship 2</option>
                                          <option value="ship3">Ship 3</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box common-select-box">
                                        <span class="input-img"><img src="img/form-icons/9.png"></span>
                                        <select name="cargo" class="common-select">
                                          <option value="cargo">Type of Cargo</opotion>
                                          <option value="cargo1">Cargo 1</option>
                                          <option value="cargo2">Cargo 2</option>
                                          <option value="cargo3">Cargo 3</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box common-select-box">
                                        <span class="input-img"><img src="img/form-icons/13.png"></span>
                                        <select name="destination" class="common-select">
                                          <option value="destination">Destination</opotion>
                                          <option value="destination1">Destination 1</option>
                                          <option value="destination2">Destination 2</option>
                                          <option value="destination3">Destination 3</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/10.png"></span>
                                        <input type="text" name="commodity" placeholder="Commodity" class="common-inputfd">
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/14.png"></span>
                                        <input type="text" name="packages" placeholder="Numbers of Packages" class="common-inputfd">
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/11.png"></span>
                                        <input type="text" name="weight" placeholder="Gross Weight" class="common-inputfd">
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/15.png"></span>
                                        <input type="text" name="dimesions" placeholder="Dimensions" class="common-inputfd">
                                    </div>
                                    </div> -->
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/2.png"></span>
                                        <input type="text" name="get_name" placeholder="Your Name*" class="common-inputfd">
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/17.png"></span>
                                        <input type="text" name="company_name" placeholder="Company Name*" class="common-inputfd">
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/3.png"></span>
                                        <input type="text" name="tel_no" placeholder="Contact No.*" class="common-inputfd">
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/1.png"></span>
                                        <input type="email" name="get_email" placeholder="E-mail*" class="common-inputfd">
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box common-select-box">
                                        <span class="input-img"><img src="img/form-icons/18.png"></span>
                                        <select name="country" class="common-select countries" id="countryId">
                                        <option value="">Country</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box common-select-box">
                                        <span class="input-img"><img src="img/form-icons/22.png"></span>
                                        <select name="state" class="common-select states" id="stateId">
                                          <option value="">State</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box common-select-box">
                                        <span class="input-img"><img src="img/form-icons/16.png"></span>
                                        <select name="city" class="common-select cities" id="cityId">
                                          <option value="">City</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-6 filed-box">
                                        <span class="input-img"><img src="img/form-icons/4.png"></span>
                                        <input type="text" name="quote_msg" placeholder="Enter your Message here" class="common-inputfd">
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
    <script src="js/location.js"></script>
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