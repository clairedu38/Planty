<?php
// Template Name: Pre-commande
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
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/commande.css">
</head>

<?php
get_header();
?>

        <main class="commande-fond">
            <form class="commande">
                <h1>Commander</h1>
                <hr class="white-hr">
                <h3 class="commande-title">Votre commande</h3>
                <div class="image-gout">
                    <div class="quantite-produit">
                        <div class="image-fruit">
                            <img src="<?= get_stylesheet_directory_uri(); ?>/images/fraise.png" alt="fraise">
                            <div class="fruit-petit">FRAISE</div>
                        </div>
                        <input class="quantity" type="quantity" value="0">
                    </div>
                    <div class="quantite-produit">
                        <div class="image-fruit">
                            <img src="<?= get_stylesheet_directory_uri(); ?>/images/pamplemousse.png" alt="pamplemousse">
                            <div class="fruit-petit">PAMPLE<br>MOUSSE</div>
                        </div>
                        <input class="quantity" type="quantity" value="0">
                    </div>
                    <div class="quantite-produit">
                        <div class="image-fruit">
                            <img src="<?= get_stylesheet_directory_uri(); ?>/images/framboise.png" alt="framboise">
                            <div class="fruit-petit">FRAM<br>BOISE</div>
                        </div>
                        <input class="quantity" type="quantity" value="0">
                    </div>
                    <div class="quantite-produit">
                        <div class="image-fruit">
                            <img src="<?= get_stylesheet_directory_uri(); ?>/images/citron.png" alt="citron">
                            <div class="fruit-petit">citron</div>
                        </div>
                        <input class="quantity" type="quantity" value="0">
                    </div>
                </div>
                <hr class="white-hr">
                <div class="command-form">
                    <div class="colonne">
                        <div class="column1">
                            <h3 class="white-text">Vos informations</h3>
                            <label for="nom">Nom</label>
                            <input type="text" required>
                            <label for="nom">Prénom</label>
                            <input type="text" required>
                            <label for="nom">Email</label>
                            <input type="email" required>
                        </div>
                        <div class="column2">
                            <h3 class="white-text">Livraison</h3>
                            <label for="nom">Adresse de livraison</label>
                            <input type="text" required>
                            <label for="nom">Code postal</label>
                            <input type="text" required>
                            <label for="nom">Ville</label>
                            <input type="text" required>
                        </div>
                    </div>
                    <input type="submit" value="Commander" class="CTA">
                </div>
            </form>    

            <?php
    get_footer();