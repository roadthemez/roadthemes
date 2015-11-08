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
<?php global $road_opt;

$ft_col_class = '';
?>
	<div class="footer">
		
		<?php if(isset($road_opt)) { ?>
		<div class="footer-widgets">
			<div class="container">
				<div class="row">
					<?php
					if(isset($road_opt['widget_columns'])){
						switch ($road_opt['widget_columns']) {
							case '1':
								echo '<div class="col-xs-12">';
								dynamic_sidebar('footer-widget1');
								echo '</div>';
								break;
							case '2':
								echo '<div class="col-xs-12 col-md-6">';
								dynamic_sidebar('footer-widget1');
								echo '</div>';
								echo '<div class="col-xs-12 col-md-6">';
								dynamic_sidebar('footer-widget2');
								echo '</div>';
								break;
							case '31':
								echo '<div class="col-xs-12 col-md-3">';
								dynamic_sidebar('footer-widget1');
								echo '</div>';
								echo '<div class="col-xs-12 col-md-3">';
								dynamic_sidebar('footer-widget2');
								echo '</div>';
								echo '<div class="col-xs-12 col-md-6">';
								dynamic_sidebar('footer-widget3');
								echo '</div>';
								break;
							case '32':
								echo '<div class="col-xs-12 col-md-3">';
								dynamic_sidebar('footer-widget1');
								echo '</div>';
								echo '<div class="col-xs-12 col-md-6">';
								dynamic_sidebar('footer-widget2');
								echo '</div>';
								echo '<div class="col-xs-12 col-md-3">';
								dynamic_sidebar('footer-widget3');
								echo '</div>';
								break;
							case '33':
								echo '<div class="col-xs-12 col-md-6">';
								dynamic_sidebar('footer-widget1');
								echo '</div>';
								echo '<div class="col-xs-12 col-md-3">';
								dynamic_sidebar('footer-widget2');
								echo '</div>';
								echo '<div class="col-xs-12 col-md-3">';
								dynamic_sidebar('footer-widget3');
								echo '</div>';
								break;
							case '4':
								echo '<div class="col-xs-12 col-md-3">';
								dynamic_sidebar('footer-widget1');
								echo '</div>';
								echo '<div class="col-xs-12 col-md-3">';
								dynamic_sidebar('footer-widget2');
								echo '</div>';
								echo '<div class="col-xs-12 col-md-3">';
								dynamic_sidebar('footer-widget3');
								echo '</div>';
								echo '<div class="col-xs-12 col-md-3">';
								dynamic_sidebar('footer-widget4');
								echo '</div>';
								break;
						}
					}
					?>
				</div>
			</div>
		</div>
		<?php } ?>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8">
						<?php if( isset($road_opt['logo_footer']['url']) ){ ?>
							<div class="widget-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url($road_opt['logo_footer']['url']); ?>" alt="" /></a></div>
						<?php } ?>

						<div class="widget-copyright">
							<?php 
							if( isset($road_opt['copyright']) && $road_opt['copyright']!='' ) {
								echo wp_kses($road_opt['copyright'], array(
									'a' => array(
										'href' => array(),
										'title' => array()
									),
									'br' => array(),
									'em' => array(),
									'strong' => array(),
								));
							} else {
								echo 'Copyright <a href="'.esc_url( home_url( '/' ) ).'">'.get_bloginfo('name').'</a> '.date('Y').'. All Rights Reserved';
							}
							?>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="widget widget-social">
							<?php
							if(isset($road_opt['social_icons'])) {
								echo '<ul class="social-icons">';
								foreach($road_opt['social_icons'] as $key=>$value ) {
									if($value!=''){
										if($key=='vimeo'){
											echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>';
										} else {
											echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
										}
									}
								}
								echo '</ul>';
							}
							?>
						</div>
						<?php if( isset($road_opt['bottom_menu']) && $road_opt['bottom_menu']!='' ) {
							$btmenu_args = array(
								'menu_class'      => 'nav_menu',
								'menu'         => $road_opt['bottom_menu'],
							); ?>
							<div class="bottom-menu">
								<?php wp_nav_menu( $btmenu_args ); ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>