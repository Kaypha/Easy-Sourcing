
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Easy sourcing</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="  {{URL:: asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href=" {{ URL::asset('vendor/aos/aos.css') }} " rel="stylesheet">
  <link href="  {{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href=" {{ URL::asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href=" {{ URL::asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href=" {{ URL::asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href=" {{URL:: asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href=" {{ URL::asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Easy Sourcing</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Company</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Products</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
           <li><a class="nav-link scrollto" href="#testimonials">Team</a></li>
        
          <li><a class="nav-link scrollto" href="#team">Get a Free Demo</a></li>
       
          <li><a class="nav-link scrollto" href="#contact">Request Demo</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
  <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Easy Sourcing</span></h2>
        <p class="animate__animated fanimate__adeInUp">Easy Sourcing is a collaborative, cloud-based software solution that makes sourcing a truly strategic arm of the business by providing greater visibility and transparency throughout the entire sourcing and supplier engagement process.</p>
        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">About Us</a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Our Mission</h2>
        <p class="animate__animated animate__fadeInUp">Our mission is to make the sourcing process simplified, ensuring visibility, accountability, transparency while promoting digitization to small and mid sized businesses</p>
        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Our Software</h2>
        <p class="animate__animated animate__fadeInUp">We provide a software based system that helps companies consolidate and manage all their spending through a unified system. </p>
        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
      </div>
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
    </a>

  </div>

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
  </svg>

</section><!-- End Hero -->

 

    <!-- ======= Features Section ======= -->
    <section id="about" class="features">
      <div class="container">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">WHO WE ARE</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <a class="nav-link" style="background-color:#ef6603"data-bs-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">OUR STORY</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
            <a class="nav-link" style="background-color:#ef6603" data-bs-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">MISSION & VISION</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
            <a class="nav-link" style="background-color:#ef6603" data-bs-toggle="tab" href="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">OUR VALUES</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>WHO WE ARE</h3>
                <p>
                  Easy Sourcing is a collaborative, cloud-based software solution that makes sourcing a truly strategic arm of the business by providing greater visibility and transparency throughout the entire sourcing and supplier engagement process.
                  <br><br>
                  Easy Sourcing was founded on the basis of automating sourcing and supplier management, helping procurement teams in companies to deliver significant cost and time savings. 
                  Everything we do is customer-centric. We are obsessively dedicated to deliver the best customer experience and best customer success.
                  
                </p>

              
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src=" {{URL::asset('img/about-us.png') }} " alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>WHY EASY SOURCING</h3>
                <p>
                  Easy Sourcing is a collaborative, cloud-based software solution that makes sourcing a truly strategic arm of the business by providing greater visibility and transparency throughout the entire sourcing and supplier engagement process.
                  <br><br>
                  Easy Sourcing was founded on the basis of automating sourcing and supplier management, helping procurement teams in companies to deliver significant cost and time savings. 
                  Everything we do is customer-centric. We are obsessively dedicated to deliver the best customer experience and best customer success.
                  
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="  {{ URL::asset('img/about-us.png') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>OUR MISSION</h3>
                <p>
                  Our mission is to make the sourcing process simplified, ensuring visibility, accountability, transparency while promoting digitization to small and mid sized businesses.
                  <br>
                  
                </p>
                  <br><br>
                <h3>OUR VISION</h3>
                <p>
                  Our vision is to simplify the procurement processes for all
                  <br>
               
                </p>
             
             
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src=" {{ URL::asset('img/about-us.png') }} " alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>OUR VALUES</h3>
                <ul>
                  <li><i class="ri-check-double-line"></i> Collaboration - everyone in our team shares our impact, and we are better together than we are on our own.</li>
                  <li><i class="ri-check-double-line"></i> Transparency - our communication is open and constructive as we foster a culture of trust and integrity.</li>
                  <li><i class="ri-check-double-line"></i> High standards - We aim for excellence in everything we do and always go the extra mile for our customers.</li>
                  <li><i class="ri-check-double-line"></i> Continuous improvement - we value every feedback from our customers on how best to serve them better and improve our services accordingly.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src=" {{ URL::asset('img/about-us.png') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Sign Up Today</h3>
            <p> Everything we do is customer-centric. We are obsessively dedicated to deliver the best customer experience and best customer success.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Get a Free Demo</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

      <section id="portfolio" class="portfolio">
      <div class="container">
           <div class="section-title" data-aos="zoom-out">
          <h2>Products</h2>
          <p>What we offer</p>
        </div>

<div class="row portfolio-container" data-aos="fade-up">
       
           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/sourcing.jpeg" class="img-fluid" alt=""></div>
            <div class="" style="opacity: 0.7; background-color: white">
              <h4 >Requisition & sourcing pipeline   </h4>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/supply.jfif" class="img-fluid" alt=""></div>
            <div class="" style="opacity: 0.7; background-color: white">
              <h4 >Supplier Management   </h4>
            </div>
          </div>
                 
                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/catalog.jpg" class="img-fluid" alt=""></div>
            <div class="" style="opacity: 0.7; background-color: white">
              <h4 >Catalog Management  </h4>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/esourcing.png" class="img-fluid" alt=""></div>
            <div class="" style="opacity: 0.7; background-color: white">
              <h4 >E-Sourcing   </h4>
            </div>
          </div>
                 

                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/data.png" class="img-fluid" alt=""></div>
            <div class="" style="opacity: 0.7; background-color: white">
              <h4 >Reporting & Big Data Analytics   </h4>
            </div>
          </div>
                 
                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/e-procurement.jpg" class="img-fluid" alt=""></div>
            <div class="" style="opacity: 0.7; background-color: white">
              <h4 >Integration  </h4>
            </div>
          </div>
                 
                 
        </div>
    
      </div>
    </section>

    <!-- ======= Services Section ======= -->
      <!--<section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Products</h2>
          <p>What we offer</p>
        </div>

      <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
                      <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">REQUISITION & SOURCING PIPELINE</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href=""> SUPPLIER MANAGEMENT</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">CATALOG MANAGEMENT</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">E-SOURCING</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">REPORTING AND BIG DATA ANALYTICS</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">INTEGRATION</a></h4>
              <p class="description"></p>
            </div>
          </div>
        </div>

      </div>
    </section><! End Services Section -->



    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Packages</h2>
          <p>List of our packages</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>Starter-For individuals and small teams looking to automate basic procurement processes</h3>
              <!--<h4><sup>$</sup>19<span> / month</span></h4>-->
              <ul>
                
                <li>Save time by automating the quote request process and let suppliers provide bids online.</li>
                <li>Share and exchange unlimited documents/specifications of any format with your suppliers.</li>
                <li>Make quick and accurate award decisions using the side-by-side comparison of supplier quotes and response</li>
         
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Proffessional-For medium and large-sized businesses</h3>
               <!--<h4><sup>$</sup>29<span> / month</span></h4>-->
              <ul>
              
                <p>All the features of starter, plus;</p>
                <li>Run Reverse auctions to save time & generate cost savings.</li>
                <li>-Use excel to create your sourcing events automatically.</li>
                <li>Automate your sourcing processes from Requisitions to award to P.O generation / Delivery.</li>
                <li>Integrate Business intelligence dashboards for advanced Data analytics</li>

              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span class="advanced">Enterprise</span>
              <h3>Enterprise-For large organizations with enhanced processes</h3>
               <!--<h4><sup>$</sup>49<span> / month</span></h4>-->
              <ul>
                <li>All the benefits of Professional, plus;</li>
                <li>End-to-end sourcing automation from Requisitions-Quotation-Approval-award-PO-invoice</li>
                <li>Access all core sourcing modules to fully automate your purchasing process</li>
                <li>Customise the ProcurePort sourcing portal to suit your business workflow needs</li>
                <li>Seamless integration with third party ERP.</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->


    
     
    <!-- ======= Pricing Section ======= -->
    <section id="products" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Packages</h2>
          <p>List of our packages</p>
        </div>

        <div class="row">

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col" style="color: darkorange;">PACKAGES</th>
                    <th scope="col" style="color: darkorange;" >STARTER</th>
                    <th scope="col" style="color: darkorange;" >PROFESSIONAL</th>
                    <th scope="col" style="color: darkorange;" >ENTERPRISE</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                     <th scope="row"style="color: darkorange;">SOURCING MODULES</th>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                  <tr>
                    <th scope="row">Supplier management</th>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Request for quote (RFQ)</th>
                    <td>Up to 25 per year</td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Request for information / survey (RFI)</th>
                    <td></i>Up to 25 per year</td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">E-Auctions</th>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Contract management</th>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Requisitions</th>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Award + PO & invoice management</th>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Online Catalogs + Punchouts</th>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Spend analysis</th>
                    <td></td>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: darkorange;">COLLABORATION</th>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Template library</th>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Document management & storage</th>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Inline chat + messaging</th>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Email notifications</th>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Text notifications</th>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Third party ERP integration</th>
                    <td></td>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: darkorange;">ENHANCED REPORTING</th>
                    <td colspan="2"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Standard reporting</th>
                    <td><i class="bi bi-check"></i></td>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                  
                  </tr>
                  <tr>
                    <th scope="row">Excel data reports</th>
                    <td><i class="bi bi-check"></i></td>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Business intelligence <br>(sourcing) dashboards</th>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Custom reporting</th>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                   
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: darkorange;">ADMINISTRATION</th>
                    <td colspan="2"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row" >Dedication URL + Custom boarding</th>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                   
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Vanity URL</th>
                    <td></td>
                    <td></td>
                   
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Custom Categorization + Taxonomy</th>
                    <td><i class="bi bi-check"></i></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Customized Email communication</th>
                    <td></td>
                    <td></td>
                   
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Approval + Award workflows</th>
          
                    <td><i class="bi bi-check"></i></td>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Sourcing Event creation using Excel</th>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                   
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Advanced Software Customization</th>
                    <td></td>
                    <td></td>
                   
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: darkorange;">SUPPORT</th>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Access to customer support</th>
                    <td></td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">99.9 % guaranteed uptime SLA</th>
                    <td>Email</td>
                    <td>Email + Phone</td>
                    <td>Email + Phone</td>
                  
                  </tr>
                  <tr>
                    <th scope="row">Designated Account & <br>Customer Success Team</th>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                    <td><i class="bi bi-check"></i></td>
                  </tr>
                </tbody>
              </table>
        

          

        </div>

      </div>
    </section><!-- End Pricing Section -->



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Our Team</h2>
          <p>The Dream Team</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
             
              A Chartered Procurement and Supply Chain professional with over 10 years of multi-industry experience with proven records in International Procurement, Strategic Sourcing, Contract management, inventory management, negotiations, supplier relationship management, supply risk management and Supply chain management.
                
                </p>
                <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Martin M. Muriuki, MCIPS </h3>
                <h4>Co-founder and CEO</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  
                  A Certified Information Technology specialist with 4 years of experience working on Microsoft projects at Techno Brain Group.
                 
                </p>
                <img src=" {{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Chrispus Kyalo M</h3>
                <h4> Co- founder and CTO</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
               
                 A Senior Human Resources professional with a vast experience in Human Resources, Finance and administration management with over 10 years of multi-industry experience and working with professionals.
                 
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Catherine K. Mbithi </h3>
                <h4>COO and Director</h4>
              </div>
            </div><!-- End testimonial item -->

            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= F.A.Q Section ======= -->
  <!--  <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><! End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Nairobi, Kenya</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@easysourcing.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+2547 xxxx xxxx</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action=" {{ URL::asset('forms/contact.php') }} " method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color: #2a2c39;">




      <div class="container">
        <div class="row">
          <div class="col-lg-3" style="text-decoration: none; text-align: left; color:#ef6603">
              <ul style="list-style: none;">
                <h4>Product</h4>
                <li>Requisition & sourcing pipeline  </li>
                <li>Supplier management</li>
                <li>Catalog management </li>
                <li>E-Sourcing</li>
                <li>Catalog management </li>
                <li>Reporting and Big data analytics </li>
                <li>Intergration </li>

         
              </ul>
           
          </div>

          <div class="col-lg-3" style="text-decoration: none; text-align: left; color:#ef6603">
            <ul style="list-style: none;">
              <h4>Company</h4>
              <li>Who we are  </li>
              <li>About Us</li>
              <li>Our Vision </li>
              <li>Our Values</li>
              <li>The Dream team </li>
              <li>Press </li>

       
            </ul>
         
        </div>

      
  <div class="col-lg-3" style="text-decoration: none; text-align: left; color:#ef6603">
              <ul style="list-style: none;">
                <h4>Legal</h4>
                <li>Terms and Conditions </li>
                <li>Privacy Platform</li>
              

         
              </ul>
           
          </div>


          <div class="col-lg-3" style="text-decoration: none; text-align: left; color:#ef6603">
            <ul style="list-style: none;">
              <h4>Resources</h4>
              <li>Case Studies</li>
              <li>FAQs </li>
              <li>Help Center</li>
            

       
            </ul>
         
        </div>

        </div>

      </div>

    <div class="container"></div>
      <div class="copyright">
        &copy; 2021 Copyright <strong><span>Easy Outsourcing</span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="  {{ asset('vendor/aos/aos.js') }}  assets/"></script>
  <script src=" {{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src=" {{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src=" {{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src=" {{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src=" {{ asset('vendor/swiper/swiper-bundle.min.js') }} "></script>

  <!-- Template Main JS File -->
  <script src=" {{ asset('js/main.js') }}"></script>

</body>

</html>