<?php get_header(); ?>

<article class="actualite">

<h1><?php the_title(); ?></h1>

<?php the_post_thumbnail(); ?>

    <div class="actualite__content">
        <?php the_content() ?>
    </div>

</article>

<?php get_footer(); ?>