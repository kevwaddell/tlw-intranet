<?php 
global $current_user;
get_currentuserinfo();
$profile_page = get_page_by_title('Your Profile');
$user_args = array(
    'echo'          => false,
    'include'       =>  $current_user->ID
  );
$user = wp_list_authors( $user_args ); 
?> 

<div class="quick-links">
	<div class="row">
		<div class="col-xs-6 col-lg-12">
			<ul class="list-unstyled">
				<li class="title">User Links</li>
				<li><i class="fa fa-eye fa-lg"></i> <a href="<?php echo get_author_posts_url( $current_user->ID, $current_user->user_nicename); ?>">View profile</a></li>
				<li><i class="fa fa-edit fa-lg"></i> <a href="<?php echo get_permalink($profile_page->ID); ?>">Edit profile</a></li>
				<li><i class="fa fa-lock fa-lg"></i> <?php wp_loginout( get_permalink($post->ID), true); ?></li>
			</ul>
		</div>
		
		<div class="col-xs-6 col-lg-12">	
			<ul class="list-unstyled">
				<li class="title">Office Links</li>
				<li><i class="fa fa-plane fa-lg"></i> <a href="">Holiday request</a></li>
				<li><i class="fa fa-location-arrow fa-lg"></i> <a href="">Out of Office</a></li>
				<li><i class="fa fa-building-o fa-lg"></i> <a href="">Meetings</a></li>
			</ul>
		</div>
	</div>
</div>