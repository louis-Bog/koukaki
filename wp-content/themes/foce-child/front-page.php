<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video id="back-video" autoplay loop muted>
            <source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/video.mp4' ; ?> " type="video/mp4">
        </video>
        <img class="animation-title" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?> " alt="Logo Fleurs d'oranger & chats errants">
        </section>

        <section id="#story" class="story">
            <h2 class="animation-title">L'histoire</h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            
            <!-- Mise en place caroussel-->
           <?php get_template_part ("section-carrousel")?>

            <article id="place">
                <div>
                    <h3 class="animation-title">Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <img class= "big-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?> " alt="gros nuage">
                <img class= "little-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?> " alt="petit nuage">
            </article>
        </section>


        <section id="studio">
            <h2 class="animation-title">Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

             <!--Ajout de la section nomination-->
             <?php get_template_part ("section-nomination")
            ?>

            
    </main><!-- #main -->

<?php
get_footer();
