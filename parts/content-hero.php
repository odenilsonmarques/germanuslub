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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calendar.svg" class="hero-icon">

                    <p>Agendar coleta de óleo</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <div class="hero-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drop-1.svg" class="hero-icon">
                    <p>Coleta de Óleo Mineral</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <div class="hero-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drop-2.svg" class="hero-icon">
                    <p>Coleta de Óleo Hidráulico</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <div class="hero-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drop-3.svg" class="hero-icon">
                    <p>Coleta de Óleo Diesel</p>
                </div>
            </div>

        </div>
    </div>
</section>


<style>
    /* .hero-icon {
        width: 2rem;
        height: 3rem;
    } */

    /* .custom-background-hero {
        position: relative;
        padding: 80px 0;
    }

    .custom-background-hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }

    .custom-background-hero .container {
        position: relative;
        z-index: 2;
    } */


    /* --- HERO MODERNO --- */
    .hero-modern {
        position: relative;
        padding: 60px 0 70px;
        min-height: 650px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 70px;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(2, 80, 20, 0.60);
        /* verde com transparência */
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        color: #fff;
    }

    /* Título */
    .hero-title {
        font-size: 40px;
        font-weight: 800;
        line-height: 1.2;
    }

    .hero-subtitle {
        font-size: 20px;
        opacity: 0.9;
    }

    /* Cards */
    .hero-card {
        background: #fff;
        border-radius: 16px;
        padding: 25px 10px;
        text-align: center;
        cursor: pointer;
        transition: all .25s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.10);
    }

    .hero-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
    }

    .hero-card p {
        font-size: 16px;
        font-weight: 600;
        margin-top: 12px;
        color: #0a8f3d;
    }

    .hero-icon {
        width: 45px;
        height: auto;
        opacity: 0.9;

    }
</style>