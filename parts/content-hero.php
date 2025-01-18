<section class="custom-background-hero" id="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 py-5 mt-4">
                <h1 class="text-white"><?php echo esc_html(get_theme_mod('set_hero_title', 'Título padrão')); ?></h1>
                <p class="text-white"><?php echo esc_html(get_theme_mod('set_hero_subtitle', 'Subtitulo padrão')); ?></p>
                <a href="<?php echo esc_url(get_theme_mod("set_hero_button_link")); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-lg text-decoration-none fw-bolder fs-6 custom-btn-hero text-white">
                    <?php echo esc_html(get_theme_mod("set_hero_text_button", 'texto do botão')); ?>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-5 text-center mt-2">
                <?php
                // Verifica se a imagem foi definida
                $hero_image = get_theme_mod("set_hero_image");
                if ($hero_image) {
                    // Exibe a imagem definida
                    echo '<img src="' . esc_url($hero_image) . '" alt="hero' . '" class="img-fluid w-75">';
                } else {
                    // Exibe uma imagem padrão se nenhuma imagem foi definida
                    echo '<img src="' . get_template_directory_uri() . '/assets/img/placeholder-attachment.png" alt="imagem padrão ' . '" class="img-fluid custom-image border">';
                }
                ?>
            </div>
        </div>
    </div>
</section>