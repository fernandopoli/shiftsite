<!doctype html>
<html lang="en">
<head>

 <?php $pageTitle = "About Us";
 include 'metadata.php';  ?>

 <title>SHIFT - <?php echo $pageTitle ?></title>
</head>
<body>

  <?php include 'header.php' ?>

  <!-- WRAPPER -->
  <div class="wrapper">
    <section class="section-initial about-us-featured">
      <div class="background-about-us-01 bg-wrapper no-cover"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-12 col-lg-10">
            <h1 class="text-white mb-4" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">SHiFT  delivers a superior global payments experience to businesses throughout Canada and the world.
            </h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card-deck mb-4">
              <div class="card mb-5" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
                <div class="card-body card-big">
                  <div class="title-vertical-wrapper mb-5">
                    <div class="d-flex flex-column align-items-center title-vertical"> 
                      <div class="title-img">               
                        <img src="images/about_us_01.svg" align="SHiFT WITH SPEED" class="title-icon" width="66" height="66" />
                      </div>
                      <h3 class="text-blue text-underline text-left">About Us</h3>
                    </div>
                    <p class="text-left text-default">
                      SHiFT is 100% committed to helping our clients with all of your global payments and foreign exchange needs.  We offer competitive rates, advanced currency solutions, proven risk management strategies, leading payment technologies, and the latest in market intelligence. 
                    </p>
                    <p class="text-left text-default">
                      We’re able to do what we do because we’ve got the best talent in the industry on our team. With over five decades of combined global payments expertise, SHIFT’s team of Specialists is equipped to deliver the customized solutions and personalized service required for your specific business.
                    </p>
                    <p class="text-left text-default">
                      Our global footprint means we’ve got experts and knowledge around the world that enables us to be at the forefront of international market trends. 
                    </p>
                    <p class="text-left text-default">
                      <span class="d-block text-blue-light"><b>CAREERS:</b></span>
                      If you’re interested in joining us and being a part of a best-in-class team – contact us at <br /><a href="careers@shiftconnect.com" class="link link-blue" title="careers@shiftconnect.com">careers@shiftconnect.com</a>.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about-us-form">
      <div class="background-about-us-02 bg-wrapper no-cover"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="title-vertical-wrapper">
              <div class="d-flex flex-column align-items-center title-vertical"> 
                <div class="title-img">               
                  <img src="images/about_us_02.svg" align="SHiFT WITH SPEED" class="title-icon" width="66" height="66">
                </div>
                <h3 class="text-blue-light text-underline text-left">Contact Us</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-around">
          <div class="col-lg-5 col-12 order-2 order-lg-1">
            <form>
              <div class="form-group">
                <label for="name" class="text-uppercase text-blue"><b>Name</b></label>
                <input type="text" class="form-control" id="name" aria-describedby="Name" >
              </div>
              <div class="form-group">
                <label for="email" class="text-uppercase text-blue"><b>Email</b></label>
                <input type="email" class="form-control" id="email" aria-describedby="Email" >
              </div>
              <div class="form-group">
                <label for="phone" class="text-uppercase text-blue"><b>Phone</b></label>
                <input type="text" class="form-control" id="phone" aria-describedby="Phone" >
              </div>
              <div class="form-group">
                <label for="message" class="text-uppercase text-blue"><b>Message</b></label>
                <textarea class="form-control" id="message" rows="5"></textarea>
              </div>
              <div class="form-group form-check ">
                <input class="form-check-input" type="checkbox" value="" id="checkForm">
                <label class="form-check-label text-default" for="checkForm">
                  Yes, sign me up for SHiFT Market News 
                </label>
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-blue-light btn-send text-uppercase">Send</button>
              </div>
            </form>
          </div>
          <div class="col-lg-5 col-12 order-1 order-lg-2 mb-4 mt-4">
            <div class="row">
              <div class="col-6">
                <p>
                  <span class="d-block text-blue text-uppercase">
                    <b>Phone</b>
                  </span>
                  <span class="d-block text-blue-light">
                    <i>toll free</i>
                  </span>
                  <a href="tel://1865225402" class="d-block link link-blue-light" title="1-866-522-5402">
                    <b>1-866-522-5402</b>
                  </a>
                </p>
                <p>                  
                  <span class="d-block text-blue-light">
                    <i>direct</i>
                  </span>
                  <a href="tel://4032695402" class="d-block link link-blue-light" title="403-269-5402">
                    <b>403-269-5402</b>
                  </a>
                </p>
                <p>                  
                  <span class="d-block text-blue text-uppercase">
                    <b>Sales Support</b>
                  </span>
                  <a href="mailto:sales@shiftconnect.com" class="d-block link link-blue-light" title="sales@shiftconnect.com">
                    <b>sales@shiftconnect.com</b>
                  </a>
                </p>
              </div>
              <div class="col-6">
                <p>
                  <span class="d-block text-blue text-uppercase">
                    <b>Canada</b>
                  </span>
                  <span class="d-block text-blue-light">
                    310, 323-10 Ave SW <br />t2r 0a5 Calgary, AB 
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
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