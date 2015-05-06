<?php get_header(); ?>
	
	<section role="main">
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<article <?php post_class(); ?>>
		
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
			
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>

			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'royco' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'royco' ), __( '1 Comment', 'royco' ), __( '% Comments', 'royco' )); ?></span>
			
			<?php the_content();?>
			
			<?php the_tags( __( 'Tags: ', 'royco' ), ', ', '<br>');?>
			
			<p><?php _e( 'Categorised in: ', 'royco' ); the_category(', '); ?></p>
			
			<p><?php _e( 'This post was written by ', 'royco' ); the_author(); ?></p>
			
		</article>
		
	<?php endwhile; else: ?>
	
		<article>
			
			<h1><?php _e( 'Sorry, nothing to display.', 'royco' ); ?></h1>
			
		</article>
	
	<?php endif; ?>
	
	</section>
	
<?php get_sidebar();?>

<?php get_footer(); ?>