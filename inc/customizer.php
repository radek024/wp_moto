<?php
  function moto_section($wp_customize){
    // Showcase Section
    require get_template_directory(). '/inc/section-1.php';
    require get_template_directory(). '/inc/section-2.php';
    require get_template_directory(). '/inc/section-3.php';
    require get_template_directory(). '/inc/section-4.php';
    require get_template_directory(). '/inc/section-5.php';
    require get_template_directory(). '/inc/section-6.php';
    require get_template_directory(). '/inc/section-7.php';
}
  add_action('customize_register', 'moto_section');
