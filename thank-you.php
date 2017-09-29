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
    <title>Thank You</title>
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
      $active_tab = "thank-you";
    ?>
            <?php include("includes/header.php") ?>
            <!-- Banner Section -->
           <div classs="banner_image">
                <div class="thank-mainbox">
                <div class="thank-outer">
                    <div class="thank-inner">
                        <div class="bckg-img">
                            <div class="thank-box">
                                <h1 class="thank-msg">THANK YOU</h1>
                                <?php if (isset($_GET['message']) && !empty($_GET['message'])) {
                                    if ($_GET['message'] == 'career') {
                                       echo "<p>Thank you for submitting the career details. <br/>Our team will get back to you at the earliest.</p>";
                                    }
                                    elseif ($_GET['message'] == 'get_quote') {
                                        echo "<p>We have received your requirement for a quote.<br/>Our team will get back to you at the earliest.</p>";
                                    }
                                    elseif ($_GET['message'] == 'contact') {
                                        echo "<p>Thank you, we have received your contact details.<br/> Our team will get in touch with you at the earliest.</p>";
                                    }
                                } ?>                               
                                 
                                <a href="index.php"><button class="submit-btn-th icon-arrow-right btn-thank" type="submit">Back to Homepage<span class="sum-arrow">
                                <img src="img/Arrow.png"></span></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Thank Msg End -->
            <?php include("includes/footer.php") ?>
            <!-- All Scripts Start-->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script>
            window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
            </script>
            <script src="js/vendor/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
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