<?php
/**
 * @package Inkness
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class("homa archive col-md-4"); ?>>
<div class="article-wrapper">	
	<?php if (has_post_thumbnail()) : ?>
	<div class="featured-thumb col-md-12 col-xs-12">
	<a target="_blank" href="<?php the_field('event_link'); ?>"> 
            
	<?php
		the_post_thumbnail('homepage-banner');	
	?>
	</a> 
    <div class="post-title-home"><?php the_title(); ?></div>
	</div>
	<?php endif; ?>
	<!-- <div class="article-rest col-md-12">
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php //the_permalink(); ?>" rel="bookmark"><?php //the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php //inkness_posted_on(); ?>
		</div>
		<?php endif; ?>
	</header>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php //the_excerpt(); ?>
	</div>
	<?php else : ?>
	<div class="entry-content">
		<?php //the_excerpt(); ?>
	</div><
	<?php endif; ?>
	</div> -->
</div>	
</article>


<?php 
$id=43; 
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content); 
//echo $content;  
?>