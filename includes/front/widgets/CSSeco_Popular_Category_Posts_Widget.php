<?php
/**
  * @package eyalb
  * includes/front/widgets/CSSeco_Popular_Category_Posts_Widget.php
  *
  */

// Popular posts widget
class CSSeco_Popular_Category_Posts_Widget extends WP_Widget {
	
	// setup the widget name, description and shit
	public function __construct() {
		
		$widget_ops = array(
			'classname'	=> 'csseco-popular-category-posts-widget',
			'description' => 'Custom Popular Category Posts Widget'
		);
		parent::__construct( 'csseco_popular_category_posts', 'CSSeco Popular Category Posts', $widget_ops );
		
	}
	
	// backend display
	public function form( $instance ) {
		
		$title = ( !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : __( 'Popular Category Posts', 'eyalb' ) );
		$tot = ( !empty( $instance[ 'tot' ] ) ? absint( $instance[ 'tot' ] ) : 4 );
		
		$output = '<p>';
		$output .= '<label for="' . esc_attr( $this->get_field_id( 'title' ) ) . '">Title:</label>';
		$output .= '<input type="text" class="widefat" id="' . esc_attr( $this->get_field_id( 'title' ) ) . '" name="' . esc_attr( $this->get_field_name( 'title' ) ) . '" value="' . esc_attr( $title ) . '" />';
		$output .= '</p>';
		
		$output .= '<p>';
		$output .= '<label for="' . esc_attr( $this->get_field_id( 'tot' ) ) . '">Number of Posts:</label>';
		$output .= '<input type="number" class="widefat" id="' . esc_attr( $this->get_field_id( 'tot' ) ) . '" name="' . esc_attr( $this->get_field_name( 'tot' ) ) . '" value="' . esc_attr( $tot ) . '" />';
		$output .= '</p>';
		
		echo $output;
		
	}
	
	// update widget
	public function update( $new_instance, $old_instance ) {
		
		$instance = array();
		$instance[ 'title' ] = ( !empty( $new_instance[ 'title' ] ) ? strip_tags( $new_instance[ 'title' ] ) : '' );
		$instance[ 'tot' ] = ( !empty( $new_instance[ 'tot' ] ) ? absint( strip_tags( $new_instance[ 'tot' ] ) ) : 0 );
		
		return $instance;
		
	}
	
	// frontend display
	public function widget( $args, $instance ) {
		
		$tot = absint( $instance[ 'tot' ] );
		
		$posts_args = array(
			'post_type'				=> 'post',
			'posts_per_page'		=> $tot,
			'ignore_sticky_posts'	=> true,
			'meta_key'				=> 'csseco_post_views',
			'orderby'				=> 'meta_value_num',
			'order'					=> 'DESC'
		);
		
		$posts_query = new WP_Query( $posts_args );
		
		echo $args[ 'before_widget' ];
		
		if ( !empty( $instance[ 'title' ] ) ) {
			echo $args[ 'before_title' ] . apply_filters( 'widget_title', $instance[ 'title' ] ) . $args[ 'after_title' ];
		}
		
//		function wt_get_category_count($input = '') {
//			global $wpdb;
//			if($input == '') {
//				$category = get_the_category();
//				return $category[0]->category_count;
//			}
//			elseif(is_numeric($input)) {
//				$SQL = "SELECT $wpdb->term_taxonomy.count FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id AND $wpdb->term_taxonomy.term_id=$input";
//				return $wpdb->get_var($SQL);
//			}
//			else {
//				$SQL = "SELECT $wpdb->term_taxonomy.count FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id AND $wpdb->terms.slug='$input'";
//				return $wpdb->get_var($SQL);
//			}
//		}
		
		if ( $posts_query->have_posts() ) {
			while ( $posts_query->have_posts() ) {
				$posts_query->the_post();
				
				//echo wt_get_category_count();
			}
		}
		
		echo $args[ 'after_widget' ];
		
	}
	
}
add_action( 'widgets_init', function() {
	register_widget( 'CSSeco_Popular_Category_Posts_Widget' );
});
