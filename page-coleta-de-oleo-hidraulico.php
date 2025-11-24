<?php
/* Template Name: Coleta de Óleo Mineral */
get_header();
?>

<?php
$subtitle = get_post_meta(get_the_ID(), 'service_subtitle', true);
$hero_bg = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/assets/img/placeholder.webp';
$cta_text = get_theme_mod('set_service_coleta_mineral_cta_text', 'Agendar coleta');
$cta_link = get_theme_mod('set_service_coleta_mineral_cta_link', '#contato');
?>

<section class="service-hero" style="background-image: url('<?php echo esc_url($hero_bg); ?>')">
    <div class="service-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="service-title"><?php the_title(); ?></h1>

                <?php
                if (!empty($subtitle)): ?>
                    <p class="service-subtitle"><?php echo esc_html($subtitle); ?></p>
                <?php endif; ?>

                <a href="<?php echo esc_url($cta_link); ?>" class="btn btn-highlight btn-lg mt-3">
                    <?php echo esc_html($cta_text); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<main class="service-content container py-5">

    <div class="row">
        <div class="col-lg-8">

            <!-- Descrição -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <section class="service-desc p-4">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </section>

            <?php endwhile;
            endif; ?>

            <section class="service-benefits p-4">
                <h3>Por que escolher nossa coleta?</h3>
                <ul>
                    <li>Transporte e armazenamento conforme normas ambientais</li>
                    <li>Equipe treinada e frota própria</li>
                    <li>Certificado de destinação disponível</li>
                    <li>Atendimento para empresas, oficinas e indústrias</li>
                </ul>
            </section>

            <!-- Como funciona -->
            <section class="service-steps mb-4 p-4">
                <h3>Como funciona</h3>
                <div class="row g-3 ">
                    <div class="col-md-4 ">
                        <div class="step-card">
                            <div class="step-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/calendar.svg" alt="img-calendar"></div>
                            <strong>1. Agendamento</strong>
                            <p>Faça o agendamento pelo formulário ou WhatsApp.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step-card">
                            <div class="step-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/truck-line.svg" alt="img-truck"></div>
                            <strong>2. Coleta no local</strong>
                            <p>Nossa equipe realiza a coleta conforme combinado.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step-card">
                            <div class="step-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/verified.svg" alt="img-verified"></div>
                            <strong>3. Destinação e certificado</strong>
                            <p>Receba o certificado de destinação após o processo.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Benefícios -->
            <section class="service-benefits mb-4 p-4">
                <h3>Benefícios</h3>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="benefit-card ">
                            <div class="step-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile-line.svg" alt="img-profile"></div>
                            <strong>Conformidade legal</strong>
                            <p>Atende às normas e legislações vigentes.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <div class="step-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/leaf-line.svg" alt="img-leaf"></div>
                            <strong>Sustentabilidade</strong>
                            <p>Reduz impacto ambiental por meio de destino correto.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ -->
            <section class="service-faq mb-4 p-4">
                <?php get_template_part('parts/content', 'perguntas-frequentes'); ?>
            </section>

        </div>

        <section class="col-md-4">
            <!-- Sidebar de contato / CTA -->
            <?php get_template_part('parts/content', 'sidebar-cta'); ?>

            <!-- Menu de serviços relacionados -->
            <?php get_template_part('parts/content', 'menu-services'); ?>
        </section>
    </div>

</main>

<?php get_footer(); ?>
<!-- 

<style>
    /* ====== Service Page: Coleta de Óleo Mineral ====== */

    /* HERO */
    .service-hero {
        position: relative;
        background-size: cover;
        background-position: center;
        padding: 150px 0;
        min-height: 340px;
        display: flex;
        align-items: center;
    }

    .service-hero-overlay {
        position: absolute;
        inset: 0;
        background: rgba(10, 143, 61, 0.78);
        /* overlay verde similar ao hero */
        z-index: 1;
    }

    .service-hero .container {
        position: relative;
        z-index: 2;
        color: #fff;
    }

    .service-title {
        font-size: 44px;
        font-weight: 800;
        line-height: 1.08;
        margin-bottom: 12px;
    }

    .service-subtitle {
        font-size: 18px;
        opacity: 0.95;
        max-width: 720px;
    }

    /* service main icon */
    .service-main-icon {
        width: 160px;
        opacity: 0.95;
    }

    /* CONTENT */
    .service-content h2,
    .service-content h3 {
        color: #123524;
        font-weight: 700;
    }

    .card {
        border: none;
    }

    .service-desc {
        background: #fff;
        border-radius: 10px;
        /* box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06); */
    }

    /* STEPS */
    .step-card {
        background: #fff;
        border-radius: 10px;
        text-align: left;
        height: 100%;
        /* box-shadow: 0 8px 20px rgba(0, 0, 0, 0.04); */
    }

    .step-card p {
        margin: 6px 0 0;
        color: #4a4a4a;
    }

    .step-icon img {
        width: 42px;
    }

    /* BENEFITS */
    .benefit-card {
        background: #fff;
        border-radius: 10px;
        /* box-shadow: 0 6px 18px rgba(0, 0, 0, 0.04); */
    }

    .benefit-card p {
        margin: 6px 0 0;
        color: #4a4a4a;
    }



    /* SIDEBAR CTA */
    .related-services li {
        padding: 8px 0;
    }

    .related-services li a {
        color: #0A7A36;
        font-weight: 600;
    }

    /* BOTÕES (reaproveita seu estilo) */
    .btn-highlightt {
        background-color: #49AF45;
        color: #fff;
        border-radius: 8px;
        font-weight: 700;
    }

    .btn-highlightt:hover {
        background-color: #fff;
        color: #49AF45;
        transform: scale(1.02);
    }

    /* Mobile adjustments */
    @media (max-width: 991px) {
        .service-title {
            font-size: 32px;
            text-align: center;
        }

        .service-subtitle {
            text-align: center;
            margin: 0 auto;
        }

        .service-main-icon {
            display: none;
        }
    }
</style> -->