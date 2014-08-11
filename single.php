<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * 
 * 
 */

get_header("blog"); ?>
<div class="container">
 
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 	<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
	<?php the_content(); ?>
        <?php comments_template(); ?>
 
    <?php endwhile; ?>
 
    <?php else : ?>
 
        <h2>pagina no encontrada</h2>
 
    <?php endif; ?>
    </div>
 
 
<?php get_footer(); ?>
