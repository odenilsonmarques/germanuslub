<?php
$hero_bg = get_theme_mod('set_hero_background');
?>

<section
    id="hero"
    class="hero-modern"
    style="background: <?php echo $hero_bg ? 'url(' . esc_url($hero_bg) . ') center/cover no-repeat' : '#0a8f3d'; ?>;">
    <div class="hero-overlay"></div>

    <div class="container hero-content text-center">

        <h1 class="hero-title">
            <?php echo esc_html(get_theme_mod('set_hero_title', 'Como podemos te ajudar hoje?')); ?>
        </h1>

        <p class="hero-subtitle">
            <?php echo esc_html(get_theme_mod('set_hero_subtitle', '')); ?>
        </p>

        <div class="hero-services row justify-content-center mt-5">

            <div class="col-lg-2 col-md-3 col-6">
                <div class="hero-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calendar.svg" class="custom-icon" alt="img-calendar">

                    <p>Agendar coleta de óleo</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <div class="hero-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drop-1.svg" class="custom-icon" alt="img-drop1">
                    <p>Coleta de Óleo Mineral</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <div class="hero-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drop-2.svg" class="custom-icon" alt="img-drop2">
                    <p>Coleta de Óleo Hidráulico</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <div class="hero-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drop-3.svg" class="custom-icon" alt="img-drop3">
                    <p>Coleta de Óleo Diesel</p>
                </div>
            </div>

        </div>
    </div>
</section>

