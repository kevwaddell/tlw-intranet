<?php
add_action('gform_after_submission_2', 'add_meeting_data', 10, 2);

function add_meeting_data($entry, $form) {
	
	$post = get_post($entry['post_id']);
	$user_email = $entry['7'];
	$user = get_user_by( 'email', $user_email );
	$date_raw = $entry['2'];
	$date = date('Ymd',strtotime($date_raw));
	$time_start_raw = $entry['3'];
	$start_time = strtotime($date_raw.' '.$time_start_raw);
	$time_end_raw = $entry['4'];
	$end_time = strtotime($date_raw.' '.$time_end_raw); 
	
	add_post_meta($entry['post_id'], '_booked_by', 'field_533be7b6e03cb', true);    
	add_post_meta($entry['post_id'], 'booked_by', $post->post_author, true); 
	add_post_meta($entry['post_id'], '_meeting_date', 'field_533be32c54fbc', true);  
	add_post_meta($entry['post_id'], 'meeting_date', $date, true);  
	add_post_meta($entry['post_id'], '_start_time', 'field_533be5353ffec', true);  
	add_post_meta($entry['post_id'], 'start_time', $start_time, true);  
	add_post_meta($entry['post_id'], '_end_time', 'field_533be5d13ffed', true); 
	add_post_meta($entry['post_id'], 'end_time', $end_time, true); 
}
?>