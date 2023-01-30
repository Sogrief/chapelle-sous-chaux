<section class="services">

    <h2><?php the_field("_titreSection"); ?></h2>

    <div class="services__section">
        <?php if (have_rows('_blocLienRapide')):
                while (have_rows('_blocLienRapide')): the_row();?> 

                <div class="services__section__item">
                    <img src="<?php $icone = get_sub_field( '_iconeLien' ); echo $icone['url']; ?>">
                    <h3><?php the_sub_field("_titreLien"); ?></h3>
                </div>

                <?php endwhile;
            endif;
        ?>
    </div>
</section>