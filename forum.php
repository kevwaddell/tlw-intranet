<?php get_header(); ?>

<section class="forum-wrap">

	<!-- ROW START -->
	<div class="row">
	
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	
		<?php get_sidebar('forum'); ?>	
	
		</div>
	
	
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		
		<section id="forum-content">
			
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			
			<?php echo do_shortcode('[bbp-forum-index]'); ?>
			
		</section>
<?php endwhile; ?>
<?php endif; ?>

		</div>

	</div>
	<!-- ROW END -->

</div>

<?php get_footer(); ?>
