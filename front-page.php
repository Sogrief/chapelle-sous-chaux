<?php get_header(); ?>
	<div class="bandeau -accueil">
		<?php the_post_thumbnail(); ?>
		<h1 class="titreH1 -blanc"><?php the_title(); ?></h1>

		<h2><?php echo get_bloginfo( 'description' ); ?></h2>
	</div>

<h2>actualités</h2>

<div class="actusAccueil">

<?php 
$args = array(
	'post_type' => 'actus',
	'posts_per_page' => 3
);

$actus = new WP_Query( $args );
if ( $actus->have_posts() ) :
	while ( $actus->have_posts() ) : $actus->the_post();?>
	<article class="actusAccueil__item">

		<?php the_post_thumbnail(); ?>

		<div class="actusAccueil__item__content">
			<h3><?php the_title(); ?></h3>
			<p><?php the_excerpt(); ?></p>

			<button class="wp-block-button">
				<a href="<?php the_permalink(); ?>" class="post__link">lire la suite</a>
			</button>
		</div>
	</article>
<?php 
	endwhile;
	wp_reset_postdata();
endif; 
?>

</div>

<h2>agenda</h2>

<?php get_template_part( 'template-parts/services'); ?>

<?php the_content(); ?>

<?php the_field("_localisationMairie"); ?>
	
<?php get_footer(); ?>