<?php

get_header();
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h1 class='searchTitle'>résultats de recherche de '".get_query_var('s')."'</h1>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                <div class="wp-block-media-text">
                    <li>
                        <a class="lien" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                </div>
                 <?php
        }
    }else{
?>
        <h1 class="searchTitle">aucun résultat</h1>
        <p class="has-text-align-center">La requête n'a mené à aucun résultat, réessayez en une autre</p>
<?php } ?>

<?php get_footer(); ?>