<?php
/**
  * @package eyalb
  * footer.php
  */
?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /#primary -->
		<footer id="footer" class="site_footer">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-4">
						<?php dynamic_sidebar( 'footer_widget_left' ); ?>
					</div>
					<div class="col-12 col-lg-4">
						<?php dynamic_sidebar( 'footer_widget_middle' ); ?>
					</div>
					<div class="col-12 col-lg-4">
						<?php dynamic_sidebar( 'footer_widget_right' ); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-lg-3 flogo">
						<?php
                            $flogoPct = esc_attr( get_option( 'flogo' ) );
                            if ( @$flogoPct ) {
                        ?>
                            <div class="footer_csseco_logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img class="footer_csseco_logo_img" src="<?php print $flogoPct; ?>" alt="Logo" />
                                </a>
                            </div>
                        <?php
                            }
                        ?>
					</div>
					<div class="col-12 col-lg-5 about">
						<?php
                            $abus = get_option( 'fabout_us' );
                            if ( @$abus ) {
                        ?>
                            <h3>About Us</h3>
							<div class="csseco_fcustom_text">
								<?php echo $abus; ?>
							</div>
                        <?php
                            }
                        ?>
					</div>
					<div class="col-12 col-lg-4 fsm">
						<h3>Follow Us</h3>
						<?php
							$fbh = esc_attr( get_option( 'fb' ) );
							$gph = esc_attr( get_option( 'gp' ) );
							$twh = esc_attr( get_option( 'tw' ) );
						?>
						
						<a href="http://www.facebook.com/<?php echo $fbh; ?>" target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
						<a href="https://plus.google.com/u/0/<?php echo $gph; ?>" target="_blank"><i class="fab fa-google-plus-square" aria-hidden="true"></i></a>
						<a href="http://twitter.com/<?php echo $twh; ?>" target="_blank"><i class="fab fa-twitter-square" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</footer>
	</div><!-- /#site-wrapper -->
	<?php wp_footer(); ?>
</body>
</html>