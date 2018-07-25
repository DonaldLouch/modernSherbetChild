<?php
/*
=====================================================================
	Calls the parent theme's stylesheet
=====================================================================
*/

  add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
  function enqueue_parent_styles() {
      wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
  }

/*
=====================================================================
	Update Checker
		- Plugin Update Checker By YahnisElsts
=====================================================================
*/

	require 'plugin-update-checker/plugin-update-checker.php';
	$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
		'https://github.com/DonaldLouch/modernSherbetChild',
		__FILE__,
		'modernsherbet-child'
	);
	$myUpdateChecker->setBranch('stable');

/*
=====================================================================
	Your Custom Code!
=====================================================================
*/

  // Insert your custom functions here!

?>
