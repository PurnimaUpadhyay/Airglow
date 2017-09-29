<!-- Top Band Start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 top-band">
        <p class="mail-phone-box">
          <a href="mailto:info@airglowaviation.com">
          <span class="mail-ico">
            <img src="img/mail.png" alt="mail-icon">info@airglowaviation.com</span>
          </a>
          <a href="tel:97142522169">
          <span class="phone-ico">
            <img src="img/phone-call.png" alt="phone-icon">+ 971 4 252 2169</span>
          </a>
        </p>
        </div>
      </div>
    </div>

    <!-- Top Band End-->

    <!--Top Menu Bar-->
    <nav class="navbar navbar-default main-menu wow fadeInUp" role="navigation">
      <div class="container-fluid" data-wow-duration="1s">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand brand-logo" href="index.php"><img src="img/logo.png" alt="logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li <?php if($active_tab == "about") { echo "class='active'"; } ?> ><a href="about-airglow.php">About Airglow</a></li>
            <li <?php if($active_tab == "services") { echo "class='active'"; } ?> ><a href="our-services.php">Our Services</a></li>
            <li <?php if($active_tab == "guide") { echo "class='active'"; } ?> ><a href="aircraft-guide.php">Aircraft Guide</a></li>
           <!--  <li <?php if($active_tab == "media") { echo "class='active'"; } ?> ><a href="media.php">Media</a></li> -->
            <li <?php if($active_tab == "shipment") { echo "class='active'"; } ?> ><a href="shipment-tracking.php">Shipment Tracking</a></li>
            <li <?php if($active_tab == "contact") { echo "class='active'"; } ?> ><a href="contact-us.php">Contact Us</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <!--Top Menu Bar-->


    
