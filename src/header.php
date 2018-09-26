<!-- HEADER -->
<nav id="header" class="header navbar navbar-expand-lg fixed-top">
  <div class="container align-items-lg-end align-items-center">

    <!-- LOGO -->
    <a class="navbar-brand" href="./">
      <svg id="logo" class="logo" preserveAspectRatio="none" viewBox="0 0 582 161" height="38">
        <path id="logoIso" d="M117.8 81.6v7.9c0 1.4-1.5 2.4-2.8 1.7L48.6 58.4c-2.1-1-2.1-3.9 0-5l65.6-32.3c1.7-.8 3.6.4 3.6 2.2v4.8c0 5 4.1 9.1 9.1 9.1H154c3.9 0 7-3.2 7-7V5.8c0-3.2-2.6-5.8-5.8-5.8H29.5C13.2 0 0 13.2 0 29.5v49.1c0 4.4 3.6 8 8 8h33.5V72.3c0-1.7 1.8-2.8 3.3-2l68.4 33.7c1.1.5 1.1 2 0 2.5l-68.4 33.7c-1.5.7-3.2-.3-3.2-2V132c0-4.5-3.7-8.2-8.2-8.2H7.8c-4.3 0-7.8 3.5-7.8 7.8v24.7c0 2.5 2 4.6 4.6 4.6h121.7c19.2 0 34.7-15.5 34.7-34.7v-45c0-3.7-3-6.7-6.7-6.7h-29.6c-3.8.1-6.9 3.2-6.9 7.1z" fill="#38ccb5"/>
        <path id="logoText" d="M210.1 96.6h18.5c-.1 12.7 7.6 17.6 19.2 17.6 10 0 17.9-2.7 17.9-11.7 0-8.7-6-10.8-22.5-15.7-17.1-4.8-30.8-10.7-30.8-28.3 0-19.2 16.1-28.1 33.7-28.1 18.5 0 35.9 8.5 36 30.5h-18.5c-.7-11.7-8.7-15.1-17.9-15.1-7.3 0-14.7 2.5-14.7 10.7 0 7.2 4 9.2 23.5 15.5 16.3 5.1 29.7 10.3 29.7 28 0 17.6-13.2 30.1-36.8 30.1-20.5 0-37.7-9.3-37.3-33.5zm89.7-64.1h19.1v38.1h39.2V32.5h19.2v95.4h-19.2V89.1h-39.2v38.7h-19.1V32.5zm132.7 0h63.3v18.4h-44.3v23.9h38.3v17.3h-38.3v35.7h-19.1V32.5zm103 16.2h-27.3V32.5H582v16.3h-27.3v79.1h-19.2V48.7z" fill="#030140"/>      
        <path id="logoTextI" d="M413.4 60.4V32.5h-19v18.1zm-19 4.8v62.6h19V75z" fill="#38ccb5"/>
      </svg>
    </a>
    <!-- END LOGO -->

    <button class="navbar-toggle collapsed d-xl-none d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="container">
        <div class="d-flex row flex-column align-items-center">

          <!-- NAVBAR CONTACT/LANGUAGE -->
          <div id="loginWrapper" class="container d-flex order-lg-1 order-2 flex-column flex-lg-row justify-content-lg-end justify-content-md-start align-items-lg-center align-items-start text-uppercase">
            <a class="btn btn-link btn-sm btn-language active d-none d-lg-block" href="#">EN</a>
            <a class="ml-1 btn btn-link btn-sm btn-language d-none d-lg-block" href="#">FR</a>
            <a class="ml-2 btn btn-sm btn-orange" href="https://form.jotform.com/73176918369269" target="_blank">Register</a>
            <a class="ml-2 btn btn-sm btn-orange" href="https://www.shiftconnectedge.com/secure/login.aspx" target="_blank">Sign In</a>
            <a class="ml-2 btn btn-sm btn-link btn-link-green btn-contact" href="mailto:contact@shiftconnect.com" title="contact@shiftconnect.com">Contact <i class="fab fa-whatsapp d-none d-lg-inline"></i></a>
          </div>
          <!-- END NAVBAR CONTACT/LANGUAGE -->

          <!-- NAVBAR LINKS -->
          <ul id="naBarLinks" class="container d-flex order-lg-2 order-1 flex-column flex-lg-row justify-content-lg-between justify-content-md-between list-unstyled my-0">
            <li>
              <a <?php if($pageTitle == 'Business Services'){echo 'class="active"';} ?> href="business_services.php" title="Business Services">Business Services</a>
            </li>
            <li>
              <a <?php if($pageTitle == 'Payment Technology'){echo 'class="active"';} ?> href="payment_technology.php" title="Payment Technology">Payment Technology</a>
            </li>
            <li>
              <a <?php if($pageTitle == 'Personal Services'){echo 'class="active"';} ?> href="personal_services.php" title="Personal Services">Personal Services</a>
            </li>
            <li>
              <a <?php if($pageTitle == 'About Us'){echo 'class="active"';} ?> href="about_us.php" title="About Us">About Us</a>
            </li>
            <li>
              <a <?php if($pageTitle == 'Market News'){echo 'class="active"';} ?> href="market_news.php" title="Market News">Market News</a>
            </li>
          </ul>
          <!-- END NAVBAR LINKS -->

        </div>
      </div>
    </div>
  </div>
</nav>
  <!-- END HEADER -->