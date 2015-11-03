<?php
function road_contact_map( $atts ) {
	global $road_opt;
	
	$html = '';
	
	if($road_opt['enable_map']) {
			$html.='<div class="map-wrapper">';
				$html.='<div id="map"></div>';
			$html.='</div>';
	}
	return $html;
}
add_shortcode( 'roadthemesmap', 'road_contact_map' );
?>