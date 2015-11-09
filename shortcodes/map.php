<?php
function road_contact_map( $atts ) {
	global $road_mapid;
	
	if(!isset($road_mapid)){
		$road_mapid = 1;
	} else {
		$road_mapid++;
	}
	$atts = shortcode_atts( array(
		'map_height' => 400,
		'map_zoom' => 17,
		'lat1' => '',
		'long1' => '',
		'address1' => '',
		'marker1' => '',
		'description1' => '',
		'lat2' => '',
		'long2' => '',
		'address2' => '',
		'marker2' => '',
		'description2' => '',
		'lat3' => '',
		'long3' => '',
		'address3' => '',
		'marker3' => '',
		'description3' => '',
		'lat4' => '',
		'long4' => '',
		'address4' => '',
		'marker4' => '',
		'description4' => '',
		'lat5' => '',
		'long5' => '',
		'address5' => '',
		'marker5' => '',
		'description5' => '',
		
	), $atts, 'road_map' );
	
	$map_zoom = 17;
	if(intval($atts['map_zoom'])){
		$map_zoom = intval($atts['map_zoom']);
	}
	$map_height = 400;
	if(intval($atts['map_height'])){
		$map_height = intval($atts['map_height']);
	}
	
	$markers = array(
		array(
			'lat1' => $atts['lat1'],
			'long1' => $atts['long1'],
			'address1' => $atts['address1'],
			'marker1' => $atts['marker1'],
			'description1' => $atts['description1'],
		),
		array(
			'lat2' => $atts['lat2'],
			'long2' => $atts['long2'],
			'address2' => $atts['address2'],
			'marker2' => $atts['marker2'],
			'description2' => $atts['description2'],
		),
		array(
			'lat3' => $atts['lat3'],
			'long3' => $atts['long3'],
			'address3' => $atts['address3'],
			'marker3' => $atts['marker3'],
			'description3' => $atts['description3'],
		),
		array(
			'lat4' => $atts['lat4'],
			'long4' => $atts['long4'],
			'address4' => $atts['address4'],
			'marker4' => $atts['marker4'],
			'description4' => $atts['description4'],
		),
		array(
			'lat5' => $atts['lat5'],
			'long5' => $atts['long5'],
			'address5' => $atts['address5'],
			'marker5' => $atts['marker5'],
			'description5' => $atts['description5'],
		),
	);
	
	$html = '';
	
	$html.='<div class="map-wrapper">';
		$html.='<div id="map'.$road_mapid.'" class="map" style="height: '.$map_height.'px"></div>';
	$html.='</div>';
	
	//Add google map API
	wp_enqueue_script( 'gmap-api-js', 'http://maps.google.com/maps/api/js?sensor=false' , array(), '3', false );
	// Add jquery.gmap.js file
	wp_enqueue_script( 'jquery.gmap-js', get_template_directory_uri() . '/js/jquery.gmap.js', array(), '2.1.5', false );

	?>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#map<?php echo esc_attr($road_mapid);?>').gMap({
				scrollwheel: false,
				zoom: <?php echo esc_js($map_zoom);?>,
				
				markers:[
					<?php 
					$markeridx = 0;
					foreach($markers as $marker){
						$markeridx++;
						
						$map_desc = str_replace(array("\r\n", "\r", "\n"), "", $marker['description'.$markeridx]);
						$map_desc = addslashes($map_desc);
						
						if( $marker['address'.$markeridx]!='' || ($marker['lat'.$markeridx]!='' && $marker['long'.$markeridx]!='') ){ ?>
							{
								<?php if($marker['address'.$markeridx]!=''){ ?>
								address: '<?php echo  esc_js($marker['address'.$markeridx]);?>',
								<?php } else { ?>
								latitude: <?php echo  esc_js($marker['lat'.$markeridx]);?>,
								longitude: <?php echo  esc_js($marker['long'.$markeridx]);?>,
								<?php } ?>
								html: '<?php echo wp_kses($map_desc, array(
												'a' => array(
													'href' => array(),
													'title' => array()
												),
												'i' => array(
													'class' => array()
												),
												'br' => array(),
												'em' => array(),
												'strong' => array(),
												'h1' => array(),
												'h2' => array(),
												'h3' => array(),
											)); ?>',
								icon: {
									<?php if( isset($marker['marker'.$markeridx]) && $marker['marker'.$markeridx]!='') : ?>
									image: '<?php echo  wp_get_attachment_url( $marker['marker'.$markeridx]); ?>',
									<?php else : ?>
									image: '<?php echo get_template_directory_uri() . '/images/marker.png'; ?>',
									<?php endif; ?>
									iconsize: [40, 40],
									iconanchor: [40, 40]
								},
								popup: true
							},
						
						<?php }
					
					} ?>
				]
			});
		});
	</script>
	<?php
	
	return $html;
}
add_shortcode( 'road_map', 'road_contact_map' );
?>