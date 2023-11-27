<?php

// Action qui permet de charger des scripts dans notre thème
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/style.css', array(), filemtime(get_stylesheet_directory() . '/css/style.css'));
        // chargement du style accueil.css uniquement sur la page d'accueil
    if (is_page('accueil')) {
        wp_enqueue_style('accueil-style', get_stylesheet_directory_uri() . '/css/accueil.css', array(), filemtime(get_stylesheet_directory() . '/css/accueil.css'));
    };
        // style nous-rencontrer.css uniquement sur la page 'Nous Rencontrer'
    if (is_page('nous-rencontrer')) {
        wp_enqueue_style('nous-rencontrer-style', get_stylesheet_directory_uri() . '/css/nous-rencontrer.css', array(), filemtime(get_stylesheet_directory() . '/css/nous-rencontrer.css'));
    };
        // style commande.css uniquement sur la page 'Precommandes'
    if (is_page('precommandes')) {
        wp_enqueue_style('precommande-style', get_stylesheet_directory_uri() . '/css/commande.css', array(), filemtime(get_stylesheet_directory() . '/css/commande.css'));
    };
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

        // MENU HEADER 

// Enregistrer un emplacement de menu
function register_header_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
}
// Action pour ajouter l'emplacement de menu à WordPress
add_action('init', 'register_header_menu');

// Ajouter l'élément de menu "Admin"
function ajouter_menu_administration($items, $args) {
    // Vérifiez si l'utilisateur est connecté et s'il a des capacités d'administration
    if (is_user_logged_in() && $args->theme_location == 'header-menu') {
        // Ajoutez l'élément de menu personnalisé avec un lien vers le back office
        $items .= '<li class="admin-menu"><a href="' . admin_url() . '">Admin</a></li>';
    }

    return $items;
}

// Ajoutez le filtre pour exécuter la fonction lorsque le menu est généré
add_filter('wp_nav_menu_items', 'ajouter_menu_administration', 10, 2);


        // FOOTER
// Enregistrer un emplacement de menu pour le footer
function register_footer_menu() {
    register_nav_menu('footer-menu', __('Footer Menu'));
}
add_action('init', 'register_footer_menu');

// supprimer paragraphe ajouté par CF7
add_filter('wpcf7_autop_or_not', '__return_false');