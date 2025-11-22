<div class="p-3 text-center ">
    <h4>Serviços relacionados</h4>
    <ul class="related-services list-unstyled">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'related_services',
            'container' => false,
            'items_wrap' => '%3$s', // remove o <ul> extra
            'fallback_cb' => false
        ));
        ?>
    </ul>
</div>