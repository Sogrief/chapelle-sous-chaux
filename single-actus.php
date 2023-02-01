<?php get_header(); ?>

<article class="actualite">

<h1><?php the_title(); ?></h1>

<div class="wp-block-image">
    <?php the_post_thumbnail(); ?>
</div>

    <div class="actualite__content">
        <?php the_content() ?>
    </div>

</article>

<div class="is-content-justification-center is-layout-flex wp-container-1 wp-block-buttons">
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://chapellesouschau-zswba3v9xg.live-website.com/actus/">revenir aux actus</a></div>
    </div>
</div>

<?php get_footer(); ?>