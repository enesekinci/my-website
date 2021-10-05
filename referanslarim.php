<?php

require_once('yonetim-paneli/helper/functions.php');

$database_host = "localhost";
$database_name = "my_website";
$database_user = "root";
$database_password = "";

$database = new PDO("mysql:host=" . $database_host . ";dbname=" . $database_name . ";charset=utf8", $database_user, $database_password);

$general_settings = $database->query("SELECT * FROM general_settings WHERE id = 1")->fetch(PDO::FETCH_ASSOC);
$references = $database->query("SELECT * FROM `references`", PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Leven - Resume / CV / vCard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" content="Leven - Resume / CV / vCard Template">
  <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, portfolio">
  <meta name="author" content="lmpixels">
  <link rel="shortcut icon" href="favicon.ico">

  <link rel="stylesheet" href="css\normalize.css" type="text/css">
  <link rel="stylesheet" href="css\bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css\owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="css\magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="css\main.css" type="text/css">

  <script src="js\modernizr.custom.js"></script>
</head>

<body class="page">

  <div class="lm-animated-bg"></div>

  <!-- Loading animation -->
  <div class="preloader">
    <div class="preloader-animation">
      <div class="preloader-spinner">
      </div>
    </div>
  </div>
  <!-- /Loading animation -->

  <!-- Scroll To Top Button -->
  <div class="lmpixels-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>
  <!-- /Scroll To Top Button -->

  <div class="page-scroll">
    <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

      <!-- Header -->
      <?php require_once('tema/header.php'); ?>
      <!-- /Header -->

      <div id="main" class="site-main">
        <div id="main-content" class="single-page-content">
          <div id="primary" class="content-area">

            <div class="page-title">
              <h1>Referanslarım</h1>
            </div>

            <div id="content" class="page-content site-content single-post" role="main">

              <div class="row">
                <div class=" col-xs-12 col-sm-12 ">
                  <!-- Portfolio Content -->
                  <div id="portfolio_content_q" class="portfolio-content">

                    <!-- Portfolio Grid -->
                    <div class="portfolio-grid two-columns shuffle">

                      <?php foreach ($references as $key => $reference) : ?>
                        <!-- Portfolio Item <?= $key ?> -->
                        <figure class="item direct">
                          <div class="portfolio-item-img">
                            <img src="yonetim-paneli/assets/images/references/<?= ($reference['image'] ?? '') ?>" alt="<?= $reference['title'] ?? '' ?>" title="<?= $reference['title'] ?? '' ?>" 
                            style="width: 600px !important;    height: 400px !important;">
                            <a target="_blank" href="<?= $reference['link'] ?? '' ?>"></a>
                          </div>

                          <i class="fa fa-link"></i>
                          <h4 class="name"><?= $reference['title'] ?? '' ?></h4>
                        </figure>
                        <!-- /Portfolio Item <?= $key ?> -->
                      <?php endforeach; ?>

                    </div>
                    <!-- /Portfolio Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="site-footer clearfix">
        <div class="footer-social">
          <ul class="footer-social-links">
            <li>
              <a href="#" target="_blank">Twitter</a>
            </li>

            <li>
              <a href="#" target="_blank">Facebook</a>
            </li>

            <li>
              <a href="#" target="_blank">Instagram</a>
            </li>
          </ul>
        </div>

        <div class="footer-copyrights">
          <p>© 2020 All rights reserved. LMPixels.</p>
        </div>
      </footer>

    </div>
  </div>

  <script src="js\jquery-2.1.3.min.js"></script>
  <script src="js\imagesloaded.pkgd.min.js"></script>
  <script src="js\bootstrap.min.js"></script>
  <script src='js\jquery.shuffle.min.js'></script>
  <script src='js\masonry.pkgd.min.js'></script>
  <script src='js\owl.carousel.min.js'></script>
  <script src="js\jquery.magnific-popup.min.js"></script>
  <script src="js\validator.js"></script>
  <script src="js\main.js"></script>
</body>

</html>