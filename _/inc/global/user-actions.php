<?php if (is_user_logged_in()) { ?>

<div class="user-actions">

	<div class="user-title">
	
	<?php 
	global $current_user;
	get_currentuserinfo();
	$profile_page = get_page_by_title('Your Profile');
	$avatar = get_avatar( $current_user->ID, 30 );
	//echo '<pre>';print_r($current_user);echo '</pre>';
	 ?>

	<span class="tml-user-avatar"><?php echo $avatar; ?></span>
	
	<?php echo $current_user->display_name; ?>
	<i class="fa fa-angle-down fa-lg"></i>
	
	</div>
	
	<div class="user-links">
		
		<ul class="list-unstyled">
			<li><i class="fa fa-dashboard fa-lg"></i> <a href="<?php echo get_option('home'); ?>/">Dashboard</a></li>
			<li><i class="fa fa-eye fa-lg"></i> <a href="<?php echo get_author_posts_url( $current_user->ID, $current_user->user_nicename); ?>">View profile</a></li>
			<li><i class="fa fa-edit fa-lg"></i> <a href="<?php echo get_permalink($profile_page->ID); ?>">Edit profile</a></li>
			<li><i class="fa fa-lock fa-lg"></i><?php wp_loginout( get_permalink($post->ID), true); ?></li>
			<?php if (current_user_can('administrator')) { ?>
			<li><i class="fa fa-cog fa-lg"></i> <a href="<?php echo admin_url(); ?>" target="_blank">Admin</a></li>
			<?php } ?>
		</ul>
	
	</div>

</div>

<?php } else { ?>

<div class="login-action">
<?php wp_loginout( get_permalink($post->ID), true); ?>
</div>

<?php } ?>
