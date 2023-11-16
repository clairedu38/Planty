<body>
    <div class="main-container">
        <header>
            <div class="logo-header">
            <a href="<?php echo esc_url( home_url( '/accueil/' ) ); ?>"><img src="<?= get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="Logo Planty"></a>
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
