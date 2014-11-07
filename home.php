<?php
/*
* Posts page template file
*/
get_header("blog"); ?>
<div class="container">
        <?php 
        /* The loop: the_post retrieves the content
         * of the new Page you created to list the posts,
         * e.g., an intro describing the posts shown listed on this Page..
         */
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
	<h1 class="entry-title">
		<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
	</h1>
	<small><?php the_time('j F, Y') ?> por <?php the_author_posts_link() ?> </small> 
	<?php the_content(); ?>
	<?php endwhile; ?>
	<?php wp_pagenavi(); ?>
	<?php else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
<br>
<?php get_footer(); ?>
