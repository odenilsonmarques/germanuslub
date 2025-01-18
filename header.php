<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="py-2 fixed-top">
        <nav class="main-menu navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <!-- poderia ser um logo customizada. Porem o wp aplica algumas formatações que deixam a logo no centro. Pra esse projeto não me cai muito bem  -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" width="" height="40" class="d-inline-block align-text-top">
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



  