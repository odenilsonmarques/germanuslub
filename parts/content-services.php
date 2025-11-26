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
                                    <?php echo get_the_content(); ?>
                                </p>

                                <div class="mt-3 d-flex justify-content-between">
                                    <a href="https://wa.me/5598981061009?text=Ol%C3%A1!%20Tudo%20bem%3F%20Tenho%20interesse%20no%20processo%20de%20coleta%20da%20Germanus%20e%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es.
<?php echo urlencode(get_the_title()); ?>."
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