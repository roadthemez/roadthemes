<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Road Themes already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Road_Themes
 * @since Road Themes 1.0
 */
global $road_opt, $road_postthumb;

get_header();
?>
<?php 
$bloglayout = 'nosidebar';
if(isset($road_opt['blog_layout']) && $road_opt['blog_layout']!=''){
	$bloglayout = $road_opt['blog_layout'];
}
if(isset($_GET['layout']) && $_GET['layout']!=''){
	$bloglayout = $_GET['layout'];
}
$blogsidebar = 'right';
if(isset($road_opt['sidebarblog_pos']) && $road_opt['sidebarblog_pos']!=''){
	$blogsidebar = $road_opt['sidebarblog_pos'];
}
if(isset($_GET['sidebar']) && $_GET['sidebar']!=''){
	$blogsidebar = $_GET['sidebar'];
}
switch($bloglayout) {
	case 'sidebar':
		$blogclass = 'blog-sidebar';
		$blogcolclass = 9;
		$road_postthumb = 'sozo-category-thumb'; //750x510px
		break;
	default:
		$blogclass = 'blog-nosidebar';
		$blogcolclass = 12;
		$blogsidebar = 'none';
		$road_postthumb = 'sozo-post-thumb'; //500x500px
}
?>
<div class="main-container">
	
	<div class="container">
		
		<?php RoadThemes::road_breadcrumb(); ?>
		<header class="entry-header">
			<div class="container">
				<h1 class="entry-title"><?php if(isset($road_opt)) { echo esc_html($road_opt['blog_header_text']); } else { esc_html_e('Blog', 'roadthemes');}  ?></h1>
			</div>
		</header>
		<div class="row">
			
			<?php if($blogsidebar=='left') : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
			
			<div class="col-xs-12 <?php echo 'col-md-'.$blogcolclass; ?>">
				<div class="page-content blog-page <?php echo esc_attr($blogclass); if($blogsidebar=='left') {echo ' left-sidebar'; } if($blogsidebar=='right') {echo ' right-sidebar'; } ?>">
					<?php if ( have_posts() ) : ?>
						<header class="archive-header">
							<h1 class="archive-title"><?php
								if ( is_day() ) :
									printf( esc_html__( 'Daily Archives: %s', 'roadthemes' ), '<span>' . get_the_date() . '</span>' );
								elseif ( is_month() ) :
									printf( esc_html__( 'Monthly Archives: %s', 'roadthemes' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'roadthemes' ) ) . '</span>' );
								elseif ( is_year() ) :
									printf( esc_html__( 'Yearly Archives: %s', 'roadthemes' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'roadthemes' ) ) . '</span>' );
								else :
									esc_html_e( 'Archives', 'roadthemes' );
								endif;
							?></h1>
						</header><!-- .archive-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/* Include the post format-specific template for the content. If you want to
							 * this in a child theme then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );

						endwhile;
						?>
						
						<div class="pagination">
							<?php RoadThemes::road_pagination(); ?>
						</div>
						
					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php if( $blogsidebar=='right') : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>