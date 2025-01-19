<!-- Offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color:#49AF45">
    <div class="offcanvas-header" style="background-color:#123524">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" width="" height="40" class="d-inline-block align-text-top">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="color:#fff"></button>
    </div>
    <div class="main-menu offcanvas-body">
        <ul class="navbar-nav mx-auto text-whiter">
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
                <a href="https://wa.me/5511932117180?text=Olá!%20Gostaria%20de%20mais%20informações%20sobre%20os%20serviços%20da%20Germanuslub." target="_blank" rel="noopener noreferrer" class="btn btn-custom-menu-mobile btn-highlight fw-bold border-0 px-2 py-1 rounded-3 shadow">Entrar em Contato</a>
            </li>
        </ul>
    </div>
</div>