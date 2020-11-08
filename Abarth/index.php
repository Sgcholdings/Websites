<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "contact@abarth.co.za";
	$headers = "From: " . $mailFrom;
	$txt = "You have received an email from " . $name . $name . ".\n\n" . $message;

	mail($mailTo, $subject, $txt, $headers);

	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Abarth</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="border-bottom top-bar py-2 bg-dark" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">
              <span class="mr-3"><strong class="text-white">Phone:</strong> <a href="tel://#"> 073 990 1586</a></span>
              <span><strong class="text-white">Email:</strong> <a href="mail://#"> contact@abarthappliances.co.za</a></span>
            </p>
          </div>
          <div class="col-md-6">
            <ul class="social-media">
              <li><a href="https://www.facebook.com/" class="p-2"><span class="icon-facebook"></span></a></li>
              <li><a href="https://www.twitter.com/" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="https://www.instagram.com/" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="https://www.linkedin.com/" class="p-2"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
      </div> 
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">Aba<span class="text-primary">rth</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#work-section" class="nav-link">Work</a></li>
                <li>
                  <a href="#services-section" class="nav-link">Services</a>
                </li>
                <li>
                  <a href="#about-section" class="nav-link">About</a>
                </li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(images/background.png);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>Abarth <span class="text-primary">.</span></h1>
                <p class="text-primary">Refrigeration & Appliances repairs. <a href="#" target="_blank"></a></p>
              </div>
           </div>
          </div>
        </div>
      </div>
    </div>  

    <section class="site-section">
      <div class="container">
      <h2 class="text-black h1 site-section-heading text-center">Why Choose Us</h2>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">00.</div>
              <h2 class="text-primary">Best Services</h2>
              <p class="mb-4">You are at the right place! We are offering fast and very prompt service.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">01.</div>
              <h2 class="text-primary">Appliance Repairs</h2>
              <p class="mb-4">Almost always we do have spare parts for most of the repairs, especially the one listed on our website.When our technician fix your appliance you will always get invoice and you can pay cash or EFT</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">02.</div>
              <h2 class="text-primary">Procedure</h2>
              <p class="mb-4">Make a booking with one of via email or call and one of our technician will arrive at agreed time. He will do inspection of your appliance and let you know what is wrong and how much it will cost you to repair – you will get quotation.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="work-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Appliances Repairs</h2>
            <p class="lead">We repair the following appliances:</p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-4" id="item">
            <a href="images/fridge.jpg" class="media-1" data-fancybox="gallery">
              <img src="images/fridge.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Fridge</h2>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4"  id="item">
            <a href="images/microwave.jpg" class="media-1" data-fancybox="gallery">
              <img src="images/microwave.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Microwave</h2>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4"  id="item">
            <a href="images/stove.png" class="media-1" data-fancybox="gallery">
              <img src="images/stove.png" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Stove</h2>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4"  id="item">
            <a href="images/chillers.jpg" class="media-1" data-fancybox="gallery">
              <img src="images/chillers.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Chiller</h2>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4"  id="item">
            <a href="images/aircon.png" class="media-1" data-fancybox="gallery">
              <img src="images/aircon.png" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Aircon</h2>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4"  id="item">
            <a href="images/freezer.jpg" class="media-1" data-fancybox="gallery">
              <img src="images/freezer.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Freezer</h2>
              </div>
            </a>
          </div>

         
        </div>
      </div>
    </section>

    <section class="site-section border-bottom" id="services-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center" data-aos="fade-up">
            <h2 class="text-black h1 site-section-heading text-center">Specialize With</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-cogs"></span></div>
              <div>
                <h3>Fridges</h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-cogs"></span></div>
              <div>
                <h3>Stoves</h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-cogs"></span></div>
              <div>
                <h3>Washing Machine</h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-cogs"></span></div>
              <div>
                <h3>Tumble Dryer</h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-cogs"></span></div>
              <div>
                <h3>Dishwasher</h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-cogs"></span></div>
              <div>
                <h3>ice Machine</h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-cogs"></span></div>
              <div>
                <h3>Coldrooms</h3>
              </div>
            </div>
          </div>
           <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-cogs"></span></div>
              <div>
                <h3>Aircondition, etc.</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row mb-5">
          
          <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
            <img src="images/services.jpeg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-6 order-md-1" data-aos="fade">

            <div class="row">

              <div class="col-12">
                <div class="text-left pb-1">
                  <h2 class="text-black h1 site-section-heading">About us</h2>
                </div>
              </div>
              <div class="col-12 mb-4">
                <p class="lead">We have over 10 years experience working with many clients, and giving them unforgettable personal experience and our mission is having a passion to exceed your expectations.</p>
              </div>
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-cogs"></span></div>
                  <div>
                    <h3>Services</h3>
                    <p>We are coming to you! We repair appliances at your house. We work on a lot of brands like LG, Defy, Samsung etc.
                    </p>
                    <p class="mb-0"><a href="#services-section">Learn More</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <section class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="text-black h1 site-section-heading">Get In Touch</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" name="name" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" name="lastname" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" name="mail" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" name="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">11 Hermo Street Birchleigh North Kempton Park</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+27 73 990 1586</a></p>
              <p class="mb-4"><a href="#">+27 63 855 4689</a></p>
              

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="gmail.com">contact@abarthappliances.co.za</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>

    <a href="#" class="bg-primary py-5 d-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10"><h2 class="text-white">Contact Us</h2></div>
        </div>
      </div>  
    </a>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>We have over 10 years experience working with many clients, and giving them unforgettable personal experience and our mission is having a passion to exceed your expectations.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section">About Us</a></li>
                  <li><a href="#services-section">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#contact-section">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="https://www.facebook.com/" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="https://www.twitter.com/" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="https://www.instagram.com/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="https://www.linkedin.com/" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
           Abarth &copy;<script>document.write(new Date().getFullYear());</script></p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Web Apps"," WordPress"," Mobile Apps"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
  


  </body>
</html>