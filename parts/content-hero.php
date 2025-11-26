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
            <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0">
                <a href="https://wa.me/5598981061009?text=Ol%C3%A1!%20Tudo%20bem%3F%20Tenho%20interesse%20no%20processo%20de%20coleta%20da%20Germanus%20e%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es."
                    target="_blank"
                    rel="noopener noreferrer"
                    class="hero-card text-center d-block"
                    style="text-decoration: none; color: inherit;">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calendar.svg"
                        class="custom-icon"
                        alt="img-calendar">

                    <p>Agendar coleta de óleo</p>
                </a>
            </div>

            <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0">
                <a href="<?php echo esc_url(home_url('coleta-de-oleo-mineral/')); ?>"
                    class="d-block"
                    style="text-decoration: none; color: inherit;">
                    <div class="hero-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drop-1.svg" class="custom-icon" alt="img-drop1">
                        <p>Coleta de Óleo Mineral</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0">
                <a href="<?php echo esc_url(home_url('coleta-de-oleo-hidraulico/')); ?>"
                    class="d-block"
                    style="text-decoration: none; color: inherit;">
                    <div class="hero-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drop-2.svg" class="custom-icon" alt="img-drop2">
                        <p>Coleta de Óleo Hidráulico</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0">
                <a href="<?php echo esc_url(home_url('coleta-de-oleo-diesel/')); ?>"
                    class="d-block"
                    style="text-decoration: none; color: inherit;">
                    <div class="hero-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drop-3.svg" class="custom-icon" alt="img-drop3">
                        <p>Coleta de Óleo Diesel</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>