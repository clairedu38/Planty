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

// Ajout de la fonction de filtre pour personnaliser le menu
/*
function add_admin_link($items, $args) {
    if ($args->theme_location == 'header-menu' && is_user_logged_in()) {
        // Menu pour les utilisateurs connectés
        $items .= '<li><a href="' . esc_url(home_url('/mon-compte/')) . '">Mon Compte</a></li>';
        $items .= '<li><a href="' . wp_logout_url(home_url('/')) . '">Déconnexion</a></li>';
    } elseif ($args->theme_location == 'header-menu' && !is_user_logged_in()) {
        // Menu pour les utilisateurs non connectés
        $items .= '<li><a href="' . esc_url(home_url('/connexion/')) . '">Connexion</a></li>';
        $items .= '<li><a href="' . esc_url(home_url('/inscription/')) . '">Inscription</a></li>';
    }

    return $items;
}


add_filter('wp_nav_menu_items', 'custom_menu_items', 10, 2);
*/
        // FOOTER
function register_footer_menu() {
    register_nav_menu('footer-menu', __('Footer Menu'));
}
add_action('init', 'register_footer_menu');