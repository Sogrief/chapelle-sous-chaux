<?php get_header(); ?>

<?php get_template_part( 'template-parts/bandeau'); ?>

<div class="contenuActus"><?php the_field( '_actusContent','infos' ); ?></div>

<div class="actusAccueil">

<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

    <article class="actusAccueil__item">

        <?php the_post_thumbnail(); ?>

            <div class="actusAccueil__item__content">
                <h3><?php the_title(); ?></h3>
                <div class="actusAccueil__item__content__extrait"><?php echo(strip_tags(get_the_excerpt())); ?></div>

                <button class="wp-block-button">
                    <a href="<?php the_permalink(); ?>" class="post__link">lire la suite</a>
                </button>
            </div>
        </article>
        
    <?php endwhile;
    endif; ?>

</div>

<?php get_footer(); ?>