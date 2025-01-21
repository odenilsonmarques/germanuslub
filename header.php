<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <meta name="description" content="Transformamos responsabilidade ambiental em ação. Especializados na coleta correta de óleo mineral, óleo hidráulico e óleo diesel, 
    garantimos eficiência e sustentabilidade. Nosso compromisso é promover um futuro mais limpo, consciente e alinhado com as melhores práticas de preservação ambiental">
    <meta name="keywords" content="responsabilidade ambiental, coleta de óleo, óleo mineral, óleo hidráulico, óleo diesel, reciclagem de óleo, gestão de resíduos, 
    impacto positivo, práticas sustentáveis, tratamento de resíduos,  sustentabilidade empresarial, sustentabilidade, meio ambiente, preservação ecológica, 
    descarte sustentável, gestão ambiental, descarte responsável, economia circular, reciclagem industrial, soluções ambientais, descarte correto, impacto ambiental, ecologia">
    <meta name="author" content="germanus lub">

    <!-- Open Graph / Facebook (usado por várias redes sociais incluindo Instagram ao compartilhar links) -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?>">
    <meta property="og:description" content="Descrição otimizada para redes sociais.">
    <meta property="og:image" content="<?php echo get_template_directory_uri() . '/assets/img/og-image.jpg'; ?>">
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
