<?php

require_once('yonetim-paneli/helper/functions.php');

$database_host = "localhost";
$database_name = "my_website";
$database_user = "root";
$database_password = "";

$database = new PDO("mysql:host=" . $database_host . ";dbname=" . $database_name . ";charset=utf8", $database_user, $database_password);

$general_settings = $database->query("SELECT * FROM general_settings WHERE id = 1")->fetch(PDO::FETCH_ASSOC);

$educations = $database->query("SELECT * FROM educations", PDO::FETCH_ASSOC);
$experiences = $database->query("SELECT * FROM experiences", PDO::FETCH_ASSOC);
$skills = $database->query("SELECT * FROM skills", PDO::FETCH_ASSOC);

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
  <script async="" src='/cdn-cgi/challenge-platform/h/g/scripts/invisible.js'></script>
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
              <h1>Deneyimlerim</h1>
            </div>

            <div id="content" class="page-content site-content single-post" role="main">
              <div class="row">

                <div class=" col-xs-12 col-sm-6 ">
                  <div class="block-title">
                    <h2>Eğitimler</h2>
                  </div>

                  <div id="timeline_1" class="timeline clearfix">
                    <?php foreach ($educations as $education) : ?>
                      <div class="timeline-item clearfix">
                        <h5 class="item-period "><?= (date('Y', strtotime($education['start_date'])) ?? date('Y-m-d')) . ' - ' . (date('Y', strtotime($education['finish_date'])) ?? 'Hala Devam Ediyor') ?></h5>
                        <h4 class="item-title"><?= $education['title'] ?? '-' ?></h4>
                        <p><?= $education['summary'] ?? '-' ?></p>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>

                <div class=" col-xs-12 col-sm-6 ">
                  <div class="block-title">
                    <h2>Tecrübeler</h2>
                  </div>

                  <div id="timeline_2" class="timeline clearfix">
                    <?php foreach ($experiences as $experience) : ?>
                      <div class="timeline-item clearfix">
                        <h5 class="item-period "><?= (date('Y', strtotime($experience['start_date'])) ?? date('Y-m-d')) . ' - ' . (date('Y', strtotime($experience['finish_date'])) ?? 'Hala Devam Ediyor') ?></h5>
                        <h4 class="item-title"><?= $experience['title'] ?? '-' ?></h4>
                        <p><?= $experience['summary'] ?? '-' ?></p>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class=" col-xs-12 col-sm-12 ">
                  <div class="p-40"></div>
                </div>
              </div>

              <div class="row">
                <div class=" col-xs-12 col-sm-6 ">
                  <div class="block-title">
                    <h2>Yetenekler</h2>
                  </div>

                  <div id="skills_1" class="skills-info skills-first-style">
                    <?php foreach ($skills as $key => $skill) : ?>
                      <!-- Skill <?= $key ?> -->
                      <div class="clearfix">
                        <h4><?= $skill['title'] ?? '-' ?> </h4>
                        <div class="skill-value"><?= $skill['percent'] ?? 100 ?>%</div>
                      </div>

                      <div id="skill_<?= $key ?>" data-value="<?= $skill['percent'] ?? 100 ?>" class="skill-container">
                        <div class="skill-percentage"></div>
                      </div>
                      <!-- /Skill <?= $key ?> -->
                    <?php endforeach; ?>


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
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="js\bootstrap.min.js"></script>
  <script src='js\jquery.shuffle.min.js'></script>
  <script src='js\masonry.pkgd.min.js'></script>
  <script src='js\owl.carousel.min.js'></script>
  <script src="js\jquery.magnific-popup.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
  <script src="js\jquery.googlemap.js"></script>
  <script src="js\validator.js"></script>
  <script src="js\main.js"></script>
  <script type="text/javascript">
    (function() {
      window['__CF$cv$params'] = {
        r: '68e7b5a788bccb4e',
        m: 'uCV1Xqajqe6EGArB.YnAd9wps72QVglVoARCJ5lsRS0-1631602525-0-AWgriv7qi12Pe7vA7ykXqPj2j9Ldq2uYVlpEQcYQvG7rOYOCpyimEj+F8a1yXe5s4WOgFoWC6e3lh2St0ypmYPUuJPXNBLuUwNLDNU0t58HwP6YlBpJTBKi7tuYQ6AGR21UQBuhctea4xmTENSrixi45ZXzewA7lJD/PyhNIkJba6RuxnMk6pVjMdC+sM5j7ww==',
        s: [0x34a3dc7304, 0x7de835b3e7],
        u: '/cdn-cgi/challenge-platform/h/g'
      }
    })();
  </script>
  <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"68e7b5a788bccb4e","version":"2021.8.1","r":1,"token":"94b99c0576dc45bf9d669fb5e9256829","si":10}'></script>
</body>

</html>