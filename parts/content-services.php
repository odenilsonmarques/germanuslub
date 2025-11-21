<section class="our-services" id="services">
    <div class="container">
        <h2 class="section-title text-center">NOSSOS SERVIÇOS</h2>

        <div class="row g-4 mt-4">
            <?php
            $query = new WP_Query([
                'post_type'      => 'services',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ]);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>

                    <div class="col-lg-4 col-md-4 col-sm-12 mt-2 rounded shadow-card mb-5">
                        <div class="card custom-shadow h-100">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>

                                <p class="card-text">
                                    <?php echo wp_trim_words(get_the_content(), 25, '...'); ?>
                                </p>

                                <div class="mt-3 d-flex justify-content-between">
                                    <!-- <a href="<?php the_permalink(); ?>" class="btn btn-sm custom-btn-services">
                                        Saiba mais
                                    </a> -->



                                    <?php
                                    $url = get_post_meta(get_the_ID(), '_service_page_url', true);
                                    ?>

                                    <a href="<?php echo esc_url($url); ?>" class="btn btn-sm custom-btn-services">
                                        Saiba mais
                                    </a>


                                    <a href="https://wa.me/5511932117180?text=Olá!%20Gostaria%20de%20mais%20informações%20sobre%20<?php echo urlencode(get_the_title()); ?>."
                                        target="_blank"
                                        class="btn btn-sm custom-btn-services">
                                        Fale conosco
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>


                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p class="text-center">Nenhum serviço encontrado.</p>
            <?php endif; ?>
        </div>
    </div>
</section>


<style>
    /* Seção */
    .our-services {
        padding: 60px 0;
    }

    /* Título */
    .section-title {
        font-size: 2rem;
        font-weight: 700;
        color: #0A8F3D;
    }

    /* Cards */
    .service-card {
        background: #FFFAFA;
        border: 1px solid #49AF45;
        border-radius: 18px;
        padding: 25px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
        transition: transform .3s ease, box-shadow .3s ease;
    }

    .service-card:hover {
        transform: translateY(-6px);
        box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.18);
    }

    /* Títulos */
    .service-title {
        color: #0A8F3D;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 12px;
    }

    /* Texto */
    .service-text {
        color: #444;
        margin-bottom: 20px;
        min-height: 60px;
    }

    /* Botões */
    .service-btn {
        border: 2px solid #49AF45;
        color: #49AF45;
        background: transparent;
        border-radius: 10px;
        padding: 10px;
        transition: background .3s ease, color .3s ease;
    }

    .service-btn:hover {
        background: #49AF45;
        color: #fff;
    }

    .custom-shadow {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .custom-shadow .card-body {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
</style>