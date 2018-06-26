<?php
/**
  * @package eyalb
  * includes/front/widgets/.php
  *
  */

// https://www.youtube.com/watch?v=OJdIUU1pjl4&list=PLriKzYyLb28kpEnFFi9_vJWPf5-_7d3rX&index=51
//class CSSeco_Profile_Widget extends WP_Widget {
//	
//}

// Save posts views
function eyalb_save_post_views( $postID ) {
	
	$metaKey = 'csseco_post_views';
	$views = get_post_meta( $postID, $metaKey, true );
	
	$count = ( empty( $views ) ? 0 : $views );
	$count++;
	
	update_post_meta( $postID, $metaKey, $count );
	
	// echo '<h1>'.$views.'</h1>';
	
}
remove_action( 'wp_head', 'adjacent_post_rel_link_wp_head', 10, 0 );

include 'widgets/CSSeco_Popular_Posts_Widget.php';
include 'widgets/CSSeco_Recent_Posts_Widget.php';
include 'widgets/CSSeco_Popular_Category_Posts_Widget.php';