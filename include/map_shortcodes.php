<?php
//Shortcodes for Visual Composer

add_action( 'vc_before_init', 'road_vc_shortcodes' );
function road_vc_shortcodes() {
	
	//Brand logos
	vc_map( array(
		'name' => esc_html__( 'Brand Logos', 'roadthemes' ),
		'base' => 'ourbrands',
		'class' => '',
		'category' => esc_html__( 'Theme', 'roadthemes'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of columns', 'roadthemes' ),
				'param_name' => 'colsnumber',
				'value' => esc_html__( '6', 'roadthemes' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of rows', 'roadthemes' ),
				'param_name' => 'rowsnumber',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
			),
		)
	) );
	
	//MailPoet Newsletter Form
	vc_map( array(
		'name' => esc_html__( 'Newsletter Form (MailPoet)', 'roadthemes' ),
		'base' => 'wysija_form',
		'class' => '',
		'category' => esc_html__( 'Theme', 'roadthemes'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Form ID', 'roadthemes' ),
				'param_name' => 'id',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'Enter form ID here', 'roadthemes' ),
			),
		)
	) );
	
	//Latest posts
	vc_map( array(
		'name' => esc_html__( 'Latest posts', 'roadthemes' ),
		'base' => 'latestposts',
		'class' => '',
		'category' => esc_html__( 'Theme', 'roadthemes'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of posts', 'roadthemes' ),
				'param_name' => 'posts_per_page',
				'value' => esc_html__( '5', 'roadthemes' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Image scale', 'roadthemes' ),
				'param_name' => 'image',
				'value' => array(
						'Wide'	=> 'wide',
						'Square'	=> 'square',
					),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Excerpt length', 'roadthemes' ),
				'param_name' => 'length',
				'value' => esc_html__( '20', 'roadthemes' ),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of columns', 'roadthemes' ),
				'param_name' => 'colsnumber',
				'value' => esc_html__( '4', 'roadthemes' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of rows', 'roadthemes' ),
				'param_name' => 'rowsnumber',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
			),
		)
	) );
	
	//Testimonials
	vc_map( array(
		'name' => esc_html__( 'Testimonials', 'roadthemes' ),
		'base' => 'woothemes_testimonials',
		'class' => '',
		'category' => esc_html__( 'Theme', 'roadthemes'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of testimonial', 'roadthemes' ),
				'param_name' => 'limit',
				'value' => esc_html__( '10', 'roadthemes' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Display Author', 'roadthemes' ),
				'param_name' => 'display_author',
				'value' => array(
					'Yes'	=> 'true',
					'No'	=> 'false',
				),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Display Avatar', 'roadthemes' ),
				'param_name' => 'display_avatar',
				'value' => array(
					'Yes'	=> 'true',
					'No'	=> 'false',
				),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Avatar image size', 'roadthemes' ),
				'param_name' => 'size',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'Avatar image size in pixels. Default is 50', 'roadthemes' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Display URL', 'roadthemes' ),
				'param_name' => 'display_url',
				'value' => array(
					'Yes'	=> 'true',
					'No'	=> 'false',
				),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Category', 'roadthemes' ),
				'param_name' => 'category',
				'value' => esc_html__( '0', 'roadthemes' ),
				'description' => esc_html__( 'ID/slug of the category. Default is 0', 'roadthemes' ),
			),
		)
	) );
	
	
	//Rotating tweets
	vc_map( array(
		'name' => esc_html__( 'Rotating tweets', 'roadthemes' ),
		'base' => 'rotatingtweets',
		'class' => '',
		'category' => esc_html__( 'Theme', 'roadthemes'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Twitter user name', 'roadthemes' ),
				'param_name' => 'screen_name',
				'value' => esc_html__( '', 'roadthemes' ),
			),
		)
	) );
	
	//Google map
	vc_map( array(
		'name' => esc_html__( 'Google map', 'roadthemes' ),
		'base' => 'road_map',
		'class' => '',
		'category' => esc_html__( 'Theme', 'roadthemes'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Map Height', 'roadthemes' ),
				'param_name' => 'map_height',
				'value' => esc_html__( '400', 'roadthemes' ),
				'description' => esc_html__( 'Map height in pixels. Default is 400', 'roadthemes' ),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Map Zoom', 'roadthemes' ),
				'param_name' => 'map_zoom',
				'value' => esc_html__( '17', 'roadthemes' ),
				'description' => esc_html__( 'Map zoom level, min 0, max 21. Default is 17', 'roadthemes' ),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'roadthemes' ),
				'param_name' => 'lat1',
				'value' => esc_html__( '', 'roadthemes' ),
				'group' => 'Marker 1'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'roadthemes' ),
				'param_name' => 'long1',
				'value' => esc_html__( '', 'roadthemes' ),
				'group' => 'Marker 1'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'roadthemes' ),
				'param_name' => 'address1',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'roadthemes' ),
				'group' => 'Marker 1'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'roadthemes' ),
				'param_name' => 'marker1',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'Upload marker image', 'roadthemes' ),
				'group' => 'Marker 1'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'roadthemes' ),
				'param_name' => 'description1',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, h1, h2, h3', 'roadthemes' ),
				'group' => 'Marker 1'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'roadthemes' ),
				'param_name' => 'lat2',
				'value' => esc_html__( '', 'roadthemes' ),
				'group' => 'Marker 2'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'roadthemes' ),
				'param_name' => 'long2',
				'value' => esc_html__( '', 'roadthemes' ),
				'group' => 'Marker 2'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'roadthemes' ),
				'param_name' => 'address2',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'roadthemes' ),
				'group' => 'Marker 2'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'roadthemes' ),
				'param_name' => 'marker2',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'Upload marker image', 'roadthemes' ),
				'group' => 'Marker 2'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'roadthemes' ),
				'param_name' => 'description2',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, p, h2, h2, h3', 'roadthemes' ),
				'group' => 'Marker 2'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'roadthemes' ),
				'param_name' => 'lat3',
				'value' => esc_html__( '', 'roadthemes' ),
				'group' => 'Marker 3'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'roadthemes' ),
				'param_name' => 'long3',
				'value' => esc_html__( '', 'roadthemes' ),
				'group' => 'Marker 3'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'roadthemes' ),
				'param_name' => 'address3',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'roadthemes' ),
				'group' => 'Marker 3'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'roadthemes' ),
				'param_name' => 'marker3',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'Upload marker image', 'roadthemes' ),
				'group' => 'Marker 3'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'roadthemes' ),
				'param_name' => 'description3',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, p, h3, h3, h3', 'roadthemes' ),
				'group' => 'Marker 3'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'roadthemes' ),
				'param_name' => 'lat4',
				'value' => esc_html__( '', 'roadthemes' ),
				'group' => 'Marker 4'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'roadthemes' ),
				'param_name' => 'long4',
				'value' => esc_html__( '', 'roadthemes' ),
				'group' => 'Marker 4'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'roadthemes' ),
				'param_name' => 'address4',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'roadthemes' ),
				'group' => 'Marker 4'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'roadthemes' ),
				'param_name' => 'marker4',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'Upload marker image', 'roadthemes' ),
				'group' => 'Marker 4'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'roadthemes' ),
				'param_name' => 'description4',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, p, h4, h4, h4', 'roadthemes' ),
				'group' => 'Marker 4'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'roadthemes' ),
				'param_name' => 'lat5',
				'value' => esc_html__( '', 'roadthemes' ),
				'group' => 'Marker 5'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'roadthemes' ),
				'param_name' => 'long5',
				'value' => esc_html__( '', 'roadthemes' ),
				'group' => 'Marker 5'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'roadthemes' ),
				'param_name' => 'address5',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'roadthemes' ),
				'group' => 'Marker 5'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'roadthemes' ),
				'param_name' => 'marker5',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'Upload marker image', 'roadthemes' ),
				'group' => 'Marker 5'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'roadthemes' ),
				'param_name' => 'description5',
				'value' => esc_html__( '', 'roadthemes' ),
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, p, h5, h5, h5', 'roadthemes' ),
				'group' => 'Marker 5'
			),
		)
	) );
}
?>