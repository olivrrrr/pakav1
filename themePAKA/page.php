<?php get_header(); ?>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article class="post page">
		<h2><?php the_title(); ?></h2>
        <?php the_content(); ?> 
     </article>
<?php endwhile; ?>
<?php get_footer(); ?>
 