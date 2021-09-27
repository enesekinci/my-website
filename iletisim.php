<?php
$database_host = "localhost";
$database_name = "my_website";
$database_user = "root";
$database_password = "";
$database = new PDO("mysql:host=" . $database_host . ";dbname=" . $database_name . ";charset=utf8", $database_user, $database_password);
$general_settings = $database->query("SELECT * FROM general_settings WHERE id = 1")->fetch(PDO::FETCH_ASSOC);
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
              <h1>İletişim</h1>
              <div class="page-subtitle">
                <h4> Benimle İletişim Kurun</h4>
              </div>
            </div>

            <div id="content" class="page-content site-content single-post" role="main">

              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <div id="map" class="map"></div>
                </div>
              </div>

              <div class="row">
                <div class=" col-xs-12 col-sm-4 ">

                  <div id="info_list_1" class="info-list-w-icon">

                    <div class="info-block-w-icon">
                      <div class="ci-icon">
                        <i class="linecons linecons-phone"></i>
                      </div>
                      <div class="ci-text">
                        <h4><a href="tel:+<?= $general_settings['phone'] ?? '' ?>">+<?= $general_settings['phone'] ?? '' ?></a></h4>
                      </div>
                    </div>

                    <div class="info-block-w-icon">
                      <div class="ci-icon">
                        <i class="linecons linecons-location"></i>
                      </div>
                      <div class="ci-text">
                        <h4><?= $general_settings['address'] ?? '' ?></h4>
                      </div>
                    </div>

                    <div class="info-block-w-icon">
                      <div class="ci-icon">
                        <i class="linecons linecons-mail"></i>
                      </div>
                      <div class="ci-text">
                        <h4><a href="mailto:<?= $general_settings['email'] ?? '' ?>"><?= $general_settings['email'] ?? '' ?></a></h4>
                      </div>
                    </div>
                  </div>

                </div>


                <div class=" col-xs-12 col-sm-8 ">

                  <div class="block-title">
                    <h2>How Can I Help You?</h2>
                  </div>

                  <form id="contact_form" class="contact-form" action="contact_form/contact_form.php" method="post">

                    <div class="messages"></div>

                    <div class="controls two-columns">
                      <div class="fields clearfix">
                        <div class="left-column">
                          <div class="form-group form-group-with-icon">
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                            <div class="form-control-border"></div>
                            <div class="help-block with-errors"></div>
                          </div>

                          <div class="form-group form-group-with-icon">
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                            <div class="form-control-border"></div>
                            <div class="help-block with-errors"></div>
                          </div>

                          <div class="form-group form-group-with-icon">
                            <input id="form_name" type="text" name="subject" class="form-control" placeholder="Subject" required="required" data-error="Subject is required.">
                            <div class="form-control-border"></div>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="right-column">
                          <div class="form-group form-group-with-icon">
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                            <div class="form-control-border"></div>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                      </div>

                      <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-theme="dark"></div>

                      <input type="submit" class="button btn-send disabled" value="Send message">
                    </div>
                  </form>

                </div>


              </div>

            </div>
          </div>
        </div>
      </div>

      <?php require_once('tema/footer.php'); ?>

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