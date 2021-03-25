<?php
/*
* Plugin Name: Plugin development assistant
* Description: WordPress plugin that helps you develop WordPress plugins
* Version: 1.0.2
* Author: Dmitrii Nektobit
* Author URI: https://nektobit.ru
*
* Requires at least: 5.0
* Licence: MIT
*/

add_action('admin_head', 'highlights_dev_plugins');

function highlights_dev_plugins() {
  echo "<style>
		tr[data-plugin*='[development]'] .plugin-title:before{
			background: #d9ecff;
			color: #333;
			font-weight: 600;
			content: '⚠️ Development Version';
			padding: 0.5rem 1rem;
			margin-bottom: 1rem;
			display: flex;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
		}
		tr[data-plugin*='[development]'] .delete a {
			pointer-events: none;
			text-decoration: none;
			color: gray;
		}
  </style>";
}

add_filter( 'plugin_row_meta', 'filter_function_name_3705', 10, 4 );
function filter_function_name_3705( $plugin_meta, $plugin_file, $plugin_data, $status ){
	if(strpos($plugin_file, '[development]')) {
		//$plugin_meta[] = 'test';
	}

	return $plugin_meta;
}