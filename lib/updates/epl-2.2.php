<?php
	$epl_settings = epl_settings();
	
	$new_fields_defaults = array(
		'epl_feeling_lucky'						=>	'off',
		'epl_lucky_disable_single_thumb'		=>	'off',
		'epl_lucky_disable_theme_single_thumb'	=>	'off',
		'epl_lucky_disable_archive_thumb'		=>	'off',
		'epl_lucky_disable_epl_archive_thumb'	=>	'off',
		'display_archive_view_type'				=>	'list',
		'use_fancy_navigation'					=>	'0',
		'epl_enable_city_field'					=>	'no',
		'epl_enable_country_field'				=>	'no',
		'label_city'							=>	'City'
	);
	
	
	foreach($new_fields_defaults as $key	=>	$value) {
		if(!isset($epl_settings[$key])) {
			// sure upgrade, fields are not set lets set them for very first time
			$epl_settings[$key] = $value;
		}
	}
	update_option( 'epl_settings', $epl_settings );
