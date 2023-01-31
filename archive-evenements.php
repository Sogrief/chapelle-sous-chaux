<?php get_header(); ?>

<?php get_template_part( 'template-parts/bandeau'); ?>

<h2>prochainement</h2>

<div class="evenements">

<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

    <h3>
        <?php the_title();?>
    </h3>

    <div class="evenements__content">

        <?php the_post_thumbnail(); ?>

        <div class="evenements__content__texte">
            <?php $text = preg_replace("/<\/?p[^>]*>/i", "", get_the_content());
            echo $text;?>
        </div>
    </div>
        
    <?php endwhile;
    endif; ?>

</div>

<?php get_footer(); ?>