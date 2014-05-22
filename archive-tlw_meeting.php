<?php get_header(); ?>

<?php if (isset($_GET['meetingid']) && $_GET['request'] == "confirm") { 
$meeting = get_post($_GET['meetingid']);
$room = wp_get_post_terms( $meeting->ID, 'tlw_rooms_tax');
$booked_by = get_field('booked_by', $meeting->ID);
$meeting_date_raw = get_field('meeting_date', $meeting->ID);
$meeting_date = date('l jS F, Y', strtotime($meeting_date_raw));
$start_time = get_field('start_time', $meeting->ID);
//$start = date('g:ia', $start_time);
$end_time = get_field('end_time', $meeting->ID);
//$end = date('g:ia', $end_time);
//echo '<pre>';print_r($room);echo '</pre>';

	if ($meeting->post_status == 'pending') {
	
		 $meeting_args = array(
		 'ID'           => $meeting->ID,
		 'post_status'	=> 'publish'
		 );
		 
		 wp_update_post( $meeting_args );
		  
		//$to = $booked_by[user_email];
		$to = "kevwaddell@mac.com";
		$subject = "Your Room Booking has been successful";
		$message = "<p><strong>This message is to confirm your room booking request has been approved.</strong></p>";
		$message .= "<p>You may now add your meeting attendees.</p>";
		$headers = "From: Claire Thornton <cthornton@tlwsolicitors.co.uk>";
		
		function wps_set_content_type(){
			return "text/html";
			}
		add_filter( 'wp_mail_content_type','wps_set_content_type' );

		wp_mail( $to, $subject, $message, $headers );
		
		remove_filter( 'wp_mail_content_type', 'set_html_content_type' );

	} 

?>

<div class="alert alert-success alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<strong><?php echo $room[0]->name; ?></strong> meeting room has been booked for <strong><?php echo $booked_by[display_name]; ?></strong> on <strong><?php echo $meeting_date; ?></strong> from <strong><?php echo $start_time; ?></strong> to <strong><?php echo $end_time; ?></strong>
</div>

<?php }  ?>

<?php if ( have_posts() ): ?>		
<section class="data-list">
<h3>Meetings</h3>
<?php while ( have_posts() ) : the_post(); ?>		
		<article>
		<h4><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
		</article>

<?php endwhile; ?>
</section>

<?php else: ?>
<h2>There are no Meetings booked at the moment.</h2>
<?php endif; ?>

<?php get_footer(); ?>
