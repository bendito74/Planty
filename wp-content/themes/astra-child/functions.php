<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

/* Ajouter un lien "Admin" dans le menu de navigation pour les utilisateurs connectés*/
function ajouter_lien_admin_menu( $items, $args ) {
    if ( is_user_logged_in() && isset( $args->theme_location ) && $args->theme_location === 'primary' ) {
        // Construire le lien "Admin"
        $admin_link = '<li><a href="' . admin_url() . '" class="adminButton">Admin</a></li>';
        // Ajouter le lien à la fin du menu
        $items .= $admin_link;
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2 );
?>
