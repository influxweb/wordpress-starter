<?php /* Template Name: Home Page */ get_header(); ?>
	
	<section role="main">
	
		<h1><?php the_title(); ?></h1>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<article <?php post_class(); ?>>
			<?php the_content(); ?>	
		</article>
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'royco' ); ?></h2>
		</article>
	
	<?php endif; ?>
	
	</section>
	
<?php get_sidebar();?>

<?php get_footer(); ?>