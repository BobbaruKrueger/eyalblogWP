<?php
/**
  * @package eyalb
  * includes/front/widgets/CSSeco_Popular_Posts_Widget.php
  *
  */

// Popular posts widget
class CSSeco_Popular_Posts_Widget extends WP_Widget {
	
	// setup the widget name, description and shit
	public function __construct() {
		
		$widget_ops = array(
			'classname'	=> 'csseco-popular-posts-widget',
			'description' => 'Custom Popular Posts Widget'
		);
		parent::__construct( 'csseco_popular_posts', 'CSSeco Popular Posts', $widget_ops );
		
	}
	
	// backend display
	public function form( $instance ) {
		
		$title = ( !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : __( 'Popular Posts', 'eyalb' ) );
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
		
		if ( $posts_query->have_posts() ) {
			echo '<ul>';
				while ( $posts_query->have_posts() ) {
					$posts_query->the_post();
					$img = get_the_post_thumbnail_url('','medium');
					//echo $img;
					if ( has_post_thumbnail() ) {
						echo '<li class="pthmb">';
						echo '	<div class="fpst-featured-img bg-img-el" style="background-image:url('.$img.')">';
								//the_post_thumbnail('medium');
						echo '	</div>';// .fpst-featured-img
					} else {
						echo '<li>';
					}
						echo '	<div class="cntnt">';
						echo '		<div class="table">';
						echo '			<div class="table-cell">';
						echo '				<div class="fpst-title">';
						echo '					<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
						echo '				</div>';// .fpst-title
						echo '				<div class="fpst-date">';
												the_date('Y/m/d \a\t g:ia');
						echo '				</div>';// .fpst-date
						echo '			</div>';// .table-cell
						echo '		</div>';// .table
						echo '	</div>';// .cntnt
						echo '</li>';
				}
			echo '</ul>';
		}
		
		echo $args[ 'after_widget' ];
		
	}
	
}
add_action( 'widgets_init', function() {
	register_widget( 'CSSeco_Popular_Posts_Widget' );
});
