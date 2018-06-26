<?php
/**
 * @package eyalb
 * includes/front/template-parts/content.php
 *
 * Standard Post Format
 */
?>
 <?php
	if ( csseco_get_post_attachment() ) {
		$ficls = 'hasFI';
	} else {
		$ficls = '';
	}
?>


<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'csseco-format-standard', $ficls ) ); ?>>
	<header class="entry-header">
        <?php
            the_title(
                '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">',
                '</a></h1>'
            );
        ?>
        <div class="entry-meta">
            <?php echo csseco_posted_meta(); ?>
        </div><!-- /.entry-meta -->
	</header><!--/.entry-header-->
	<div class="entry-content">
	    <?php
            if ( csseco_get_post_attachment() ) {
        ?>
            <a class="standard-featured-link" href="<?php the_permalink(); ?>">
                <span class="standard-featured bg-img-el" style="background-image: url(<?php echo csseco_get_post_attachment(); ?>);"></span>
            </a>
		<?php } ?>
		<div class="entry-excerpt">
			<?php the_excerpt(); ?>
			<div class="button-container text-left">
				<a href="<?php the_permalink(); ?>" class="btn btn-default">
					<?php _e( 'Read More', 'eyalb' ); ?>
				</a>
			</div><!-- /.button-container -->
		</div><!-- /.entry-excerpt -->
		
	</div><!-- /.entry-content -->
	<footer class="entry-footer">
	    <?php echo csseco_posted_footer(); ?>
	</footer><!-- /.entry-footer -->
</article>