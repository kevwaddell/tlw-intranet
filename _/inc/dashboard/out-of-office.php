<div class="scrollable-feed">
	
	<div class="scrollable-feed-inner">
		<ul class="list-unstyled">
			<li>
				<?php 
				$author_id = 1; 
				$user = get_user_by( 'id', $author_id );
				//'<pre>';print_r($user);echo '</pre>';
				?>
				<a href="<?php echo get_author_posts_url( $author_id, $user->user_nicename); ?>">Kevin Waddell</a>
				<span class="date">Return Date: 12/4/2014</span>
			</li>
			<li>
				<a href="">Peter McKenna</a>
				<span class="date">Return Date: 18/5/2014</span>
			</li>
			<li>
				<a href="">John Burn</a>
				<span class="date">Return Date: 28/3/2014</span>
			</li>
			<li>
				<a href="">Claire Thornton</a>
				<span class="date">Return Date: 12/4/2014</span>
			</li>
			<li>
				<a href="">Laura Brown</a>
				<span class="date">Return Date: 12/4/2014</span>
			</li>
		</ul>
	</div>

</div>