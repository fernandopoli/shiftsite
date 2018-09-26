<!doctype html>
<html lang="en">
<head>

 <?php $pageTitle = "Market News";
 include 'metadata.php';  ?>

 <title>SHIFT - <?php echo $pageTitle ?></title>
</head>
<body>

  <?php include 'header.php' ?>

  <!-- WRAPPER -->
  <div class="wrapper">
    <section class="section-initial market-news-featured">
      <div class="background-market-news-01 bg-wrapper no-cover"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h1 class="text-gray mb-5" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">Market News 
            </h1>
          </div>
        </div>
        <!-- LIST WRAPPER -->
        <div class="row d-flex flex-lg-row flex-column justify-content-between">
          <div class="col-12 col-lg-3" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
            <p class="text-blue text-lg mb-4">Stay informed with the latest news on global markets, international payments, and foreign exchange.</p>
            <h4 class="text-uppercase mb-2 text-blue"><b>Market News Signup</b></h4>
            <form class="mb-5 d-block">
              <div class="input-group input-gray mb-3">
                <input type="text" class="form-control col-12 col-lg-9" aria-label="email" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn" type="button"><i class="fas fa-chevron-right"></i></button>
                </div>
              </div>
            </form>
            <p>
              <a href="coming_soon.php" class="btn btn-orange btn-md move-up mb-3">Trade Now</a>
              <small class="small text-default d-block">
                <i>Questions? Call us at: <br /><a href="tel://18665225402" title="1-866-522-5402" class="link link-default">1-866-522-5402</a> to speak with <br />a Specialist</i>
              </small>
            </p>
          </div>
          <div class="col-12 col-lg-9">
            <div class="list-wrapper">
              <?php for ($i=0; $i < 5; $i++) { ?>
              <div class="list list-blue" data-aos="fade-up" data-aos-delay="<?php echo $i ?>00" data-aos-once="true">
                <small class="text-blue d-block mb-3">Thursday, January  2, 2018</small>
                <h5 class="text-green text-uppercase">C$ HOVERS NEAR 3- MONTH LOW AHEAD OF FED RATE DECISION</h5>
                <p class="text-default">                  
                  The Canadian dollar edged lower against its U.S. conterpart on Wednesday, hovering near a three-month low hit last week, as investors braced for an interest rate from the Federal Reserve.
                </p>
                <a href="markets_news_details.php" title="Read Now" class="btn btn-sm btn-green move-up">Read Now</a>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <!-- END LIST WRAPPER -->
      </div>
    </section>
  </div>
  <!-- END WRAPPER -->

  <?php include 'footer.php' ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script src="js/init.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>