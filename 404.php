<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="error-404 text-center mb-5" style="margin-top:100px; display: flex; flex-direction: column; align-items: center;">
            <h1 class="text-success mt-5 mb-3 fs-3">Nenhum conteúdo encontrado !</h1>
            <a href="<?php echo home_url(); ?>" class="mb-3 text-decoration-none fw-bolder">Ir para a página inicial</a>
            <img src="<?php echo get_template_directory_uri() . '/assets/img/404.svg'; ?>" alt="" width="250" class="img-fluid mt-3 nb-5">
        </div>

    </div>
</div>

<?php get_footer(); ?>