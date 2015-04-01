<?php
/**
 * @file
 * theme.inc
 */
 
/*
 * Create homepage slideshow
 */
function theme_apnc_custom_homepage_slideshow($slides) {
  $output = <<<EOD
	<div class="slideshow grayscale_thumbs">
		<ul class="thumbs">
		</ul>
		<ul class="slides">
EOD;

  foreach ($slides as $slide) {
  	$file = file_load($slide['file']['fid']);
  	$link = $slide['link'];
  	$color_thumb = image_style_url('homepage_slide_thumb_color', $file->uri);
  	$bw_thumb = image_style_url('homepage_slide_thumb_bw', $file->uri);
  	$image = image_style_url('homepage_slide', $file->uri);

    $output .= '<li data-color-thumb="' . $color_thumb . '"';
    $output .= ' data-gray-thumb="' . $bw_thumb . '">';
    $output .= '<img src="' . $image . '" alt="' . $link['title'] . '"/>';
    $output .= '<div class="slide_text"><a href="' . $link['url'] . '">' . $link['title'] . ' &raquo;</a></div></li>';
  }
  
  $output .= '</ul></div><!-- /slideshow -->';

  return $output;
}

/*
 * Create homepage news
 */
function theme_apnc_custom_homepage_news($news) {
  $output = '<ul>';
  
  foreach ($news as $news_item) {
  	$file = file_load($news_item['img']['fid']);
  	$title = $news_item['title'];
	$body = $news_item['body'];
  	$body = drupal_render($body);
  	$path = 'node/' . $news_item['nid'];
  	$thumb = image_style_url('news_thumb', $file->uri);

    $output .= '<li>' . l('<img src="' . $thumb . '" alt="' . $title . '">', $path, array('attributes' => array('class' => array('image')), 'html' => TRUE));
		$output .= '<div class="text"><h3>' . l($title, $path) . '</h3>';
		$output .= $body . '</div></li>';
  }
  
	$output .= '</ul>';
	
  return $output;
}

function theme_apnc_custom_events_sidebar($events) {
	$output = '<ul>';
	foreach ($events as $event) {
		$title = $event['title'];
		$path = 'node/' . $event['nid'];
		$output .= '<li><h3>' . l($title, $path) . '</h3>';
		$output .= '<p>' . drupal_render($event['date']) . '<br />';
		$output .= $event['location']['safe_value'] . '</p>';
	}
	
	$output .= '</ul>';
		
	return $output;
}
