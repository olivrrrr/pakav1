<?php get_header(); ?>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article class="post">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php the_excerpt(); ?> <a href="<?php echo get_permalink(); ?>">[mehr] </a>
     </article>
<?php endwhile; ?>
<?php get_footer(); ?>
