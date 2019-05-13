<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Bitter:400,700%7CPT+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/site.webmanifest">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
    <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <h1 class="navbar__title">
                <a href="#" class="logolink">Skogsföretaget AB
                <span><img src="<?php bloginfo('template_directory'); ?>/img/icon/tree_final.svg" class="navbar__title-icon" alt="Skogsföretagets symbol i form av ett träd"></span>
                </a>
            </h1>
            <?php 
            wp_nav_menu(array( 'theme_location' => 'main-menu' ));
            ?>
        </nav>
    </header>