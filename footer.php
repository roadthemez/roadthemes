<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Road_Themes
 * @since Road Themes 1.0
 */
?>
<?php global $road_opt; ?>
			<?php
			if ( !isset($road_opt['footer_layout']) || $road_opt['footer_layout']=='default' ) {
				get_footer('first');
			} else {
				get_footer($road_opt['footer_layout']);
			}
			?>
		</div><!-- .page -->
	</div><!-- .wrapper -->
	<?php if ( isset($road_opt['back_to_top']) && $road_opt['back_to_top'] ) { ?>
	<div id="back-top" class="hidden-xs hidden-sm hidden-md"></div>
	<?php } ?>
	<?php wp_footer(); ?>
</body>
</html>