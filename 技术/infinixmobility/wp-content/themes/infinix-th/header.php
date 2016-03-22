<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Infinix
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.png">
<link href="<?php bloginfo( 'template_url' ); ?>/js/slick/slick.css" rel="stylesheet">
<link href="<?php bloginfo( 'template_url' ); ?>/style.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll">

    <header class="header">

    <nav class="navbar">

        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-main">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo site_url(); ?>" class="navbar-brand"><img class="rpd-image" data-src="<?php echo theme_image_url() ?>logo-m.png" data-src-d="<?php echo theme_image_url() ?>logo.png" alt="Infinix"></a>
            </div>

            <div class="collapse navbar-collapse" id="nav-main">

                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ZERO</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a role="menuitem" tabindex="-1" href="<?php echo site_url(); ?>/smartphone/zero-2-lte/">ZERO 2 Lte</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">NOTE</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a role="menuitem" tabindex="-1" href="<?php echo site_url(); ?>/smartphone/hot-note/">HOT NOTE</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">อุปกรณ์เสริม</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a role="menuitem" tabindex="-1" href="<?php echo site_url(); ?>/acc/hot-note-case/">HOT NOTE อุปกรณ์เสริม</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url(); ?>/xui/">XUI</a></li>
                    <li><a href="http://bbs.infinixmobility.com">X-CLUB</a></li>
                    <li><a href="<?php echo site_url(); ?>/support/">SUPPORT</a></li>
                </ul>
            </div>

        </div>

    </nav>

</header>
