<?php
// Template Name: Nous rencontrer
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planty</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/nous-rencontrer.css">
</head>

<?php
get_header();
$imagefleur = get_field('image_de_fond');
$imagecanettes = get_field('image_de_bas_de_page');
$imagefeuillesbaies = get_field('image_decoration');
$imagefeuille = get_field('image_decoration_equipe');
$membre1 = get_field('membreequipe1');
$membre2 = get_field('membreequipe2');
$membre3 = get_field('membreequipe3');
?>
<main>
            <section class="banniere-accueil">
                <h1 class="titre_rose"><?php the_field('titre_principal_apropos'); ?></h1>
                <p><?php the_field('paragraphe'); ?></p> 
                <img src="<?php echo $imagefleur['url']; ?>" alt="<?php echo $imagefleur['alt']; ?>" class="fleur">
            </section>
        
            <div class="separateur"></div>

            <section>
                <h3><?php the_field('titre_equipe'); ?></h3>
                <div class="equipe">
                    <div class="column-equipe">
                    <img src="<?php echo esc_url( $membre1['image1']['url'] ); ?>" alt="<?php echo esc_attr( $membre1['image1']['alt'] ); ?>">
                        <h4><?php echo esc_html( $membre1['prenom'] ); ?></h4>
                        <p><?php echo esc_html( $membre1['fonction'] ); ?></p>
                    </div>
                    <div class="column-equipe">
                    <img src="<?php echo esc_url( $membre2['image']['url'] ); ?>" alt="<?php echo esc_attr( $membre2['image']['alt'] ); ?>">
                        <h4><?php echo esc_html( $membre2['prenom'] ); ?></h4>
                        <p><?php echo esc_html( $membre2['fonction'] ); ?></p>
                    </div>
                    <div class="column-equipe">
                    <img src="<?php echo esc_url( $membre3['image']['url'] ); ?>" alt="<?php echo esc_attr( $membre3['image']['alt'] ); ?>">
                        <h4><?php echo esc_html( $membre3['prenom'] ); ?></h4>
                        <p><?php echo esc_html( $membre3['fonction'] ); ?></p>
                    </div>
                <img src="<?php echo $imagefeuille['url']; ?>" alt="<?php echo $imagefeuille['alt']; ?>" class="feuille2">
                </div>
            </section>
        
            <section class="section-formulaire-contact">
                <img src="<?php echo $imagefeuillesbaies['url']; ?>" alt="<?php echo $imagefeuillesbaies['alt']; ?>" class="feuillebaie">
                <h3><?php the_field('titre_contact'); ?></h3>
                <?php echo do_shortcode( '[contact-form-7 id="9e5a911" title="Nous contacter"]' ); ?>
                <img src="<?php echo $imagecanettes['url']; ?>" alt="<?php echo $imagecanettes['alt']; ?>" class="image-bas-page">
            </section> 

<?php
    get_footer();