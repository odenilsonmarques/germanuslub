<?php

require_once get_template_directory() . '/inc/customizer.php';

// Bootstrap Navwalker 
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


//funcao para carregar os arquivos de estilo e javascript
function load_scripts()
{
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), 1.0, 'all');
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
    wp_enqueue_script('menu-offcanvas', get_template_directory_uri() . '/assets/js/script-menu-offcanva.js');
}
add_action('wp_enqueue_scripts', 'load_scripts');

//funcao para personalizar alguns campos no tema
function germanuslubs_config()
{
    register_nav_menus(
        array(
            'main_menu' => 'Menu Principal',
            'footer_menu' => 'Menu rodape',
            'mobile_menu' => 'Menu Mobile'

        )
    );

    add_theme_support( 'post-thumbnails');
}
add_action('after_setup_theme', 'germanuslubs_config');


// cpt para Serviços
function register_services_cpt()
{
    $labels = [
        'name'               => 'Serviços',
        'singular_name'      => 'Serviço',
        'menu_name'          => 'Serviços',
        'name_admin_bar'     => 'Serviço',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Serviço',
        'new_item'           => 'Novo Serviço',
        'edit_item'          => 'Editar Serviço',
        'view_item'          => 'Ver Serviço',
        'all_items'          => 'Todos os Serviços',
        'search_items'       => 'Pesquisar Serviços',
        'not_found'          => 'Nenhum serviço encontrado',
        'not_found_in_trash' => 'Nenhum serviço encontrado na lixeira',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => ['slug' => 'servicos'],
        'supports'           => ['title', 'editor', 'thumbnail'],
        'menu_icon'          => 'dashicons-admin-tools',
    ];

    register_post_type('services', $args);
}
add_action('init', 'register_services_cpt');


// cpt para adicionar campo URL personalizado nos serviços
function servicos_add_custom_meta_box() {
    add_meta_box(
        'servico_page_url',
        'URL da Página do Serviço',
        'servicos_page_url_callback',
        'services', // <-- corrige aqui
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'servicos_add_custom_meta_box');

function servicos_page_url_callback($post) {
    $value = get_post_meta($post->ID, '_service_page_url', true);
    echo '<input type="text" name="service_page_url" value="' . esc_attr($value) . '" style="width:100%" placeholder="https://seudominio.com.br/coleta-de-oleo-mineral/">';
}

function servicos_save_meta_box($post_id) {
    if (array_key_exists('service_page_url', $_POST)) {
        update_post_meta(
            $post_id,
            '_service_page_url',
            sanitize_text_field($_POST['service_page_url'])
        );
    }
}
add_action('save_post', 'servicos_save_meta_box');



