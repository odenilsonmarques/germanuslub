<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>


    <meta name="description" content="Coletamos e reciclamos óleo mineral, hidráulico e diesel com eficiência e segurança. Torne sua empresa sustentável e em conformidade com as normas ambientais. Fale conosco agora!">

    <meta name="keywords" content="coleta de óleo usado, reciclagem de óleo lubrificante, descarte correto de óleo, logística reversa de óleo, coleta de óleo automotivo, reciclagem de óleo industrial, gestão sustentável de resíduos, economia circular, normas ambientais para descarte de óleo, impacto ambiental do descarte de óleo, sustentabilidade empresarial, empresas de coleta de óleo, tratamento de resíduos industriais, soluções ambientais para empresas, descarte responsável de óleo lubrificante, óleo queimado reciclagem, descarte sustentável de óleo hidráulico, reaproveitamento de óleo usado, certificação ambiental empresas, preservação ecológica, práticas sustentáveis na indústria, sustentabilidade no setor automotivo, descarte correto de óleo diesel">

    
    <meta name="author" content="germanus lub">

    <!-- Open Graph / Facebook (usado por várias redes sociais incluindo Instagram ao compartilhar links) -->
    <meta property="og:title" content="<?php wp_title(' - ', true, 'right'); ?> Página Inicial | Germanus Lub">
    <meta property="og:description" content="<?php echo get_the_excerpt(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri() . '/assets/img/og-image.png'; ?>">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:type" content="website">

     <!-- Favicon -->
     <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="py-1 fixed-top">
        <nav class="main-menu navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <!-- poderia ser um logo customizada. Porem o wp aplica algumas formatações que deixam a logo no centro. Pra esse projeto não me cai muito bem  -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="" width="" height="" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav d-flex align-items-center ">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main_menu',
                            'container' => 'ul',
                            'container_class' => 'navbar-nav',
                            'menu_class' => 'navbar-nav',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '%3$s', // Remove o container <ul> padrão do wp_nav_menu
                        ));
                        ?>
                        <li class="nav-item list-unstyled">
                            <a href="https://wa.me/5511932117180?text=Olá!%20Gostaria%20de%20mais%20informações%20sobre%20os%20serviços%20da%20Germanuslub." target="_blank" rel="noopener noreferrer" class="btn btn-custom btn-highlight fw-bold border-0 px-2 py-1 rounded-3 shadow">Entrar em Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php get_template_part('parts/menu-offcanva'); ?>
