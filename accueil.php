<?php
// Template Name: Accueil 
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
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/accueil.css">
</head>

<?php
get_header();
$imageaccueil = get_field('image_de_la_banniere');
?>
       <main>
            <section class="banniere-accueil">
                <h1 class="text-center"><?php the_field('titre_banniere_accueil'); ?></h1>
                <img src="<?php echo $imageaccueil['url']; ?>" alt="<?php echo $imageaccueil['alt']; ?>">   
            </section>
        
            <div class="separator-rounded"></div>

            <section class="description-planty">
                <h3><?php the_field('titre_presentation_planty'); ?></h3>
                <p> <?php the_field('paragraphe_presentation_planty'); ?></p>
            </section>

<?php
$produits = get_field('galerie_produit');
?>

            <section class="gouts">
                <h2><?php the_field('titre_partie_produits'); ?></h2>
                <p><?php the_field('sous-titre_partie_produits'); ?></p>
                <div class="image-grid">
                    <div class="image-box">
                        <img src="<?php echo esc_url($produits['image_1']['url']); ?>" alt="fraises">
                        <div class="fruit">FRAISE</div>
                    </div>
                    <div class="image-box">
                        <img src="<?= get_stylesheet_directory_uri(); ?>/images/pamplemousse.png" alt="pamplemousse">
                        <div class="fruit">PAMPLE<br>MOUSSE</div>
                    </div>
                </div>
                <div class="image-grid">
                    <div class="image-box">
                        <img src="<?= get_stylesheet_directory_uri(); ?>/images/framboise.png" alt="framboises">
                        <div class="fruit">FRAM<br>BOISE</div>
                    </div>
                    <div class="image-box">
                        <img src="<?= get_stylesheet_directory_uri(); ?>/images/citron.png" alt="citrons">
                        <div class="fruit">CITRON</div>
                    </div>
                </div>
                <a href="nom_du_bouton"><button class="CTA"><?php the_field('nom_du_bouton'); ?></button></a>
            </section>
        
            <div class="separateur"></div>

            <section class="section_avis">
                <h2><?php the_field('titre_de_la_partie_avis'); ?></h2>
                <div class="avis">
                    <div class="avis_unique">
                        <div class="avis_image">
                        <img src="<?= get_stylesheet_directory_uri(); ?>/images/fatiha.png" alt="Jeune femme souriante">
                        </div>
                        <div class="avis_personne">
                            <h3>Fatiha</h3>
                            <p>La meilleure boisson énergisante disponible sur le marché !</p>
                        </div>
                    </div>
                    <div class="avis_unique">
                        <div class="avis_image">
                        <img src="<?= get_stylesheet_directory_uri(); ?>/images/vero.png" alt="Jeune femme avec enfant">
                        </div>
                        <div class="avis_personne">
                            <h3>Véro</h3>
                            <p>blablabla</p>
                        </div>
                    </div>
                    <div class="avis_unique">
                        <div class="avis_image">
                        <img src="<?= get_stylesheet_directory_uri(); ?>/images/marc.png" alt="Jeune homme souriant">
                        </div>
                        <div class="avis_personne">
                            <h3>Marc</h3>
                            <p>blablabla</p>
                        </div>
                    </div>
                </div>
            </section>
            <img src="<?= get_stylesheet_directory_uri(); ?>/images/canettes_bas_de_page.svg" alt="canettes planty" class="full-width-image">
        
<?php
    get_footer();