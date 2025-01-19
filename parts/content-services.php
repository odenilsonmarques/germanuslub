<!-- <section class="our-services" id="services">
    <div class="container">
        <div class="row">
            <h2 class="text-center py-4 fs-3 mb-5">NOSSOS SERVIÇOS</h2>
            <div class="col-lg-4 col-md-4 col-sm-12 mt-2 rounded  shadow-card mb-5">
                <div class="card custom-shadow" >
                    <div class="card-body">
                        <h5 class="card-title">Óleo Mineral</h5>
                        <p class="card-text">
                            Na Germanus Lub, transformamos a coleta de óleo mineral usado em uma prática sustentável e responsável. Com foco na preservação ambiental, garantimos que este resíduo, amplamente utilizado em indústrias e motores, seja coletado, tratado e destinado corretamente, contribuindo para um ciclo de reaproveitamento seguro.
                        </p>
                        <a href="https://wa.me/5511932117180?text=Olá!%20Gostaria%20de%20mais%20informações%20sobre%20os%20serviços%20da%20Germanuslub." target="_blank" rel="noopener noreferrer" class="btn btn-sm text-decoration-none fw-bolder custom-btn-services">Fale conosco</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 mt-2 rounded  shadow-card mb-5">
                <div class="card custom-shadow" >
                    <div class="card-body">
                        <h5 class="card-title">Óleo Hidráulico</h5>
                        <p class="card-text">
                        Comprometidos com a eficiência e o cuidado ambiental, realizamos a coleta de óleo hidráulico usado, essencial para sistemas industriais e automotivos. Nosso trabalho assegura que este resíduo, frequentemente descartado de forma inadequada na natureza, receba o destino correto, protegendo o solo, a água e promovendo um futuro mais limpo.
                        </p>
                        <a href="https://wa.me/5511932117180?text=Olá!%20Gostaria%20de%20mais%20informações%20sobre%20os%20serviços%20da%20Germanuslub." target="_blank" rel="noopener noreferrer" class="btn btn-sm text-decoration-none fw-bolder custom-btn-services">Fale conosco</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 mt-2 rounded  shadow-card mb-5">
                <div class="card custom-shadow" >
                    <div class="card-body">
                        <h5 class="card-title">Óleo Diesel</h5>
                        <p class="card-text">
                            O descarte inadequado de óleo diesel usado representa uma ameaça significativa ao meio ambiente. Por isso, a Germanus Lub atua com excelência na coleta desse resíduo, garantindo sua destinação segura e sustentável. Nosso compromisso é transformar responsabilidade ambiental em ação prática, protegendo o planeta de contaminações prejudiciais.
                        </p>
                        <a href="https://wa.me/5511932117180?text=Olá!%20Gostaria%20de%20mais%20informações%20sobre%20os%20serviços%20da%20Germanuslub." target="_blank" rel="noopener noreferrer" class="btn btn-sm text-decoration-none fw-bolder custom-btn-services">Fale conosco</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


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
