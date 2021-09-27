<?php

require_once('yonetim-paneli/helper/functions.php');

$database_host = "localhost";
$database_name = "my_website";
$database_user = "root";
$database_password = "";

$database = new PDO("mysql:host=" . $database_host . ";dbname=" . $database_name . ";charset=utf8", $database_user, $database_password);

$general_settings = $database->query("SELECT * FROM general_settings WHERE id = 1")->fetch(PDO::FETCH_ASSOC);

$what_i_do = $database->query("SELECT * FROM what_i_do", PDO::FETCH_ASSOC);

$projects = $database->query("SELECT * FROM projects", PDO::FETCH_ASSOC);

$customers = $database->query("SELECT * FROM customers", PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo ($general_settings['name_surname'] ?? '') . ' - Kişisel Sitem'; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" content="<?php echo ($general_settings['name_surname'] ?? '') . ' - Kişisel Sitem'; ?>">
  <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, portfolio">
  <meta name="author" content="lmpixels">
  <link rel="shortcut icon" href="favicon.ico">


  <link rel="stylesheet" href="css\normalize.css" type="text/css">
  <link rel="stylesheet" href="css\bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css\owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="css\magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="css\main.css" type="text/css">

  <script src="js\modernizr.custom.js"></script>

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
            <div id="content" class="page-content site-content single-post" role="main">
              <!-- Home Page Top Part -->
              <div class="row">
                <div class=" col-xs-12 col-sm-12">
                  <div class="home-content">
                    <div class="row flex-v-align">

                      <div class="col-sm-12 col-md-5 col-lg-5">
                        <div class="home-photo">
                          <div class="hp-inner" style="background-image: url(<?= "yonetim-paneli/assets/website/profile_photo/" . ($general_settings['profile_photo'] ?? ''); ?>);">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-12 col-md-7 col-lg-7">
                        <div class="home-text hp-left">
                          <div class="owl-carousel text-rotation">
                            <div class="item">
                              <h4><?php echo $general_settings['job'] ?? '' ?></h4>
                            </div>

                            <div class="item">
                              <h4><?php echo $general_settings['job'] ?? '' ?></h4>
                            </div>
                          </div>

                          <h1><?php echo $general_settings['name_surname'] ?? '' ?></h1>
                          <p><?php echo $general_settings['about_me'] ?? '' ?></p>

                          <div class="home-buttons">
                            <?php
                            if (empty($general_settings['cv'])) {
                              $cv_link = "#";
                            } else {
                              $cv_link = "yonetim-paneli/assets/website/cv/" . $general_settings['cv'];
                            }
                            ?>
                            <a href="<?= $cv_link ?>" target="_blank" class="btn btn-primary">CV Indir</a>
                            <a href="iletisim.php" target="_self" class="btn btn-secondary">İletişim</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Home Page Top Part -->

              <!-- Services -->
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <div class="p-50"></div>

                  <div class="block-title">
                    <h2>Ben Neler Yaparım?</h2>
                  </div>
                </div>
              </div>

              <div class="row">

                <?php foreach ($what_i_do as $key => $do) : ?>
                  <div class="col-xs-12 col-sm-6">
                    <div class="info-list-w-icon">

                      <div class="info-block-w-icon">
                        <div class="ci-icon">
                          <i class="linecons linecons-display"></i>
                        </div>

                        <div class="ci-text">
                          <h4><?= $do['title'] ?? '' ?></h4>
                          <p><?= $do['summary'] ?? '' ?></p>
                        </div>
                      </div>

                    </div>
                  </div>
                <?php endforeach; ?>


              </div>
              <!-- /Services -->

              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <div class="p-20"></div>

                  <div class="p-40"></div>

                  <!-- Clients Slider -->
                  <div class="block-title">
                    <h2>Müşterilerim</h2>
                  </div>

                  <div id="clients_1" class="clients owl-carousel" data-mobile-items="1" data-tablet-items="3" data-items="6">

                    <?php foreach ($customers as $key => $customer) : ?>
                      <div class="client-block">
                        <a href="<?= $customer['website'] ?? '#' ?>" target="_blank" title="<?= $customer['title'] ?? '' ?>">
                          <img src="yonetim-paneli/assets/images/customers/<?= $customer['logo'] ?? '' ?>" alt="<?= $customer['title'] ?? '' ?>" width="75px" height="75px">
                        </a>
                      </div>
                    <?php endforeach; ?>

                  </div>
                  <!-- /Clients Slider -->

                  <div class="p-40"></div>

                </div>
              </div>



              <div class="p-40"></div>

              <!-- Pricing -->
              <div class="row">
                <div class=" col-xs-12 col-sm-12 ">
                  <div class="block-title">
                    <h2>Projelerim</h2>
                  </div>
                </div>

              </div>

              <div class="row">
                <div class=" col-xs-12 col-sm-12 ">
                  <div class="fw-pricing clearfix row">

                    <?php foreach ($projects as $key => $project) : ?>
                      <div class="fw-package-wrap col-md-4 highlight-col">
                        <div class="fw-package">

                          <div class="fw-pricing-row">
                            <span style="font-size: 24px;"><?= $project['title'] ?? '' ?></span>
                          </div>

                          <div class="fw-button-row">
                            <a href="<?= $project['link'] ?? '#' ?>" target="_blank" class="btn btn-secondary">GitHub'a Git</a>
                          </div>

                          <div class="fw-default-row">
                            <?= $project['summary'] ?? '' ?>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>


                  </div>
                </div>
                <!-- /Pricing -->
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <?php require_once('tema/footer.php'); ?>
      <!-- /Footer -->

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