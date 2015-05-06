<?php get_header(); ?>

	<section role="main">
	
	<?php if (have_posts()): the_post(); ?>
	
		<h1><?php _e( 'Author Archives for ', 'royco' ); echo get_the_author(); ?></h1>

	<?php if ( get_the_author_meta('description')) : ?>
	
	<?php echo get_avatar(get_the_author_meta('user_email')); ?>
	
		<h2><?php _e( 'About', 'royco' ); echo get_the_author() ; ?></h2>
	
	<?php the_author_meta('description'); ?>
	
	<?php endif; ?>
	
	<?php rewind_posts(); while (have_posts()) : the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<?php $thumbnail = '';
								
			if (function_exists('has_post_thumbnail')) {
			    if ( has_post_thumbnail() ) {
			    	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
			    	$url = $thumb['0'];
			    } else {
					$url = get_bloginfo('template_url') . '/img/news/default.png';
				}
			}?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<img class="" src="<?=$url?>" alt="<?php the_title(); ?>">
			</a>

			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>

			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'royco' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'royco' ), __( '1 Comment', 'royco' ), __( '% Comments', 'royco' )); ?></span>
			
			<?php royco_excerpt(); ?>
			
		</article>
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<article>
			
			<h2><?php _e( 'Sorry, nothing to display.', 'royco' ); ?></h2>
			
		</article>
	
	<?php endif; ?>
		
		<?php get_template_part('pagination'); ?>
	
	</section>
	
<?php get_sidebar();?>

<?php get_footer(); ?>