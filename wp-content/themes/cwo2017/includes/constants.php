<?php
//Image URI
defined('CWO_PNG_URI') OR define('CWO_PNG_URI',get_template_directory_uri().'/assets/img/png');
defined('CWO_JPG_URI') OR define('CWO_JPG_URI',get_template_directory_uri().'/assets/img/jpg');
defined('CWO_SVG_URI') OR define('CWO_SVG_URI',get_template_directory_uri().'/assets/img/svg');

// Theme Version
$theme_version = null;
if(ini_get('allow_url_fopen')){
	$package_json_raw   = file_get_contents(get_theme_file_path('/package.json'));

	if($package_json_raw) {
		$package_json_array = json_decode( $package_json_raw, true );
		$theme_version = isset($package_json_array['version']) ? $package_json_array['version'] : null;
	}
}
define('CWO_THEME_VERSION',WP_ENV === 'server' ? $theme_version : microtime());
