<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		
		<article <?php post_class(); ?>>
			<h2 class="block-header col-red"><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</article>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
