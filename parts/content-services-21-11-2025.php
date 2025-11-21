<section class="our-services" id="services">
    <div class="container">
        <div class="row">
            <h2 class="text-center py-4 mt-3 fs-3 mb-5">NOSSOS SERVIÇOS</h2>

            <?php
            $query = new WP_Query([
                'post_type' => 'services',
                'posts_per_page' => -1,
            ]);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 mt-2 rounded shadow-card mb-5">
                        <div class="card custom-shadow">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_content(); ?></p>
                                <a href="https://wa.me/5511932117180?text=Olá!%20Gostaria%20de%20mais%20informações%20sobre%20os%20serviços%20da%20Germanuslub." target="_blank" rel="noopener noreferrer" class="btn btn-sm text-decoration-none fw-bolder custom-btn-services">Fale conosco</a>
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
