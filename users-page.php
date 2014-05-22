<?php
/*
Template Name: Users list page
*/
?>

<?php get_header(); ?>

<?php 
$number 	= 10;
$paged 		= (get_query_var('paged')) ? get_query_var('paged') : 1;
$offset 	= ($paged - 1) * $number;
$users 		= get_users();
$query 		= get_users('&offset='.$offset.'&number='.$number);
$total_users = count($users);
$total_query = count($query);
$total_pages = intval($total_users / $number) + 1;
echo '<pre>';print_r($users);echo '</pre>';
?>

<?php if ($total_users > 0) { ?>

<ul class="list-unstyled">

	<?php foreach ($query as $user) { ?>
	
	<li class="user clearfix">  
        <div class="user-avatar">  
            <?php echo get_avatar( $user->ID, 100 ); ?>      
        </div>  
        <div class="user-data">  
  
            <h4 class="user-name">  
                <a href="<?php echo get_author_posts_url($user->ID);?>">  
                    <?php echo get_the_author_meta('display_name', $user->ID);?>  
                </a>  
            </h4>  
  
            <?php if (get_the_author_meta('description', $user->ID) != '') : ?>  
                <p><?php echo get_the_author_meta('description', $user->ID); ?></p>  
            <?php endif; ?>  
  
        </div>  
    </li>  
    
	<?php } ?>

</ul>


<?php } else { ?>
<p>No users at the moment.</p>
<?php } ?>


<?php get_footer(); ?>
