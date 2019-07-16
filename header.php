<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/owl.carousel.min.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/animate.min.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/art-projekt.css"/>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>
	<body>
        <div id="preloader">
            <div class="loader"></div>
        </div>

        <!-- main-warp -->
        <div class="main-warp">
            <header class="header-section">
                <div class="header-close">
                    <i class="fa fa-times"></i>
                </div>
                <div class="header-warp">
                    <a href="<?php echo home_url(); ?>" class="site-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
                    </a>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-icon.png" alt="Menu" class="menu-icon">

                    <?php wp_nav_menu(['menu_class' => 'main-menu', 'container' => 'ul']); ?>

                    <?php if (get_theme_mod('ap-social-visible')): ?>
                        <div class="social-links-warp">
                            <div class="social-links">
                                <?php if ($facebookUrl = get_theme_mod('ap-social-facebook')): ?>
                                    <a href="<?php echo $facebookUrl ?>"><i class="fa fa-facebook"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="copyright">Colorlib 2018  @ All rights reserved</div>
            </header>
