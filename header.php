<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
        <nav class="probootstrap-nav">
      <ul>
        <li class="probootstrap-animate active" ><a href="index.html">Home</a></li>
        <li class="probootstrap-animate" ><a href="about.html">About</a></li>
        <li class="probootstrap-animate" ><a href="services.html">Services</a></li>
        <li class="probootstrap-animate" ><a href="portfolio.html">Portfolio</a></li>
        <li class="probootstrap-animate" ><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
        </header>