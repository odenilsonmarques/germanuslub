<?php get_header(); ?>

<section class="post">
    <div class="container">
        <h2 class="text-center py-5 fs-3 mb-4">Bem-vindo ao nosso blog</h2>
        <div class="row">

            <?php

            //essa linha de código é responsável por exibir os posts na página inicial do blog.
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => 3, // Exibir 6 posts por página (3 por linha)
                'paged' => $paged,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>

                    <div class="col-md-4 mb-5">
                        <div class="card h-100 shadow-sm border-0">
                            <?php
                            if (has_post_thumbnail()) :
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                            else :
                                $thumbnail_url = get_template_directory_uri() . '/assets/img/placeholder.webp';
                            endif;
                            ?>
                            <img src="<?php echo esc_url($thumbnail_url); ?>" class="custom-img-card rounded p-3" alt="<?php the_title_attribute(); ?>">

                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#23CC88" class="bi bi-person me-2" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                    </svg>
                                    <span class="me-3"><?php echo esc_html(get_the_author()); ?></span>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#23CC88" class="bi bi-calendar2-week me-2" viewBox="0 0 16 16">
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    <span class="me-3"><?php echo get_the_date('d \d\e F \d\e Y'); ?></span>
                                </div>

                                <h4 class="card-title fs-5"><?php the_title(); ?></h4>
                                <p class="card-text text-small"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-sm w-50 mx-auto d-block mt-4 btn-custom-card-blog">Leia mais</a>
                            </div>

                        </div>
                    </div>
            <?php
                endwhile;
                // exibe o sistema de paginação 
                echo '<div class="pagination justify-content-center gap-2 mx-2 mb-5">';
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                    'prev_text' => __('« Anterior'),
                    'next_text' => __('Próximo »'),
                ));
                echo '</div>';
               
            else :
                echo '<p class="text-center">Nenhum post encontrado.</p>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>


</section>


<?php get_footer(); ?>