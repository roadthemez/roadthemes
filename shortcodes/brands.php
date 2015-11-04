<?php
function road_brands_shortcode( $atts ) {
	global $road_opt;
	$brand_index = 0;
	$brandfound=count($road_opt['brand_logos']);
	
	$atts = shortcode_atts( array(), $atts, 'ourbrands' );
	
	$rowsnumber = $atts['rowsnumber'];
	$colsnumber = $atts['colsnumber'];
	
	$html = '';
	
	if($road_opt['brand_logos']) {
		$html .= '<div class="brands-carousel">';
			foreach($road_opt['brand_logos'] as $brand) {
				if(is_ssl()){
					$brand['image'] = str_replace('http:', 'https:', $brand['image']);
				}
				$brand_index ++;
				if ( (0 == ( $brand_index - 1 ) % 2 ) || $brand_index == 1) {
					$html .= '<div class="group">';
				}
				$html .= '<div>';
				$html .= '<a href="'.$brand['url'].'" title="'.$brand['title'].'">';
					$html .= '<img src="'.$brand['image'].'" alt="'.$brand['title'].'" />';
				$html .= '</a>';
				$html .= '</div>';
				if ( ( ( 0 == $brand_index % 2 || $brandfound == $brand_index ))  ) {
					$html .= '</div>';
				}
			}
		$html .= '</div>';
	}
	
	return $html;
}
add_shortcode( 'ourbrands', 'road_brands_shortcode' );
?>