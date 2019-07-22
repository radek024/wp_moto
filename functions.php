<?php
  function moto_enqueue_scripts(){
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), 1.0, 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri().'/style.css', array(), 1.0, 'all');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css', array(), 1.0, 'all');
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Titillium+Web:400,700,900', array(), 1.0, 'all');


  	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.4', true);
  }

  add_action('wp_enqueue_scripts', 'moto_enqueue_scripts');

  add_theme_support('menus');
  register_nav_menus(array('primary' => __('Primary Menu')));


  require get_template_directory(). '/inc/customizer.php';
  require_once('wp_bootstrap_navwalker.php');
 ?>
