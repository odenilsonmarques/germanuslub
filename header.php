<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título dinâmico otimizado -->
    <title>
        <?php
        if (is_front_page()) {
            echo 'Coleta e Reciclagem de Óleo Lubrificante | Germanus Lub';
        } else {
            wp_title('|', true, 'right');
            bloginfo('name');
        }
        ?>
    </title>

    <!-- Meta Description otimizada -->
    <meta name="description" content="Coletamos e reciclamos óleo usado com segurança e responsabilidade ambiental. Atendemos empresas com logística reversa, certificação e conformidade ambiental.">

    <!-- Keywords (Google ignora, mas outros motores usam) -->
    <meta name="keywords" content="coleta de óleo usado, reciclagem de óleo lubrificante, descarte de óleo, logística reversa, sustentabilidade, resíduos industriais">

    <meta name="author" content="Germanus Lub">

    <!-- Open Graph -->
    <meta property="og:title" content="Coleta e Reciclagem de Óleo Lubrificante | Germanus Lub">
    <meta property="og:description" content="Serviço especializado de coleta, reciclagem e logística reversa de óleo lubrificante. Atendimento rápido, seguro e certificado.">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/og-image.png">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Coleta e Reciclagem de Óleo Lubrificante | Germanus Lub">
    <meta name="twitter:description" content="Serviços ambientais para empresas: coleta, reciclagem e descarte responsável de óleo usado.">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/og-image.png">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">

    <?php wp_head(); ?>
</head>

<!-- Google tag (Analytics 4) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-09Q3FC971W"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-09Q3FC971W');
</script>

<!-- Dados Estruturados (Google SEO Local) -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Germanus Lub",
        "url": "<?php echo esc_url(home_url('/')); ?>",
        "logo": "<?php echo get_template_directory_uri(); ?>/assets/img/og-image.png",
        "description": "Coleta e reciclagem de óleo usado, resíduos e logística reversa.",
        "sameAs": [
            "https://www.instagram.com/",
            "https://www.facebook.com/"
        ]
    }
</script>

<body <?php body_class(); ?>>

    <header class="py-1 fixed-top">
        <nav class="main-menu navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="" width="" height="" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav d-flex align-items-center ">
                        <?php
                        wp_nav_menu([
                            'theme_location'  => 'main_menu',
                            'depth'           => 2,
                            'container'       => false,
                            'menu_class'      => 'navbar-nav ms-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ]);
                        ?>
                        <li class="nav-item list-unstyled">
                            <a href="https://wa.me/5598981061009?text=Ol%C3%A1!%20Tudo%20bem%3F%20Tenho%20interesse%20no%20processo%20de%20coleta%20da%20Germanus%20e%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es." target="_blank" rel="noopener noreferrer" class="btn btn-custom btn-highlight fw-bold border-0 px-2 py-1 rounded-3 shadow">Entrar em Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php get_template_part('parts/menu-offcanva'); ?>