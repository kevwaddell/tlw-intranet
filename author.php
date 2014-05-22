<?php get_header(); ?>

<?php 
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
global $current_user;
get_currentuserinfo();
//echo '<pre>';print_r($curauth);echo '</pre>';
?>

<div class="user-avatar">  
 <?php echo get_avatar( $user->ID, 100 ); ?>      
</div> 
<h2><?php echo $curauth->display_name; ?></h2>

<ul class="user-info list-unstyled">
	<li><i class="fa fa-envelope fa-lg"></i> <a href="mailto:<?php echo $curauth->user_email; ?>"><?php echo $curauth->user_email; ?></a></li>
</ul>

<?php if ( have_posts() ): ?>	
<section class="user-posts">
<h3><?php echo ($current_user->ID == $curauth->ID) ? 'Your ': ''; ?>Posts</h3>
<?php while ( have_posts() ) : the_post(); ?>		
		<article>
			<h2><?php the_title(); ?></h2>
		</article>
<?php endwhile; ?>
</section>
<?php endif; ?>

<?php get_footer(); ?>
