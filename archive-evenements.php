<?php get_header(); ?>

<?php
    if ( has_post_thumbnail() ) { ?>

<div class="bandeau -base">
        <?php the_post_thumbnail() ?>
        <div class="titreBandeau"> 
                <h1 class="titreH1 -blanc">agenda</h1>
        </div>
</div>

<?php }
else {?>
        <h1 class="titreH1 -noir">agenda</h1>
<?php } ?>

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