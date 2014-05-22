<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head id="www-tlw-intranet-dev" data-template-set="tlw-intranet-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	
	<?php if (wp_is_mobile()) { ?>
	<meta name="viewport" content="user-scalable=1.0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=yes">
		   
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-iphone.png" /> 
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-ipad.png" /> 
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-ipad-retina.png" />
	<link rel="apple-touch-startup-image" href="<?php bloginfo('template_directory'); ?>/_/img/apple-start-up-img.png">
	<?php } ?>
	
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; | '; }
		      elseif (is_category()) {
		         single_category_title(''); echo ' | '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page()) && (!is_front_page())) {
		         wp_title(''); echo ' | '; }
		      elseif (is_404()) {
		         echo 'Not Found | '; }
		      if (is_home() || is_front_page()) {
		         bloginfo('name'); echo ' | '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' | page '. $paged; }
		   ?>
	</title>
			   
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
	
	<?php 
	$url = explode('/',$_SERVER['REQUEST_URI']);
	$dir = $url[1] ? $url[1] : 'dashboard';
	
	//echo '<pre>';print_r($post);echo '</pre>';
	?>
	
	
	
</head>

<body id="<?php echo $dir ?>" <?php body_class(); ?>>
	
	<!-- TOP BAR START -->
	<header class="navbar navbar-default navbar-fixed-top" role="main-head">
	
		<?php if (!is_front_page()) { ?>

		<button id="nav-btn" title="Navigation">
		 <span class="sr-only">Toggle navigation</span>
		 <i class="fa fa-bars fa-lg"></i>
		</button>
		
		<?php } ?>
			
			<?php if (is_front_page()) { ?>
					
				<?php include (STYLESHEETPATH . '/_/inc/global/todays-date.php'); ?>
				
				<?php include (STYLESHEETPATH . '/_/inc/global/user-actions.php'); ?>
			
			<?php } else { ?>
			
				<?php if (!is_front_page()) { ?>
				<div class="top-breadcrumb">
				<?php if(function_exists('bcn_display')) { bcn_display(); }?>
				</div>
				<?php } ?>
					
				<?php include (STYLESHEETPATH . '/_/inc/global/todays-date.php'); ?>
				
				<?php include (STYLESHEETPATH . '/_/inc/global/user-actions.php'); ?>
				
			<?php } ?>
		
	</header>
			
	<!-- TOP BAR END -->
	
	<?php if (!is_front_page()) { ?>
	
	<!--SIDE NAV START -->
	<nav class="side-nav nav-closed">
		<?php get_sidebar(); ?>	
	</nav>
	<!--SIDE NAV END -->
	
	<?php } ?>
		
	<!-- MAIN CONTENT START -->
	<section class="content side-nav-closed">
	
		<div class="content-wrap container">