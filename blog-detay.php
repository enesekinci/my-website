<?php

require_once('yonetim-paneli/helper/functions.php');

$database_host = "localhost";
$database_name = "my_website";
$database_user = "root";
$database_password = "";

$database = new PDO("mysql:host=" . $database_host . ";dbname=" . $database_name . ";charset=utf8", $database_user, $database_password);

$general_settings = $database->query("SELECT * FROM general_settings WHERE id = 1")->fetch(PDO::FETCH_ASSOC);


$id = $_GET['id'];
$blog = $database->query("SELECT * FROM `blogs` WHERE id = $id")->fetch(PDO::FETCH_ASSOC);

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
            <div id="content" class="page-content site-content" role="main">

              <article class="post">

                <header class="entry-header">

                  <h2 class="entry-title"><?= $blog['title'] ?? '-' ?></h2>
                </header><!-- .entry-header -->

                <div class="post-thumbnail">
                  <img src="yonetim-paneli/assets/images/blog/<?= $blog['image'] ?? null ?>" alt="<?= $blog['title'] ?? '-'  ?>">
                </div>

                <div class="post-content">
                  <div class="entry-content">

                    <div class="row">
                      <div class=" col-xs-12 col-sm-12 ">
                        <?= $blog['content'] ?? '' ?>

                      </div>
                    </div>

                  </div><!-- .entry-content -->

                  <div class="entry-meta entry-meta-bottom">
                    <div class="date-author">

                      <span class="entry-date">
                        <a href="#" rel="bookmark">
                          <i class="far fa-clock"></i>
                          <time class="entry-date" datetime="<?= $blog['date'] ?? '-' ?>"><?= $blog['date'] ?? '-' ?></time>
                        </a>
                      </span>
                    </div>

                    <!-- Share Buttons -->
                    <div class="entry-share btn-group share-buttons">
                      <a href="https://www.facebook.com/sharer/sharer.php?u=<?= 'http://localhost' . $_SERVER['REQUEST_URI'] ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn" target="_blank" title="Share on Facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>

                      <a href="https://twitter.com/share?url=<?= 'http://localhost' . $_SERVER['REQUEST_URI'] ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn" target="_blank" title="Share on Twitter">
                        <i class="fab fa-twitter"></i>
                      </a>

                      <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= 'http://localhost' . $_SERVER['REQUEST_URI'] ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="btn" title="Share on LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                      </a>

                      <a href="http://www.digg.com/submit?url=<?= 'http://localhost' . $_SERVER['REQUEST_URI'] ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="btn" title="Share on Digg">
                        <i class="fab fa-digg"></i>
                      </a>
                    </div>
                    <!-- /Share Buttons -->
                  </div>

                </div>
              </article>

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
  <script src="js\modernizr.custom.js"></script>

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