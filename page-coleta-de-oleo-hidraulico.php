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

                <a href="https://wa.me/5598981061009?text=Ol%C3%A1!%20Tudo%20bem%3F%20Tenho%20interesse%20no%20processo%20de%20coleta%20da%20Germanus%20e%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es." class="btn btn-custom-type-services btn-lg mt-3">
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
