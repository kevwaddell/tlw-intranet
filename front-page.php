<?php get_header(); ?>

<section class="dashboard-wrap">

	<div class="row">
	
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
		
		<!-- ROW START -->
		<?php include (STYLESHEETPATH . '/_/inc/dashboard/dashboard-panel-links.php'); ?>
		<!-- ROW END -->

		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

		<!-- ROW START -->
		<?php include (STYLESHEETPATH . '/_/inc/dashboard/dashboard-panels.php'); ?>
		<!-- ROW END -->
	
		</div>
	
	</div>

</section>

<?php get_footer(); ?>
