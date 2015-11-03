<?php
$_SESSION["preset"] = 1;
/**
 * Template Name: Demo Second
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php global $road_opt; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php 
if(isset($road_opt['opt-favicon']) && $road_opt['opt-favicon']!="") { 
	if(is_ssl()){
		$road_opt['opt-favicon'] = str_replace('http', 'https', $road_opt['opt-favicon']);
	}
?>
	<link rel="icon" type="image/png" href="<?php echo esc_url($road_opt['opt-favicon']['url']);?>">
<?php } ?>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript">
var road_brandnumber = <?php if(isset($road_opt['brandnumber'])) { echo esc_js($road_opt['brandnumber']); } else { echo '6'; } ?>,
	road_brandscroll = <?php echo esc_js($road_opt['brandscroll'])==1 ? 'true': 'false'; ?>,
	road_brandscrollnumber = <?php if(isset($road_opt['brandscrollnumber'])) { echo esc_js($road_opt['brandscrollnumber']); } else { echo '2';} ?>,
	road_brandpause = <?php if(isset($road_opt['brandpause'])) { echo esc_js($road_opt['brandpause']); } else { echo '3000'; } ?>,
	road_brandanimate = <?php if(isset($road_opt['brandanimate'])) { echo esc_js($road_opt['brandanimate']); } else { echo '700';} ?>;
var road_blogscroll = <?php echo esc_js($road_opt['blogscroll'])==1 ? 'true': 'false'; ?>,
	road_blogpause = <?php if(isset($road_opt['blogpause'])) { echo esc_js($road_opt['blogpause']); } else { echo '3000'; } ?>,
	road_bloganimate = <?php if(isset($road_opt['bloganimate'])) { echo esc_js($road_opt['bloganimate']); } else { echo '700'; } ?>;
var road_testiscroll = <?php echo esc_js($road_opt['testiscroll'])==1 ? 'true': 'false'; ?>,
	road_testipause = <?php if(isset($road_opt['testipause'])) { echo esc_js($road_opt['testipause']); } else { echo '3000'; } ?>,
	road_testianimate = <?php if(isset($road_opt['testianimate'])) { echo esc_js($road_opt['testianimate']); } else { echo '700'; } ?>;
var road_menu_number = <?php if(isset($road_opt['vertical_menu_items'])) { echo esc_js((int)$road_opt['vertical_menu_items']+1); } else { echo '9';} ?>;
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class('home'); ?>>
	<div id="yith-wcwl-popup-message" style="display:none;"><div id="yith-wcwl-message"></div></div>
	<div class="wrapper <?php if($road_opt['page_layout']=='box'){echo 'box-layout';}?>">
		<div class="page-wrapper">
			<div class="header-container layout2 second">
				<?php if(isset($road_opt)) { ?>
					<div class="top-bar">
						<div class="container-fluid">
								<?php if( isset($road_opt['images_top_bar']['url']) ){ ?>
									<div class="images-top-bar"><a href="<?php echo esc_attr($road_opt['images_top_bar_link']);?>"><img src="<?php echo esc_url($road_opt['images_top_bar']['url']); ?>" alt="" /></a></div>
								<?php } ?>
							<div class="col-xs-12 col-lg-4 col-md-4">
								<div class="top-message"><?php echo esc_html($road_opt['welcome_message']); ?></div>
							</div>	
							<div class="col-xs-12 col-lg-8 col-md-8">
								<?php if(isset($road_opt) && $road_opt['countdown_date']!=''){ ?>
									<div class="countdown" data-time="<?php echo esc_attr($road_opt['countdown_date']);?>"><?php echo esc_html($road_opt['countdown_date']);?></div>
								<?php }?>
							</div>
						</div>
					</div>
				<?php } ?>
				<div class="header clearfix">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-lg-7 col-lg-push-2 f-logo">
								<?php if( isset($road_opt['logo_main']['url']) ){ ?>
									<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url($road_opt['logo_main']['url']); ?>" alt="" /></a></div>
								<?php
								} else { ?>
									<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php
								} ?>
							
							
								<div class="horizontal-menu">
									<div class="visible-large">
										<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'primary-menu-container', 'menu_class' => 'nav-menu' ) ); ?>
									</div>
								</div>
							</div>
						
							<div class="col-xs-12 col-lg-2 col-lg-pull-7 visible-large">
								<div class="nav-categories">
									<?php
									$cat_menu_class = '';
									if(isset($road_opt['vertical_menu_home']) && $road_opt['vertical_menu_home']) {
										//$cat_menu_class .=' show_home';
									}
									if(isset($road_opt['vertical_menu_sub']) && $road_opt['vertical_menu_sub']) {
										//$cat_menu_class .=' show_inner';
									}
									?>
									<div class="categories-menu visible-large <?php echo esc_attr($cat_menu_class); ?>">
										<div class="catemenu-toggler"><span><?php if(isset($road_opt)) { echo esc_html($road_opt['vertical_menu_label']); } else { esc_html_e('Category', 'roadthemes'); } ?></span><i class="fa fa-align-left"></i></div>
										<?php wp_nav_menu( array( 'theme_location' => 'categories', 'container_class' => 'categories-menu-container', 'menu_class' => 'categories-menu' ) ); ?>
										<div class="morelesscate">
											<span class="morecate"><i class="fa fa-plus"></i><?php if ( isset($road_opt['vertical_more_label']) && $road_opt['vertical_more_label']!='' ) { echo esc_html($road_opt['vertical_more_label']); } else { esc_html_e('More Categories', 'roadthemes'); } ?></span>
											<span class="lesscate"><i class="fa fa-minus"></i><?php if ( isset($road_opt['vertical_less_label']) && $road_opt['vertical_less_label']!='' ) { echo esc_html($road_opt['vertical_less_label']); } else { esc_html_e('Close Menu', 'roadthemes'); } ?></span>
										</div>
									</div>
								</div>		
							</div>
							<div class="col-xs-12 col-lg-3">
							
								<div class="switcher">
									<div class="currency"><?php do_action('currency_switcher'); ?></div>
									<?php do_action('icl_language_selector'); ?>
								</div>
							
								<?php if( isset($road_opt['top_menu']) ) {
									$menu_object = wp_get_nav_menu_object( $road_opt['top_menu'] );
									$menu_args = array(
										'menu_class'      => 'nav_menu',
										'menu'         => $road_opt['top_menu'],
									); ?>
									<div class="top-menu widget">
										<?php wp_nav_menu( $menu_args ); ?>
									</div>
								<?php } ?>
							
							
								<?php if ( class_exists( 'WC_Widget_Cart' ) ) {
									the_widget('Custom_WC_Widget_Cart'); 
								} ?>
							
								<div class="search-switcher">
									<?php if( class_exists('WC_Widget_Product_Categories') && class_exists('WC_Widget_Product_Search') ) { ?>
									<div class="header-search">
										<div class="cate-toggler"><?php esc_html_e('All Categories', 'roadthemes');?></div>
										<?php the_widget('WC_Widget_Product_Categories', array('hierarchical' => true, 'title' => 'Categories', 'orderby' => 'order')); ?>
										<?php the_widget('WC_Widget_Product_Search', array('title' => 'Search')); ?>
									</div>
									<?php } ?>
								</div>
								
								<div class="visible-small mobile-menu">
									<div class="mbmenu-toggler"><?php echo esc_html($road_opt['mobile_menu_label']);?><span class="mbmenu-icon"><i class="fa fa-bars"></i></span></div>
									<div class="clearfix"></div>
									<?php wp_nav_menu( array( 'theme_location' => 'mobilemenu', 'container_class' => 'mobile-menu-container', 'menu_class' => 'nav-menu' ) ); ?>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="main-container">
				<div class="page-content front-page">
					<?php while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</article>
					<?php endwhile; ?>
					
				</div>
			</div>
			<?php get_footer(); ?>
		</div><!-- .page -->
	</div><!-- .wrapper -->
	<!--<div class="road_loading"></div>-->
	<div id="back-top" class="hidden-xs hidden-sm hidden-md"></div>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/ie8.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_footer(); ?>
</body>
</html>
<?php unset($_SESSION["preset"]); ?>