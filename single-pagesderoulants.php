<?php get_header(); ?>

<?php get_template_part( 'template-parts/bandeau'); ?>

<?php the_content(); ?>

<div class="deroulants">
    <div class="deroulants__column">

    <?php
    if( have_rows('_deroulants') ):
        while( have_rows('_deroulants') ): the_row();

        $index = get_row_index();

        if($index % 2!=0){ ?>

        <div class="deroulants__column__item">
            <div class="deroulants__column__item__headband">
                <img class="deroulants__column__item__headband__open" src="<?php echo get_template_directory_uri(); ?>/dist/sources/icones/redCross.svg">
                <img class="deroulants__column__item__headband__close" src="<?php echo get_template_directory_uri(); ?>/dist/sources/icones/reduce.svg">
                <div class="texteTitre"><?php the_sub_field("_titreDeroulant"); ?></div>
            </div>
            <div class="deroulants__column__item__subContent">
                <div class="texte">
                    <?php the_sub_field('_contenuDeroulant'); ?>
                </div>
            </div>
        </div>

        <?php
            }
        endwhile;
    endif;
    ?>
    </div>

    <div class="deroulants__column">
    <?php
    if( have_rows('_deroulants') ):
        while( have_rows('_deroulants') ): the_row();

        $index = get_row_index();

        if($index % 2==0){ ?>

        <div class="deroulants__column__item">
            <div class="deroulants__column__item__headband">
                <img class="deroulants__column__item__headband__open" src="<?php echo get_template_directory_uri(); ?>/dist/sources/icones/redCross.svg">
                <img class="deroulants__column__item__headband__close" src="<?php echo get_template_directory_uri(); ?>/dist/sources/icones/reduce.svg">
                <div class="texteTitre"><?php the_sub_field("_titreDeroulant"); ?></div>
            </div>
            <div class="deroulants__column__item__subContent">
                <div class="texte">
                    <?php the_sub_field('_contenuDeroulant'); ?>
                </div>
            </div>
        </div>

        <?php
            }
        endwhile;
    endif;
    ?>

        
    </div>
</div>



<?php get_footer(); ?>