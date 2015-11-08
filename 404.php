<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Road_Themes
 * @since Road Themes 1.0
 */

global $road_opt;

get_header('error');
if(is_ssl()){
	$road_opt['logo_error']['url'] = str_replace('http:', 'https:', $road_opt['logo_error']['url']);
}
?>
	<div class="wrapper-error404">
		<div class="container">
			<?php if( isset($road_opt['logo_error']['url']) ){ ?>
				<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url($road_opt['logo_error']['url']); ?>" alt="" /></a></div>
			<?php
			} else { ?>
				<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			} ?>
			<div class="search-form-wrapper">
				<h2><?php esc_html_e( "Oops, that page can't be found.", "roadthemes" ); ?></h2>
				<p class="home-link"><?php esc_html_e( "Can't find what you need, Take a moment and do a search below", 'roadthemes' ); ?></p>
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer('error'); ?>