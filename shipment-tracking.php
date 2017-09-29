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
    <title>Shipment Tracking</title>
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
      $active_tab = "shipment";
    ?>
        <?php include("includes/header.php") ?>
        <!-- Banner Section -->
        <div class="shipment-banner wow fadeIn" data-wow-duration="1s" data-wow-delay="0.80s">
            <div class="overlay">
                <a href="get-a-quote.php">
                    <div class="quote wow slideInRight" data-wow-duration="1s" data-wow-delay="0.80s">Get A Quote</div>
                </a>
                <div class="page-title">
                    <h1>Shipment Tracking</h1>
                </div>
                <div class="breadcumb-example">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Shipment Tracking</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Banner Section -->
       <!-- Shipment Tracking Start-->
       <div class="container">
         <div class="row">
           <div class="col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
             <div class="shipment-txt">
               <p>Enter the three-digit airline code along with the eight-digit air waybill number (example: 00187654321) for each shipment you would like to track. Click the Track button to start your search.</p>
             </div>
             <div class="shipment-form">
                   <form class="common-form">
                     <div class="col-xs-12 col-md-8 product-input">
                     <span><img src="img/form-icons/5.png" class="ship-icon"></span>
                     <input type="text" name="productno" placeholder="Enter Air Waybill Number" class="product-no"></div>
                     <div class="col-xs-12 col-md-4">
                     <button class="sign-btn icon-arrow-right check" type="submit">Track<span class="sign-arrow">
                    <img src="img/right-small.png"></span></button></div>
                   </form>
             </div>
           </div>
         </div>
       </div>
       </div>
       <!-- Shipment Tracking End -->
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
