<?php
/*
Plugin Name: Bullhorn Career Portal Wordpress Plugin
Plugin URI: http://github.com/krsween/wp-oscp
Description: A really simple lightweight installer for Career Portal inside of Wordpress.
Version: 0.0.1
Author: krsween
Author URI: http://krsween.com
License: MIT
*/

define('DISALLOW_FILE_EDIT', true);
define('APP_JSON_PATH', './wp-content/plugins/wp-oscp/oscp/app.json');

define('OSCP_WP_PLUGIN_VERSION', '0.0.1');

function oscp_plugin_add_shortcode($atts) {
	$defaults = array(
		'src' => '../wp-content/plugins/wp-oscp/oscp/index.html',
		'width' => '100%',
		'height' => '500px',
		'scrolling' => 'yes',
		'class' => 'iframe-class',
		'frameborder' => '0'
	);

	foreach ($defaults as $default => $value) {
		if (!@array_key_exists($default, $atts)) {
			$atts[$default] = $value;
		}
	}

	$html = "\n".'<!-- wp-oscp plugin v' . OSCP_WP_PLUGIN_VERSION . ' -->' . "\n";
	$html .= '<iframe';
	foreach($atts as $attr => $value) {
		if (strtolower($attr) != 'same_height_as'
            AND strtolower($attr) != 'onload'
            AND strtolower($attr) != 'onpageshow'
            AND strtolower($attr) != 'onclick'
            AND strtolower($attr) != 'corptoken'
            AND strtolower($attr) != 'sl'
            AND strtolower($attr) != 'li') {
			if ($value != '') {
				$html .= ' ' . esc_attr($attr) . '="' . esc_attr($value) . '"';
			} else {
				$html .= ' ' . esc_attr($attr);
			}
		} else if (strtolower($attr) == 'corptoken') {
            $jsonString = file_get_contents(APP_JSON_PATH);
            $data = json_decode($jsonString, true);
            $data['service']['corpToken'] = esc_attr($value);
            $newJsonString = json_encode($data);
            file_put_contents(APP_JSON_PATH, $newJsonString);

        } else if (strtolower($attr) == 'sl') {
            $jsonString = file_get_contents(APP_JSON_PATH);
            $data = json_decode($jsonString, true);
            $data['service']['swimlane'] = esc_attr($value);
            $newJsonString = json_encode($data);
            file_put_contents(APP_JSON_PATH, $newJsonString);

        } else if (strtolower($attr) == 'li') {
            $jsonString = file_get_contents(APP_JSON_PATH);
            $data = json_decode($jsonString, true);
            $data['integrations']['linkedin']['clientId'] = esc_attr($value);
            $newJsonString = json_encode($data);
            file_put_contents(APP_JSON_PATH, $newJsonString);
        }
	}
	$html .= '></iframe>'."\n";

	$html .= '<!-- ' . $attr . '-->';

	if (isset($atts["same_height_as"])) {
		$html .= '
			<script>
			document.addEventListener("DOMContentLoaded", function(){
				var target_element, iframe_element;
				iframe_element = document.querySelector("iframe.' . esc_attr( $atts["class"] ) . '");
				target_element = document.querySelector("' . esc_attr( $atts["same_height_as"] ) . '");
				iframe_element.style.height = target_element.offsetHeight + "px";
			});
			</script>
		';
	}

	return $html;
}
add_shortcode('oscp', 'oscp_plugin_add_shortcode');
