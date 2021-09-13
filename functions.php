<?php
/**
 * Дочерняя тема для темы extremesport  
 * 
 */

defined( 'ABSPATH' ) || exit;

/**
 * Helper
 */
function show($param){
	echo "<pre>";
	print_r($param);
	echo "</per>";
}

function mysport_scripts_style() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'mysport-style', get_stylesheet_directory_uri() .'/assets/css/mysport.css' );
	wp_enqueue_script( 'mysport-script', get_stylesheet_directory_uri() . '/assets/js/mysport.js', array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'mysport_scripts_style' );

/**
 * Блок для протоколов
 */
require 'inc/protokol.php';
?>