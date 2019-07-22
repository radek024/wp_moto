<?php $wp_customize->add_section('section-1', array(
  'title'   => __('Sekcja I', 'moto_cms'),
  'description' => sprintf(__('Modyfikacja karuzeli','moto_cms')),
  'priority'    => 130
));
$wp_customize->add_setting('s1-graphic-1', array(
  'default'   => get_bloginfo('template_directory').'/img/slider-1.jpg',
  'type'      => 'theme_mod'
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 's1-graphic-1', array(
  'label'   => __('Grafika I', 'moto_cms'),
  'section' => 'section-1',
  'settings' => 's1-graphic-1',
  'priority'  => 10
)));
$wp_customize->add_setting('s1-title-1', array(
  'default'   => _x('WITAM SERDECZNIE NA STRONIE', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s1-title-1', array(
  'label'   => __('Tytuł grafiki', 'moto_cms'),
  'section' => 'section-1',
  'priority'  => 20
));
$wp_customize->add_setting('s1-text-1', array(
  'default'   => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, iste.', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s1-text-1', array(
  'label'   => __('Opis/podtytuł', 'moto_cms'),
  'section' => 'section-1',
  'priority'  => 30
));

$wp_customize->add_setting('s1-graphic-2', array(
  'default'   => get_bloginfo('template_directory').'/img/slider-2.jpg',
  'type'      => 'theme_mod'
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 's1-graphic-2', array(
  'label'   => __('Grafika II', 'moto_cms'),
  'section' => 'section-1',
  'settings' => 's1-graphic-2',
  'priority'  => 40
)));
$wp_customize->add_setting('title-2', array(
  'default'   => _x('WITAM SERDECZNIE NA STRONIE', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s1-title-2', array(
  'label'   => __('Tytuł grafiki', 'moto_cms'),
  'section' => 'section-1',
  'priority'  => 50
));
$wp_customize->add_setting('s1-text-2', array(
  'default'   => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, iste.', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s1-text-2', array(
  'label'   => __('Opis/podtytuł', 'moto_cms'),
  'section' => 'section-1',
  'priority'  => 60
));

$wp_customize->add_setting('s1-graphic-3', array(
  'default'   => get_bloginfo('template_directory').'/img/slider-3.jpg',
  'type'      => 'theme_mod'
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 's1-graphic-3', array(
  'label'   => __('Grafika III', 'moto_cms'),
  'section' => 'section-1',
  'settings' => 's1-graphic-3',
  'priority'  => 70
)));
$wp_customize->add_setting('s1-title-3', array(
  'default'   => _x('WITAM SERDECZNIE NA STRONIE', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s1-title-3', array(
  'label'   => __('Tytuł grafiki', 'moto_cms'),
  'section' => 'section-1',
  'priority'  => 80
));
$wp_customize->add_setting('s1-text-3', array(
  'default'   => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, iste.', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s1-text-3', array(
  'label'   => __('Opis/podtytuł', 'moto_cms'),
  'section' => 'section-1',
  'priority'  => 90
));
 ?>
