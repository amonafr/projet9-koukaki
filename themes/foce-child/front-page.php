<?php

get_header();
?>

    <main id="primary" class="site-main">
        <!-- <section class="banner"> -->
        <section class="bannerVideo">
             <!-- video dans le hero header -->
            <div class="videoContainer">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>" alt="Bannière" class="videoContainer__heroImage">
                    <video autoplay muted loop class="videoContainer__heroVideo" poster="<?php echo get_template_directory_uri() .'/assets/images/banner.png'; ?>">
                        <source src="<?php echo get_stylesheet_directory_uri() .'/video/video-animantion-kookaki.mp4'; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="videoContainer__logo" data-0="transform:translateY(10%)"
                        data-20p="transform:translateY(30%)"
                        data-40p="transform:translateY(50%)"
                        data-50p="transform:translateY(60%)"
                        data-60p="transform:translateY(70%)">
                        <img class="videoContainer__logo--Image" 
                        src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                    </div>           
              </div>            
            </section>
        
        <section id="#story" class="story">
            <h2><span class="titre">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            
                <?php get_template_part('templates-parts/slidertemplate'); ?>
           
            <article id="place">
                <div>
                    <h3><span class="titre">Le Lieu </span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <div id="place__grandNuage" class="grandNuage"></div>
                    <div id="place__petitNuage" class="petitNuage" > </div>
                </div>
                
            </article>
        </section>

        <section id="studio" classe="studio">
            <h2><span class="titre">Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        <?php get_template_part('templates-parts/nomination'); ?>
    </main><!-- #main -->

<?php
get_footer();
