<div class="dashboard-panel-links">

<div class="row">


	<div class="col-xs-6 col-lg-12">
		<div id="search-box-panel" class="search-box closed">
			<h3><i class="fa fa-search"></i> Quick Search <i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></h3>
			
			<?php get_search_form(); ?>
		</div>
	</div>
	
	<?php if (is_user_logged_in()) { ?>
	
	<div class="col-xs-6 col-lg-12">
		
		<div id="profile-panel" class="closed">
			<h3><i class="fa fa-user"></i> Your Profile <i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></h3>
			<?php include (STYLESHEETPATH . '/_/inc/dashboard/quick-links.php'); ?>
		</div>
	
	</div>
		
	<?php } ?>
		
	<div class="col-xs-9 col-sm-9 col-md-9 col-lg-12">
	<?php wp_nav_menu(array( 
	'container' => 'false', 
	'menu' => 'main_menu', 
	'menu_class'  => 'menu list-unstyled row',
	'fallback_cb' => false 
	) ); 
	?>
	</div>
	

</div>
	
</div>