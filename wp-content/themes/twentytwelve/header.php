<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
    <?php wp_head(); ?>
    <link rel="stylesheet/less" href="<?php echo get_template_directory_uri(); ?>/css/jp_styles.less">
</head>

<body <?php body_class(); ?>>
    <?php include_once("analyticstracking.php") ?>
    <div class="jp_main_container">
        <div class="container">
            <div class="row jp_wrapper">

                <div class="">
                    <div class="">
                        <div class="top_banner">
                            <?php //bloginfo('name') ?>
                            <?php
                            $title = bloginfo('name');
                            echo $title
                            ?>
                        </div>
                    </div>
                </div>

                <div class="main_content">
                    <div class="this_banner_bottom">
                        <div class="banner_bottom">
                            <?php //bloginfo('name')?>
                            <?php// bloginfo('rss2_url')?>
                        </div>
                    </div>
                    <div class="navbar navbar-inverse main_nav_bar">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <?php wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class' => 'nav',
                            'container_class' => 'nav-collapse collapse'
                        )); ?>
                        </div>
                    </div> <?php // end of navbar?>
                    <div class="mid_banner">
                        <?php
                        echo do_shortcode("
                            [easingslider]
                        ") //banner sliding
                        ?>
                    </div>
                    <div class="row">
