<header id="site_header" class="header">
    <div class="header-content clearfix">

        <!-- Text Logo -->
        <div class="text-logo">
            <a href="index.php">
                <div class="logo-symbol"><?php echo strtoupper($general_settings['name_surname'][0]) ?? '' ?></div>
                <div class="logo-text"><span><?php echo $general_settings['name_surname'] ?? '' ?></span></div>
            </a>
        </div>
        <!-- /Text Logo -->

        <?php require_once('menu.php'); ?>

        <!-- Mobile Menu Toggle -->
        <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
        </a>
        <!-- Mobile Menu Toggle -->
    </div>
</header>