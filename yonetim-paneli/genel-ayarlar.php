<?php
error_reporting(E_ALL);

require('helper/functions.php');

$database_host = "localhost";
$database_name = "my_website";
$database_user = "root";
$database_password = "";

$database = new PDO("mysql:host=" . $database_host . ";dbname=" . $database_name . ";charset=utf8", $database_user, $database_password);
$general_settings = $database->query("SELECT * FROM general_settings WHERE id = 1")->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['submit'])) {
    $name_surname = $_POST['name_surname'];
    $job = $_POST['job'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $about_me = $_POST['about_me'];
    $profile_photo = $general_settings['profile_photo']; // eski ismi burdan geliyor yani yukarından databaseden (veritabanı)
    $cv = $general_settings['cv'];
    $email = $_POST['email'];
    $email_host = $_POST['email_host'];
    $email_port = $_POST['email_port'];
    $email_password = $_POST['email_password'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $gitlab = $_POST['gitlab'];
    $youtube = $_POST['youtube'];

    if (!empty($_FILES['profile_photo']['tmp_name'])) {

        $image_type = $_FILES['profile_photo']['type'];

        $image_type = explode('/', $image_type)[1];

        // time() -> o anki tarihin unix değeri yani sayısal bir değer verir.
        $new_name = time() . "." . $image_type;

        $path = "assets/website/profile_photo/";

        $record_profile_photo_result = move_uploaded_file($_FILES['profile_photo']['tmp_name'], $path . $new_name);

        if ($record_profile_photo_result) {
            // burada eski dosya silinebilir.
            if (file_exists($path . $profile_photo)) {
                unlink($path . $profile_photo);
            }
            $profile_photo = $new_name;
        }
    }

    if (!empty($_FILES['cv']['tmp_name'])) {

        $cv_type = $_FILES['cv']['type'];

        $cv_type = explode('/', $cv_type)[1];

        // time() -> o anki tarihin unix değeri yani sayısal bir değer verir.
        $new_name = time() . "." . $cv_type;

        $path = "assets/website/cv/";

        $record_cv_result = move_uploaded_file($_FILES['cv']['tmp_name'], $path . $new_name);

        if ($record_cv_result) {
            // burada eski dosya silinebilir.
            if (file_exists($path . $cv)) {
                unlink($path . $cv);
            }
            $cv = $new_name;
        }
    }

    $query = $database->prepare("UPDATE general_settings SET name_surname = ?, phone = ?, address = ?, 
                                    about_me = ?, profile_photo = ?, cv = ?, email = ?, email_host = ?, 
                                    email_port = ?, email_password = ?, facebook = ?, instagram = ?, 
                                    twitter = ?, linkedin = ?, github = ?, gitlab = ?, youtube = ?, job = ?
                                    WHERE id = 1");
    $result = $query->execute(array(
        $name_surname, $phone, $address, $about_me, $profile_photo,
        $cv, $email, $email_host, $email_port, $email_password, $facebook,
        $instagram, $twitter, $linkedin, $github, $gitlab, $youtube, $job
    ));

    // $query = $database->prepare("INSERT INTO general_settings SET name_surname = ?, phone = ?, address = ?, about_me = ?, profile_photo = ?, cv = ?, email = ?, email_host = ?, email_port = ?, email_password = ?, facebook = ?, instagram = ?, twitter = ?, linkedin = ?, github = ?, gitlab = ?, youtube = ?");

    if ($result) {
        $last_id = $database->lastInsertId();
        print "insert işlemi başarılı! , $last_id";
        header('location:genel-ayarlar.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">



</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <?php require_once 'tema/menu.php'; ?>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="assets/images/logo.png" alt="" class="logo">
                <img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                    <div class="search-bar">
                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


    </header>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Sample Page</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Sample Page</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ form-element ] start -->
                <form id="general_setting_form" method="POST" action="" enctype="multipart/form-data">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Genel Ayarlar</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name_surname">Ad Soyad</label>
                                            <input type="text" class="form-control" id="name_surname" name="name_surname" placeholder="Ad Soyad" value="<?php echo $general_settings['name_surname'] ?? null; ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="job">İş - Ünvan</label>
                                            <input type="text" class="form-control" id="job" name="job" placeholder="İş - Ünvan" value="<?php echo $general_settings['job'] ?? null; ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Telefon</label>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefon" value="<?php echo $general_settings['phone'] ?? null; ?>" required>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Parola</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Parola">
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Adres</label>
                                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Adres"><?php echo $general_settings['address'] ?? null; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="about_me">Hakkımda Özet</label>
                                            <textarea class="form-control" id="about_me" name="about_me" rows="3" placeholder="Hakkımda Özet"><?php echo $general_settings['about_me'] ?? null; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="profile_photo">Profil Fotoğrafı</label>
                                            <input type="file" class="form-control" id="profile_photo" name="profile_photo" placeholder="Profil Fotoğrafı">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cv">CV Yükle</label>
                                            <input type="file" class="form-control" id="cv" name="cv" placeholder="CV Yükle">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5>E-posta (SMTP) Ayarları</h5>
                            </div>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="email">E-posta</span>
                                            </div>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="E-posta" aria-label="E-posta" aria-describedby="email" value="<?php echo $general_settings['email'] ?? null; ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="email_host">Sunucu</span>
                                            </div>
                                            <input type="text" class="form-control" id="email_host" name="email_host" placeholder="Sunucu" aria-label="Sunucu" value="<?php echo $general_settings['email_host'] ?? null; ?>" aria-describedby="email_host">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="email_port">Port</span>
                                            </div>
                                            <input type="text" class="form-control" id="email_port" name="email_port" placeholder="Port" value="<?php echo $general_settings['email_port'] ?? null; ?>" aria-label="Port" aria-describedby="email_port">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="email_password">E-posta Parola</span>
                                            </div>
                                            <input type="text" class="form-control" id="email_password" name="email_password" value="<?php echo $general_settings['email_password'] ?? null; ?>" placeholder="E-posta Parola" aria-label="E-posta Parola" aria-describedby="basic-addon1">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <!-- Input group -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Sosyal Medya Hesapları</h5>
                            </div>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="facebook">Facebook</span>
                                            </div>
                                            <input type="text" class="form-control" id="facebook" value="<?php echo $general_settings['facebook'] ?? null; ?>" name="facebook" placeholder="Facebook" aria-label="Facebook" aria-describedby="facebook">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="instagram">Instagram</span>
                                            </div>
                                            <input type="text" class="form-control" id="instagram" value="<?php echo $general_settings['instagram'] ?? null; ?>" name="instagram" placeholder="Instagram" aria-label="Instagram" aria-describedby="instagram">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="twitter">Twitter</span>
                                            </div>
                                            <input type="text" class="form-control" id="twitter" value="<?php echo $general_settings['twitter'] ?? null; ?>" name="twitter" placeholder="Twitter" aria-label="Twitter" aria-describedby="twitter">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="linkedin">Linkedin</span>
                                            </div>
                                            <input type="text" class="form-control" id="linkedin" value="<?php echo $general_settings['linkedin'] ?? null; ?>" name="linkedin" placeholder="Linkedin" aria-label="Linkedin" aria-describedby="linkedin">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="github">Github</span>
                                            </div>
                                            <input type="text" class="form-control" id="github" value="<?php echo $general_settings['github'] ?? null; ?>" name="github" placeholder="Github" aria-label="Github" aria-describedby="github">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="gitlab">Gitlab</span>
                                            </div>
                                            <input type="text" class="form-control" id="gitlab" value="<?php echo $general_settings['gitlab'] ?? null; ?>" name="gitlab" placeholder="Gitlab" aria-label="Gitlab" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="youtube">Youtube</span>
                                            </div>
                                            <input type="text" class="form-control" id="youtube" value="<?php echo $general_settings['youtube'] ?? null; ?>" name="youtube" placeholder="Youtube" aria-label="Youtube" aria-describedby="youtube">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <button type="submit" class="btn  btn-primary" name="submit" value="record">Kaydet</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- [ form-element ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/menu-setting.min.js"></script>



</body>

</html>