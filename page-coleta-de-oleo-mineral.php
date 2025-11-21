<?php
/* Template Name: Coleta de Óleo Mineral */
get_header();
?>

<?php
// Conteúdos configuráveis via Customizer (com fallback)
$service_title = get_theme_mod('set_service_coleta_mineral_title', 'Coleta de Óleo Mineral');
$service_subtitle = get_theme_mod('set_service_coleta_mineral_subtitle', 'Soluções seguras e certificadas para descarte de óleo mineral usado.');
$hero_bg = get_theme_mod('set_hero_background', '/mnt/data/1d3c1591-9e82-4e5b-bf48-2458ccf7eb46.png'); // caminho local usado como fallback
$cta_text = get_theme_mod('set_service_coleta_mineral_cta_text', 'Agendar coleta');
$cta_link = get_theme_mod('set_service_coleta_mineral_cta_link', '#contato');
?>

<section class="service-hero" style="background-image: url('<?php echo esc_url($hero_bg); ?>')">
    <div class="service-hero-overlay"></div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="service-title"><?php echo esc_html($service_title); ?></h1>
                <p class="service-subtitle"><?php echo esc_html($service_subtitle); ?></p>

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
            <section class="service-desc p-4">
                <h2>O que é a Coleta de Óleo Mineral?</h2>
                <p>
                    A <?php bloginfo('name'); ?> realiza a coleta de óleo mineral usado com práticas seguras e responsáveis,
                    garantindo a destinação ambientalmente correta e a emissão do certificado de destinação.
                </p>
            </section>

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
                            <div class="step-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/calendar.svg" alt=""></div>
                            <strong>1. Agendamento</strong>
                            <p>Faça o agendamento pelo formulário ou WhatsApp.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step-card">
                            <div class="step-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/truck-line.svg" alt=""></div>
                            <strong>2. Coleta no local</strong>
                            <p>Nossa equipe realiza a coleta conforme combinado.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step-card">
                            <div class="step-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/verified.svg" alt=""></div>
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
                            <div class="step-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile-line.svg" alt=""></div>
                            <strong>Conformidade legal</strong>
                            <p>Atende às normas e legislações vigentes.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <div class="step-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/leaf-line.svg" alt=""></div>
                            <strong>Sustentabilidade</strong>
                            <p>Reduz impacto ambiental por meio de destino correto.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ -->
            <section class="service-faq mb-4 p-4">
                <h3>Perguntas Frequentes</h3>
                <div class="faq-item">
                    <strong>Qual o volume mínimo para coleta?</strong>
                    <p>Entre em contato para avaliar volume e logística.</p>
                </div>
                <div class="faq-item">
                    <strong>Recebo certificado?</strong>
                    <p>Sim — após o processo emitimos o certificado de destinação.</p>
                </div>
            </section>

        </div>

        <section class="col-md-4">
            <!-- Sidebar de contato / CTA -->
            <div class="p-3 mb-3 text-center">
                <h4>Precisa agendar sua coleta?</h4>
                <p>Fale conosco, clique no botão abaixo.</p>
                <a href="https://wa.me/5511XXXXXXXXX?text=Olá!%20Quero%20agendar%20coleta%20de%20óleo%20mineral." target="_blank" class="btn btn-highlightt  mb-2">Agendar coleta</a>
            </div>

            <div class="p-3 text-center ">
                <h4>Serviços relacionados</h4>
                <ul class="related-services list-unstyled">
                    <li><a href="<?php echo esc_url(home_url('/servicos/coleta-oleo-hidraulico')); ?>">Coleta de Óleo Hidráulico</a></li>
                    <li><a href="<?php echo esc_url(home_url('/servicos/coleta-oleo-diesel')); ?>">Coleta de Óleo Diesel</a></li>
                </ul>
            </div>
            </asection>
    </div>

</main>

<?php get_footer(); ?>


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
</style>