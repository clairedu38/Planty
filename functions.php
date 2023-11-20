<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/style.css', array(), filemtime(get_stylesheet_directory() . '/css/style.css'));
    wp_enqueue_style('accueil-style', get_stylesheet_directory_uri() . '/css/accueil.css', array(), filemtime(get_stylesheet_directory() . '/css/accueil.css'));
}


        // MENU HEADER 

// enregistrer un emplacement de menu
function register_header_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
}
// Action pour ajouter l'emplacement de menu à WordPress
add_action('init', 'register_header_menu');


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
function register_footer_menu() {
    register_nav_menu('footer-menu', __('Footer Menu'));
}
add_action('init', 'register_footer_menu');

// supprimer paragraphe ajouté par CF7

add_filter('wpcf7_autop_or_not', '__return_false');