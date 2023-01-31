<section class="services">

    <h2><?php the_field("_titreSection"); ?></h2>

    <div class="services__section">
        <?php if (have_rows('_blocLienRapide')):
                while (have_rows('_blocLienRapide')): the_row();?> 

                <a href="<?php the_sub_field("_urlLien"); ?>" target="_blank">
                    <div class="services__section__item">
                        <img src="<?php $icone = get_sub_field( '_iconeLien' ); echo $icone['url']; ?>">

                        <?php if (get_sub_field("_titreLien")){ ?>
                            <h3><?php the_sub_field("_titreLien"); ?></h3>
                        <?php } ?>

                        <?php if (get_sub_field("_description")){ ?>
                            <div class="services__section__item__description"><?php the_sub_field("_description"); ?></div>
                        <?php } ?>
                    </div>
                </a>

                <?php endwhile;
            endif;
        ?>
    </div>
</section>