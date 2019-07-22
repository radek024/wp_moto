<?php
$wp_customize->add_section('section-4', array(
  'title'   => __('Sekcja IV', 'moto_cms'),
  'description' => sprintf(__('Parallax oraz tekst.','moto_cms')),
  'priority'    => 160
));

$wp_customize->add_setting('s4-title-1', array(
  'default'   => _x('MAKING TRANSPORTATION FAST AND SAFE', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s4-title-1', array(
  'label'   => __('Tytuł', 'moto_cms'),
  'section' => 'section-4',
  'priority'  => 20
));

$wp_customize->add_setting('s4-text-1', array(
    'default'   => _x('With an average of more than 31 million visits each month, Cars is the leading online destination for car shoppers and owners. We offer credible and easy-to-understand information to help consumers research, price and find new and used vehicles and quality service and repair providers.', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s4-text-1', array(
  'label'   => __('Podtytuł', 'moto_cms'),
  'section' => 'section-4',
  'priority'  => 30
));

$wp_customize->add_setting('s4-graphic-1', array(
  'default'   => get_bloginfo('template_directory').'/img/slider-1.jpg',
  'type'      => 'theme_mod'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 's4-graphic-1', array(
  'label'   => __('Grafika I', 'moto_cms'),
  'description' => sprintf(__('WAŻNE: Zastosowany jest tutaj efekt parallax, warto zastosować odpowiednią grafikę, aby całość dobrze się prezentowała.','moto_cms')),
  'section' => 'section-4',
  'settings' => 's4-graphic-1',
  'priority'  => 10
)));
 ?>
