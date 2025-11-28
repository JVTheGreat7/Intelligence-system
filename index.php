<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Evently Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Evently
  * Template URL: https://bootstrapmade.com/evently-bootstrap-events-template/
  * Updated: Jul 19 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">SABELLINA</h1>
      </a>

      <nav id="navmenu" class="navmenu">
       <ul>
             <li>
                <a href="index.php?page=Japan" class="<?php echo ($_GET['page'] ?? '') === 'Japan' ? 'active': '';  ?>">
                  <i class="bi bi-circle"></i><span>Japan</span>
                </a>
              </li>
           <li>
                <a href="index.php?page=London" class="<?php echo ($_GET['page'] ?? '') === 'London' ? 'active': '';  ?>">
                  <i class="bi bi-circle"></i><span>London</span>
                </a>
              </li>
            <li>
                <a href="index.php?page=Paris" class="<?php echo ($_GET['page'] ?? '') === 'Paris' ? 'active': '';  ?>">
                  <i class="bi bi-circle"></i><span>Paris</span>
                </a>
              </li>

          </ul>

            </ul>
          </li>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

<?php  if (isset($_GET['page'])){
        $page=$_GET['page'];
        switch($page){
          case'Japan':
                include 'Modules/Japan.php';
                break;
                case'Paris':
                  include 'Modules/Paris.php';
                  break;
                  case'London':
                    include 'Modules/London.php';
                    break;
        }
      } 

      ?>
    </section><!-- /Hero Section -->
          

   
              <!-- Intro Section -->
    <section id="intro" class="intro section">

      <div class="container">

        <div class="row g-4">

          <div class="col-lg-6">
            <div class="content">
              <h2>The Definitive Tech Innovation Summit</h2>
              <p class="lead">The Definitive Tech Innovation Summit brings together visionary leaders and bold innovators across Japan, London, and Paris, uniting three global hubs to ignite groundbreaking ideas, showcase next-generation technologies, and shape the future of the digital world through collaboration, creativity, and limitless innovation.</p>
              

              <div class="stats-grid">
                <div class="stat-item">
                  <div class="stat-number">3</div>
                  <div class="stat-label">Days</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">8</div>
                  <div class="stat-label">Tracks</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">150+</div>
                  <div class="stat-label">Speakers</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">3500+</div>
                  <div class="stat-label">Attendees</div>
                </div>
              </div>

              <div class="cta-section">
                <a href="#" class="btn btn-primary">View Full Agenda</a>
                <a href="#" class="btn btn-outline">Meet the Speakers</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="visual-section">
              <div class="image-wrapper">
                <img src="assets/img/smeagol.jpeg" alt="Tech Summit" class="img-fluid">
                <div class="gradient-overlay"></div>
                <div class="floating-badge">
                  <i class="bi bi-calendar-event"></i>
                  <span>March 15-17, 2026</span>
                </div>
              </div>

              <div class="highlight-cards">
                <div class="highlight-card">
                  <i class="bi bi-people-fill"></i>
                  <h4>Global Networking</h4>
                  <p>Connect with industry leaders from 60+ countries</p>
                </div>
                <div class="highlight-card">
                  <i class="bi bi-lightbulb-fill"></i>
                  <h4>Innovation Showcase</h4>
                  <p>Discover cutting-edge technologies and startups</p>
                </div>
              </div>
            </div>
          </div>

        </div>

       


    </section><!-- /Intro Section -->
   

          
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

      
</body>

</html>