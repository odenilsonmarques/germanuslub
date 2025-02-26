<?php get_header(); ?>

<section class="postr">
    <div class="container">
        <h2 class="text-center py-5 mt-5 fs-3"><?php the_title(); ?></h2>
        <div class="row">
            <div class="col-md-8 offset-md-2 mb-5">
                <div class="card h-100  border-0">
                
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" class="rounded p-3" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                    <div class="card-body">
                        <div class="d-flex align-items-center">               
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#23CC88" class="bi bi-calendar2-week me-2" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <span class="me-3"><?php echo get_the_date('d \d\e F \d\e Y'); ?></span>
                        </div>

                        <p class="card-text"><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>

<?php get_footer(); ?>