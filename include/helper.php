<?php
//Add less compiler
function compileLessFile($input, $output, $params) {
    // include lessc.inc
    require_once( require_once( get_template_directory().'/include/lessc.inc.php' );
	
	$less = new lessc;
	$less->setVariables($params);
	
    // input and output location
    $inputFile = get_template_directory().'/less/'.$input;
    $outputFile = get_template_directory().'/css/'.$output;

    try {
		$less->compileFile($inputFile, $outputFile);
	} catch (Exception $ex) {
		echo "lessphp fatal error: ".$ex->getMessage();
	}
}
function compileChildLessFile($input, $output, $params) {
    // include lessc.inc
    require_once( plugin_dir_path( __FILE__ ).'less/lessc.inc.php' );
	
	$less = new lessc;
	$less->setVariables($params);
	
    // input and output location
    $inputFile = get_stylesheet_directory().'/less/'.$input;
    $outputFile = get_stylesheet_directory().'/css/'.$output;

    try {
		$less->compileFile($inputFile, $outputFile);
	} catch (Exception $ex) {
		echo "lessphp fatal error: ".$ex->getMessage();
	}
}

function road_excerpt_by_id($post, $length = 10, $tags = '<a><em><strong>') {
 
	if(is_int($post)) {
		// get the post object of the passed ID
		$post = get_post($post);
	} elseif(!is_object($post)) {
		return false;
	}
 
	if(has_excerpt($post->ID)) {
		$the_excerpt = $post->post_excerpt;
		return apply_filters('the_content', $the_excerpt);
	} else {
		$the_excerpt = $post->post_content;
	}
 
	$the_excerpt = strip_shortcodes(strip_tags($the_excerpt), $tags);
	$the_excerpt = preg_split('/\b/', $the_excerpt, $length * 2+1);
	$excerpt_waste = array_pop($the_excerpt);
	$the_excerpt = implode($the_excerpt);
 
	return apply_filters('the_content', $the_excerpt);
}

function road_blog_sharing() {
	global $post, $road_opt;
	
	$share_url = get_permalink( $post->ID );
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
	$postimg = $large_image_url[0];
	$posttitle = get_the_title( $post->ID );
	?>
	<div class="widget widget_socialsharing_widget">
		<h3 class="widget-title"><?php if(isset($road_opt['blog_share_title'])) { echo esc_html($road_opt['blog_share_title']); } else { _e('Share this post', 'roadthemes'); } ?></h3>
		<ul class="social-icons">
			<li><a class="facebook social-icon" href="#" onclick="javascript: window.open('<?php echo 'https://www.facebook.com/sharer/sharer.php?u='.$share_url; ?>'); return false;" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li><a class="twitter social-icon" href="#" title="Twitter" onclick="javascript: window.open('<?php echo 'https://twitter.com/home?status='.$posttitle.'&nbsp;'.$share_url; ?>'); return false;" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<li><a class="pinterest social-icon" href="#" onclick="javascript: window.open('<?php echo 'https://pinterest.com/pin/create/button/?url='.$share_url.'&amp;media='.$postimg.'&amp;description='.$posttitle; ?>'); return false;" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
			<li><a class="gplus social-icon" href="#" onclick="javascript: window.open('<?php echo 'https://plus.google.com/share?url='.$share_url; ?>'); return false;" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			<li><a class="linkedin social-icon" href="#" onclick="javascript: window.open('<?php echo 'https://www.linkedin.com/shareArticle?mini=true&amp;url='.$share_url.'&amp;title='.$posttitle; ?>'); return false;" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a></li>
		</ul>
	</div>
	<?php
}

function road_product_sharing() {
	global $road_opt;
	
	if(isset($_POST['data'])) { // for the quickview
		$postid = intval( $_POST['data'] );
	} else {
		$postid = get_the_ID();
	}
	
	$share_url = get_permalink( $postid );

	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $postid ), 'large' );
	$postimg = $large_image_url[0];
	$posttitle = get_the_title( $postid );
	?>
	<div class="widget widget_socialsharing_widget">
		<h3 class="widget-title"><?php if(isset($road_opt['product_share_title'])) { echo esc_html($road_opt['product_share_title']); } else { _e('Share this product', 'roadthemes'); } ?></h3>
		<ul class="social-icons">
			<li><a class="facebook social-icon" href="#" onclick="javascript: window.open('<?php echo 'https://www.facebook.com/sharer/sharer.php?u='.$share_url; ?>'); return false;" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li><a class="twitter social-icon" href="#" title="Twitter" onclick="javascript: window.open('<?php echo 'https://twitter.com/home?status='.$posttitle.'&nbsp;'.$share_url; ?>'); return false;" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<li><a class="pinterest social-icon" href="#" onclick="javascript: window.open('<?php echo 'https://pinterest.com/pin/create/button/?url='.$share_url.'&amp;media='.$postimg.'&amp;description='.$posttitle; ?>'); return false;" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
			<li><a class="gplus social-icon" href="#" onclick="javascript: window.open('<?php echo 'https://plus.google.com/share?url='.$share_url; ?>'); return false;" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			<li><a class="linkedin social-icon" href="#" onclick="javascript: window.open('<?php echo 'https://www.linkedin.com/shareArticle?mini=true&amp;url='.$share_url.'&amp;title='.$posttitle; ?>'); return false;" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a></li>
		</ul>
	</div>
	<?php
}