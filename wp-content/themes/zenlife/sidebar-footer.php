<?php
/**
 * The sidebar containing the main footer columns widget areas
 *
 */
?>

<div id="footer-cols">

	<div id="footer-cols-inner">

		<?php if ( is_active_sidebar( 'footer-column-1-widget-area' ) ) : ?>

					<?php 
						/**
						 * Display widgets dragged in 'Footer Columns 1' widget areas
						 */
					?>
					<div class="col3a">
						<?php dynamic_sidebar( 'footer-column-1-widget-area' ); ?>
					</div><!-- .col3a -->

		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'footer-column-2-widget-area' ) ) : ?>

					<?php 
						/**
						 * Display widgets dragged in 'Footer Columns 2' widget areas
						 */
					?>
					<div class="col3b">
						<?php dynamic_sidebar( 'footer-column-2-widget-area' ); ?>
					</div><!-- .col3b -->

		<?php endif; ?>
		

		<?php if ( is_active_sidebar( 'footer-column-3-widget-area' ) ) : ?>

					<?php 
						/**
						 * Display widgets dragged in 'Footer Columns 3' widget areas
						 */
					?>
					<div class="col3c">
						<?php dynamic_sidebar( 'footer-column-3-widget-area' ); ?>				
					</div><!-- .col3c -->

		<?php endif; ?>
		
		<div class="clear">
		</div><!-- .clear -->

	</div><!-- #footer-cols-inner -->

</div><!-- #footer-cols -->