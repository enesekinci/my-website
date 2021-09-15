﻿<!DOCTYPE html>
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
      <header id="site_header" class="header">
        <div class="header-content clearfix">

          <!-- Text Logo -->
          <div class="text-logo">
            <a href="index.html">
              <div class="logo-symbol">A</div>
              <div class="logo-text">Alex <span>Smith</span></div>
            </a>
          </div>
          <!-- /Text Logo -->

          <?php require_once 'tema/menu.php' ?>


          <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
          </a>
        </div>
      </header>
      <!-- /Header -->

      <div id="main" class="site-main">
        <div id="main-content" class="single-page-content">
          <div id="primary" class="content-area">

            <div class="page-title">
              <h1>Portfolio</h1>
              <div class="page-subtitle">
                <h4> My Works</h4>
              </div>
            </div>

            <div id="content" class="page-content site-content single-post" role="main">

              <div class="row">
                <div class=" col-xs-12 col-sm-12 ">
                  <!-- Portfolio Content -->
                  <div id="portfolio_content_q" class="portfolio-content">

                    <ul class="portfolio-filters">
                      <li class="active">
                        <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                      </li>

                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="category_detailed">Detailed</a>
                      </li>

                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="category_direct-url">Direct URL</a>
                      </li>

                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="category_image">Image</a>
                      </li>

                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="category_soundcloud">SoundCloud</a>
                      </li>

                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="category_video">Video</a>
                      </li>

                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="category_vimeo-video">Vimeo Video</a>
                      </li>

                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="category_youtube-video">YouTube Video</a>
                      </li>
                    </ul>


                    <!-- Portfolio Grid -->
                    <div class="portfolio-grid two-columns shuffle">

                      <!-- Portfolio Item 1 -->
                      <figure class="item standard" data-groups='["category_all", "category_detailed"]'>
                        <div class="portfolio-item-img">
                          <img src="img\portfolio\1.jpg" alt="Full Project 2" title="">
                          <a href="portfolio-project-2.html" class="ajax-page-load"></a>
                        </div>

                        <i class="far fa-file-alt"></i>
                        <h4 class="name">Full Project 2</h4>
                        <span class="category">Detailed</span>
                      </figure>
                      <!-- /Portfolio Item 1 -->

                      <!-- Portfolio Item 2 -->
                      <figure class="item lbvideo" data-groups='["category_all", "category_video", "category_youtube-video"]'>
                        <div class="portfolio-item-img">
                          <img src="img\portfolio\2.jpg" alt="YouTube Video 2" title="">
                          <a href="https://www.youtube.com/embed/F-1weFCiYBA" class="lightbox mfp-iframe" title="YouTube Video 2"></a>
                        </div>

                        <i class="fab fa-youtube"></i>
                        <h4 class="name">YouTube Video 2</h4>
                        <span class="category">Video, YouTube Video</span>
                      </figure>
                      <!-- /Portfolio Item 2 -->

                      <!-- Portfolio Item 3 -->
                      <figure class="item lbimage" data-groups='["category_all", "category_image"]'>
                        <div class="portfolio-item-img">
                          <img src="img\portfolio\3.jpg" alt="Image 2" title="">
                          <a class="lightbox" title="Image 2" href="img\portfolio\full\3.jpg"></a>
                        </div>

                        <i class="fa fa-image"></i>
                        <h4 class="name">Image 2</h4>
                        <span class="category">Image</span>
                      </figure>
                      <!-- /Portfolio Item 3 -->

                      <!-- Portfolio Item 4 -->
                      <figure class="item lbaudio" data-groups='["category_all", "category_soundcloud"]'>
                        <div class="portfolio-item-img">
                          <img src="img\portfolio\4.jpg" alt="SoundCloud Audio 1" title="">
                          <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true" class="lightbox mfp-iframe" title="SoundCloud Audio 1"></a>
                        </div>

                        <i class="fas fa-volume-up"></i>
                        <h4 class="name">SoundCloud Audio 1</h4>
                        <span class="category">SoundCloud</span>
                      </figure>
                      <!-- /Portfolio Item 4 -->

                      <!-- Portfolio Item 5 -->
                      <figure class="item lbvideo" data-groups='["category_all", "category_video", "category_vimeo-video"]'>
                        <div class="portfolio-item-img">
                          <img src="img\portfolio\5.jpg" alt="Vimeo Video" title="">
                          <a href="https://player.vimeo.com/video/158284739" class="lightbox mfp-iframe" title="Vimeo Video"></a>
                        </div>

                        <i class="fab fa-vimeo-v"></i>
                        <h4 class="name">Vimeo Video</h4>
                        <span class="category">Video, Vimeo Video</span>
                      </figure>
                      <!-- /Portfolio Item 5 -->

                      <!-- Portfolio Item 6 -->
                      <figure class="item lbvideo" data-groups='["category_all", "category_video", "category_youtube-video"]'>
                        <div class="portfolio-item-img">
                          <img src="img\portfolio\6.jpg" alt="YouTube Video 1" title="">
                          <a href="https://www.youtube.com/embed/ZK8REu-8pGw" class="lightbox mfp-iframe" title="YouTube Video 1"></a>
                        </div>

                        <i class="fab fa-youtube"></i>
                        <h4 class="name">YouTube Video 1</h4>
                        <span class="category">Video, YouTube Video</span>
                      </figure>
                      <!-- /Portfolio Item 6 -->

                      <!-- Portfolio Item 7 -->
                      <figure class="item standard" data-groups='["category_all", "category_detailed"]'>
                        <div class="portfolio-item-img">
                          <img src="img\portfolio\7.jpg" alt="Full Project 1" title="">
                          <a href="portfolio-project-1.html" class="ajax-page-load"></a>
                        </div>

                        <i class="far fa-file-alt"></i>
                        <h4 class="name">Full Project 1</h4>
                        <span class="category">Detailed</span>
                      </figure>
                      <!-- /Portfolio Item 7 -->

                      <!-- Portfolio Item 8 -->
                      <figure class="item direct" data-groups='["category_all", "category_direct-url"]'>
                        <div class="portfolio-item-img">
                          <img src="img\portfolio\8.jpg" alt="Direct URL" title="">
                          <a target="_blank" href="https://themeforest.net/user/lmpixels/portfolio"></a>
                        </div>

                        <i class="fa fa-link"></i>
                        <h4 class="name">Direct URL</h4>
                        <span class="category">Direct URL</span>
                      </figure>
                      <!-- /Portfolio Item 8 -->

                      <!-- Portfolio Item 9 -->
                      <figure class="item lbimage" data-groups='["category_all", "category_image"]'>
                        <div class="portfolio-item-img">
                          <img src="img\portfolio\9.jpg" alt="Image 1" title="">
                          <a class="lightbox" title="Image 1" href="img\portfolio\full\5.jpg"></a>
                        </div>

                        <i class="fa fa-image"></i>
                        <h4 class="name">Image 1</h4>
                        <span class="category">Image</span>
                      </figure>
                      <!-- /Portfolio Item 9 -->
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
        r: '68e7b5ad0b65cb4e',
        m: '3g8FbA718ayK.RRePs_g7LHlUB5XTPg4d9ZD8yafjSA-1631602526-0-AS+vJ8sx1qx3G8rrNYi1Y95PbWUdxZiJfezVXkGry3lvetZaVOnJsu2QFZX5tvDvUhH4m0ThG8tIk61ZE/a7JlZE5P9lgkIgxtOzwYSLTI1D7y7XTIYegHT8v/2n1ESjQyIvEQsG7zwVud9h2c8hmQbkIwVkhKAdmzBvrFq0MqZ5LrevXxSGyO94DoY+oXOXpg==',
        s: [0x9803d29034, 0x534561948a],
        u: '/cdn-cgi/challenge-platform/h/g'
      }
    })();
  </script>
  <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"68e7b5ad0b65cb4e","version":"2021.8.1","r":1,"token":"94b99c0576dc45bf9d669fb5e9256829","si":10}'></script>
</body>

</html>