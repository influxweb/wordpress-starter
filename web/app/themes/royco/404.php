<?php get_header(); ?>

	<section role="main">
	
		<article <?php post_class(); ?>>
		
			<h1><?php _e( 'Page not found', 'royco' ); ?></h1>
			<h2>
				<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'royco' ); ?></a>
			</h2>
			
		</article>
		
	</section>
	
<?php get_sidebar();?>

<?php get_footer(); ?>