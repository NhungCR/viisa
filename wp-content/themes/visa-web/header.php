<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package visa-web
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'visa-web'); ?></a>

        <header id="masthead" class="site-header">
            <div class="site-branding">
                <div class="top-header">
                    <div class="container">
                        <div class="badge-since">
                            <span>Providing Vietnam visa on arrival</span>
                            <img src="<?php bloginfo('template_url'); ?>/images/since.png">
                        </div>
                        <div class="phone">
                            <a title="Hotline in Vietnam" href="tel:+84.327.117.119"><img
                                    src="<?php bloginfo('template_url'); ?>/images/Vietnam.png"> +84.83 288 5670</a>
                            <a title="Hotline in Australia" href="tel:+61.739.111.379"><img
                                    src="<?php bloginfo('template_url'); ?>/images/Australia.png"> +84.83 288 5670</a>
                            <a title="Toll free" href="tel:+1.800.642.1567"><img
                                    src="<?php bloginfo('template_url'); ?>/images/United States.png">
                                    +84.83 288 5670</a>
                        </div>
                        <div class="top-header-right">
                            <a title="Sign in" href="sign-in">Sign In</a>
                            <a title="Check Visa Status" href="check-visa-status">Check Visa Status</a>
                            <a title="Download Visa Application Forms" href="where-can-i-download-a-visa-application-form">Download Forms</a>
                            <a title="Help & Support" href="contact">Help & Support</a>
                        </div>
                    </div>
                </div>
            </div><!-- .site-branding -->
            <div class="center-header">
                <div class="container">
                    <div class="logo">
                        <a href="home" class="logo-item"><img
                                src="<?php bloginfo('template_url'); ?>/images/vietnam-visa-logo.png"></a>
                        <div class="logo-item logo-2"><img
                                src="<?php bloginfo('template_url'); ?>/images/customer-rating.png"></div>
                        <div class="logo-item topcontact">
                            <span class="label">CALL US:</span>
                            <a href="tel:+84.83.288.5670">+84.83 288 5670</a>
                        </div>
                        <div class="logo-item search-bar">
                            <form action="" id="form-site-seach" method="GET">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control input-site-seach"
                                        placeholder="Search for visa information">
                                    <button class="btn btn-default btn-site-search" type="button"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </form>
                            <div class="current-time">Time at Vietnam (UTC+07:00) 07:36 PM Saturday, 02 Nov 2019</div>
                            <script>
                            document.getElementsByClassName('current-time')[0].innerHTML = `${new Date()}`
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <nav id="site-navigation" class="main-navigation">

                <div class="container">
                    <?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					));
					?>
                </div>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->

        <div class="header-sm">
            <div class="navbar-header">
                <button onclick="ToggleMenu()" type="button" id="sidebarCollapse"><i class="fas fa-bars"></i></button>
                <a href="#" class="navbar-brand"><img
                        src="<?php bloginfo('template_url'); ?>/images/m.vietnam-visa-logo.png"></a>
            </div>
            <div class="navbar-menu-toggle">
                <ul>
                    <li>
                        <a href="tel:+84.327.117.119">+84.83 288 5670</a>
                    </li>
                    <li>
                        <a href="mailto:visa@vietnamvisa-online.org.vn">visa@vietnamvisa-online.org.vn</a>
                    </li>
                    <li>
                        <a href="#">Sign In</a>
                    </li>
                    <?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					));
					?>
                </ul>
            </div>
        </div>

        <div id="content" class="site-content">