<?php get_header(); ?>
	<div class="bandeau -accueil">
		<?php the_post_thumbnail(); ?>
		<h1 class="titreH1 -blanc"><?php the_title(); ?></h1>

		<h2><?php echo get_bloginfo( 'description' ); ?></h2>
	</div>

<?php 
$args = array(
	'post_type' => 'actus',
	'posts_per_page' => 3
);
$actus = new WP_Query( $args );
if ( $actus->have_posts() ) :
	while ( $actus->have_posts() ) : $actus->the_post();?>

	<h3><?php the_title(); ?></h3>
	<?php the_excerpt(); ?>

	<button class="wp-block-button">
		<a href="<?php the_permalink(); ?>" class="post__link">lire la suite</a>
	</button>
<?php 
	endwhile;
	wp_reset_postdata();
endif; 
?>
	
<?php get_footer(); ?>