<?php 

/*
	Plugin Name: Simple Ticker
	Plugin URI: http://github.com/nasurlhazim/simple-ticker
	Description: A WordPress Plugin: Simple Ticker - Display latest post
	Version: 1.0.0
	Author: Nasrul Hazim Bin Mohamad
	Author URI: http://nasrulhazim.com
	License: GPLv2
*/
function get_tickers() {
	ob_start();
	include 'get_tickers.php';
	return ob_get_clean();
}
add_shortcode('simple-ticker', 'get_tickers');