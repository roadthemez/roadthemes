<?php
function road_latestposts_shortcode( $atts ) {
	global $road_opt;
	
	$atts = shortcode_atts( array(
		'posts_per_page' => 5,
		'order' => 'DESC',
		'orderby' => 'post_date',
		'image' => 'wide', //square
		'length' => 20
	), $atts, 'latestposts' );

	
	if($atts['image']=='wide'){
		$imagesize = 'sozo-post-thumbwide';
	} else {
		$imagesize = 'sozo-post-thumb';
	}
	$html = '';

	$postargs = array(
		'posts_per_page'   => $atts['posts_per_page'],
		'offset'           => 0,
		'category'         => '',
		'category_name'    => '',
		'orderby'          => $atts['orderby'],
		'order'            => $atts['order'],
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'post',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'post_status'      => 'publish',
		'suppress_filters' => true );
	
	$postslist = get_posts( $postargs );

	$html.='<div class="posts-carousel">';

			foreach ( $postslist as $post ) {
				$html.='<div class="item-col">';
					$html.='<div class="post-wrapper">';
						
						$html.='<div class="post-thumb">';
							$html.='<a href="'.get_the_permalink($post->ID).'">'.get_the_post_thumbnail($post->ID, $imagesize).'</a>';
						$html.='</div>';
						
						$html.='<div class="post-info">';
						
							$html.='<h3 class="post-title"><a href="'.get_the_permalink($post->ID).'">'.get_the_title($post->ID).'</a></h3>';
							
							$html.='<span class="post-date"><span class="day">'.get_the_date('d', $post->ID).'</span><span class="month">'.get_the_date('M', $post->ID).'</span></span>';
							
							$html.='<div class="post-excerpt">';
								$html.= RoadThemes::road_excerpt_by_id($post, $length = $atts['length']);
							$html.='</div>';
							
						$html.='</div>';

					$html.='</div>';
				$html.='</div>';

			}
	$html.='</div>';

	wp_reset_postdata();
	
	return $html;
}
add_shortcode( 'latestposts', 'road_latestposts_shortcode' );
?>