<?php get_header(); ?>

<?php get_template_part( 'template-parts/bandeau'); ?>


<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

        <?php the_post_thumbnail(); ?>
        <?php the_title();?>
        <?php the_content(); ?>
        
    <?php endwhile;
    endif; ?>

</div>

<?php get_footer(); ?>