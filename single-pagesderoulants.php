<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

<div class="deroulants">
    <div class="deroulants__column">
        <div class="deroulants__column__item">
            <div class="deroulants__column__item__headband">
                <img class="deroulants__column__item__headband__open" src="<?php echo get_template_directory_uri(); ?>/dist/sources/icones/redCross.svg">
                <img class="deroulants__column__item__headband__close" src="<?php echo get_template_directory_uri(); ?>/dist/sources/icones/reduce.svg">
                <div class="texteTitre">texte</div>
            </div>
            <div class="deroulants__column__item__subContent">
                <div class="texte">
                    col1
                </div>
            </div>
        </div>

        <div class="deroulants__column__item">
            <div class="deroulants__column__item__headband">
                <img class="deroulants__column__item__headband__open" src="<?php echo get_template_directory_uri(); ?>/dist/sources/icones/redCross.svg">
                <img class="deroulants__column__item__headband__close" src="<?php echo get_template_directory_uri(); ?>/dist/sources/icones/reduce.svg">
                <div class="texteTitre">texte</div>
            </div>
            <div class="deroulants__column__item__subContent">
                <div class="texte">
                    col1
                </div>
            </div>
        </div>
    </div>

    <div class="deroulants__column">
        <div class="deroulants__column__item">
            <div class="deroulants__column__item__headband">
                <img class="deroulants__column__item__headband__open" src="<?php echo get_template_directory_uri(); ?>/dist/sources/icones/redCross.svg">
                <img class="deroulants__column__item__headband__close" src="<?php echo get_template_directory_uri(); ?>/dist/sources/icones/reduce.svg">
                <div class="texteTitre">texte</div>
            </div>
            <div class="deroulants__column__item__subContent">
                <div class="texte">
                    texte yeah j'ai trop de flow lèche moi la bite texte lêché pêche dans ton nombril
                </div>
            </div>
        </div>

        <div class="deroulants__column__item">
            <div class="deroulants__column__item__headband">
                <img class="deroulants__column__item__headband__open" src="<?php echo get_template_directory_uri(); ?>/dist/sources/icones/redCross.svg">
                <img class="deroulants__column__item__headband__close" src="<?php echo get_template_directory_uri(); ?>/dist/sources/icones/reduce.svg">
                <div class="texteTitre">texte</div>
            </div>
            <div class="deroulants__column__item__subContent">
                <div class="texte">
                    col2
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>