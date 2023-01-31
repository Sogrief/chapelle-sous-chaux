<?php
    if ( has_post_thumbnail() ) { ?>

<div class="bandeau -base">
        <?php the_post_thumbnail() ?>
        <div class="titreBandeau"> 
                <h1 class="titreH1 -blanc"><?php the_title(); ?></h1>
        </div>
</div>

<?php }
else {?>
        <h1 class="titreH1 -noir"><?php the_title(); ?></h1>
<?php } ?>