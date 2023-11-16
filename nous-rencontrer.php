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
?>
<main>
            <section class="banniere-accueil">
                <h1 class="titre_rose">Nous rencontrer</h1>
                <p>Chez Planty nous sommes tous passionnés par le bien-être, et ça se retrouve dans nos boissons ! Notre start-up s’est construite au fur et à mesure de rencontres entre amoureux des plantes.</p> 
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/fleur.png" alt="fleur" class="fleur">
            </section>
        
            <div class="separateur"></div>

            <section>
                <h3>L'équipe</h3>
                <div class="equipe">
                    <div class="column-equipe">
                        <img src="<?= get_stylesheet_directory_uri(); ?>/images/Megane.png" alt="femme">
                        <h4>Mégane</h4>
                        <p>CEO</p>
                    </div>
                    <div class="column-equipe">
                        <img src="<?= get_stylesheet_directory_uri(); ?>/images/Brooke.png" alt="homme">
                        <h4>Brooke</h4>
                        <p>Nutritionniste</p>
                    </div>
                    <div class="column-equipe">
                        <img src="<?= get_stylesheet_directory_uri(); ?>/images/Sylvie.png" alt="femme souriante">
                        <h4>Sylvie</h4>
                        <p>Mixologue</p>
                    </div>
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/Feuille 2.png" alt="feuille2" class="feuille2">
                </div>
            </section>
        
            <section class="section-formulaire-contact">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/feuille baie.png" alt="feuille et baies" class="feuillebaie">
                <h3>Nous contacter</h3>
                <form action="votre_script.php" method="post">
                    <div class="formulaire-contact">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" required>
            
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
            
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <input class="CTA" type="submit" value="Envoyer">
                </form>
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/canettes_bas_de_page.svg" alt="canettes planty" class="full-width-image">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/feuille baie.png" alt="feuille et baies" class="feuillebaie">
            </section>

<?php
    get_footer();