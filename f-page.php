<?php
/**
  * Template Name: Front Page
  * @package eyalb
  * front-page.php
  */
?>
<?php get_header(); ?>

	<div class="col-12 first3 clearfix">
		<div class="row">
			
			<?php

				// The Query
				$args1 = array(
					'post_type'				=> 'post',
					'posts_per_page'		=> 1,
					'ignore_sticky_posts'	=> true,
					'cat'					=> 6
				);
				$query1 = new WP_Query( $args1 );

				if ( $query1->have_posts() ) {
					// The Loop
					while ( $query1->have_posts() ) {
						$query1->the_post();

						$img = get_the_post_thumbnail_url('','medium');

						echo '<div class="col-12 col-md-4 p-0 ch">';
						echo '	<a href="'.get_the_permalink().'">';
						echo '		<div class="fp_feat_img bg-img-el" style="background-image:url('.$img.')">';
						echo '		</div>';
						echo '		<span class="fp_ttl_cont">';
						if ( empty( get_the_title() ) ) {
							echo 'No Title';
						} else {
							echo get_the_title();
						}
						echo '		</span>';
						echo '	</a>';
						echo '</div>';
					}

					/* Restore original Post Data 
					 * NB: Because we are using new WP_Query we aren't stomping on the 
					 * original $wp_query and it does not need to be reset with 
					 * wp_reset_query(). We just need to set the post data back up with
					 * wp_reset_postdata().
					 */
					wp_reset_postdata();
				}

			?>

			<?php

				// The Query
				$args2 = array(
					'post_type'				=> 'post',
					'posts_per_page'		=> 1,
					'ignore_sticky_posts'	=> true,
					'cat'					=> 5
				);
				$query2 = new WP_Query( $args2 );

				if ( $query2->have_posts() ) {
					// The Loop
					while ( $query2->have_posts() ) {
						$query2->the_post();

						$img = get_the_post_thumbnail_url('','medium');

						echo '<div class="col-12 col-md-4 p-0 ch">';
						echo '	<a href="'.get_the_permalink().'">';
						echo '		<div class="fp_feat_img bg-img-el" style="background-image:url('.$img.')">';
						echo '		</div>';
						echo '		<span class="fp_ttl_cont">';
						if ( empty( get_the_title() ) ) {
							echo 'No Title';
						} else {
							echo get_the_title();
						}
						echo '		</span>';
						echo '	</a>';
						echo '</div>';

					}

					/* Restore original Post Data 
					 * NB: Because we are using new WP_Query we aren't stomping on the 
					 * original $wp_query and it does not need to be reset with 
					 * wp_reset_query(). We just need to set the post data back up with
					 * wp_reset_postdata().
					 */
					wp_reset_postdata();
				}

			?>

			<?php

				// The Query
				$args3 = array(
					'post_type'				=> 'post',
					'posts_per_page'		=> 1,
					'ignore_sticky_posts'	=> true,
					'cat'					=> 34
				);
				$query3 = new WP_Query( $args3 );

				if ( $query3->have_posts() ) {
					// The Loop
					while ( $query3->have_posts() ) {
						$query3->the_post();

						$img = get_the_post_thumbnail_url('','medium');

						echo '<div class="col-12 col-md-4 p-0 ch">';
						echo '	<a href="'.get_the_permalink().'">';
						echo '		<div class="fp_feat_img bg-img-el" style="background-image:url('.$img.')">';
						echo '		</div>';
						echo '		<span class="fp_ttl_cont">';
						if ( empty( get_the_title() ) ) {
							echo 'No Title';
						} else {
							echo get_the_title();
						}
						echo '		</span>';
						echo '	</a>';
						echo '</div>';

					}

					/* Restore original Post Data 
					 * NB: Because we are using new WP_Query we aren't stomping on the 
					 * original $wp_query and it does not need to be reset with 
					 * wp_reset_query(). We just need to set the post data back up with
					 * wp_reset_postdata().
					 */
					wp_reset_postdata();
				}

			?>
		</div>
	</div>
	<main id="main" class="site-main col-12 col-lg-8 front-page" role="main">
		<?php
//			if( have_posts() ) {
//				while( have_posts() ) {
//					the_post();
//					get_template_part( 'includes/front/template-parts/content', get_post_format() );
//				}
//			}
		?>
		
		<h3 class="fp_ttl">Must Read</h3>
		<ul class="next-cat">
			
			<?php

				// The Query
				$args4 = array(
					'post_type'				=> 'post',
					'posts_per_page'		=> 1,
					'ignore_sticky_posts'	=> true,
					'cat'					=> 19
				);
				$query4 = new WP_Query( $args4 );

				if ( $query4->have_posts() ) {
					// The Loop
					while ( $query4->have_posts() ) {
						$query4->the_post();

						$img = get_the_post_thumbnail_url('','medium');

						echo '<li class="first">';
						echo '	<a href="'.get_the_permalink().'">';
						echo '		<div class="fp_feat_img bg-img-el" style="background-image:url('.$img.')">';
						echo '		</div>';
						echo '		<span class="fp_ttl_cont">';
						if ( empty( get_the_title() ) ) {
							echo 'No Title';
						} else {
							echo get_the_title();
						}
						echo '		</span>';
						echo '	</a>';
						echo '</li>';

					}

					/* Restore original Post Data 
					 * NB: Because we are using new WP_Query we aren't stomping on the 
					 * original $wp_query and it does not need to be reset with 
					 * wp_reset_query(). We just need to set the post data back up with
					 * wp_reset_postdata().
					 */
					wp_reset_postdata();
				}

			?>
		
			<?php

				// The Query
				$args5 = array(
					'post_type'				=> 'post',
					'posts_per_page'		=> 4,
					'ignore_sticky_posts'	=> true,
					'cat'					=> 19,
					'offset'				=> 1
				);
				$query5 = new WP_Query( $args5 );

				if ( $query5->have_posts() ) {
					// The Loop
					while ( $query5->have_posts() ) {
						$query5->the_post();

						$img = get_the_post_thumbnail_url('','medium');

						echo '<li>';
						echo '	<div class="row">';
						echo '		<div class="col-12 col-md-4">';
						echo '			<a href="'.get_the_permalink().'" class="imglnk">';
						echo '				<span class="fp_feat_img bg-img-el" style="background-image:url('.$img.')">';		
						echo '				</span">';// .fp_feat_img
						echo '			</a>';
						echo '		</div>';// .col-md-4
						echo '		<div class="col-12 col-md-8">';
						echo '			<h3 class="fp_post_ttl">';
						echo '				<a href="'.get_the_permalink().'">';
						if ( empty( get_the_title() ) ) {
							echo 'No Title';
						} else {
							echo get_the_title();
						}
						echo '				</a>';
						echo '			</h3>';
						echo 			get_the_excerpt();
						echo '		</div>';// .col-md-8
						echo '	</div>';// .row
						echo '</li>';

					}

					/* Restore original Post Data 
					 * NB: Because we are using new WP_Query we aren't stomping on the 
					 * original $wp_query and it does not need to be reset with 
					 * wp_reset_query(). We just need to set the post data back up with
					 * wp_reset_postdata().
					 */
					wp_reset_postdata();
				}

			?>
		
		</ul>
		
		
	</main>
	<?php get_sidebar(); ?>


<?php get_footer(); ?>