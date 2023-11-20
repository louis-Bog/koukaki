<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

 ?>
 <!doctype html>
 <html <?php language_attributes(); ?>>
 <head>
     <meta charset="<?php bloginfo( 'charset' ); ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="profile" href="https://gmpg.org/xfn/11">
     <?php wp_head(); ?>
 </head>
 
 <body <?php body_class(); ?>>
 <?php wp_body_open(); ?>
 <div id="page" class="site">
     <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>
 
     <header id="masthead" class="site-header">
         <nav id="site-navigation" class="main-navigation">
             <!--Mise en place du menu burger-->
             <div class="titre-site">
                 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
             </div>
             <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                 <div class="burger">
                 <span class="line"></span>
                 </div>
             </button>
 
             <ul class="menu">
             <img class="logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/petit-logo.png'; ?> "alt="logo pour menu">
                 <li><a href="#story">Histoire</a></li>
                 <li><a href="#characters">Personnages</a></li>
                 <li><a href="#place">Lieu</a></li>
                 <li><a href="#studio">Studio Koukaki</a></li>
 
             <img class= "fleur-blanche" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'; ?> "alt="fleur">
             <img class= "hibiscus" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Hibiscus.png'; ?> "alt="fleur">
             <img class= "fleur-orange" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'; ?> " alt="fleur">
             <img class= "orchid" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?> "alt="fleur">
             <img class= "fleur-violette" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'; ?> "alt="fleur">
 
             <img class= "chat-noir" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/blackCat.png'; ?> "alt="chat">
             <img class= "chat-bleu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/blueCat.png'; ?> "alt="chat">
             <img class= "chat-orange" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orangeCat.png'; ?> "alt="chat">
 
             <div class="footer-nav">
                  <a href="#"> STUDIO KOUKAKI </a>
             </div>   
             </ul>
 
         </nav><!-- #site-navigation -->
     </header><!-- #masthead -->