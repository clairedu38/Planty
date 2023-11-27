
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

<body>
    <div class="main-container">
        <header>
            <div class="logo-header">
            <a href="<?php echo esc_url( home_url( '/accueil/' ) ); ?>"><img src="<?php echo get_field('logo','8')['url']; ?>" alt="Logo Planty"></a>
            </div>
            <nav>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container'      => false, // N'affiche pas le conteneur ul autour du menu
                        'menu_class'     => 'header-menu', // Ajoutez des classes supplémentaires au menu
                    ));               
                ?>
            </nav>
        </header>
