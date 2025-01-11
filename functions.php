<?php
//funcao para carregar os arquivos de estilo e javascript
function load_scripts()
{
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), 1.0, 'all');
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'load_scripts');

//funcao para personalizar alguns campos no tema
function germanuslubs_config()
{
    register_nav_menus(
        array(
            'main_menu' => 'Menu Principal',
            'footer_menu' => 'Menu rodape'
        )
    );
}
add_action( 'after_setup_theme', 'germanuslubs_config' );


