<?php $wp_customize->add_section('section-6', array(
  'title'   => __('Sekcja VI', 'moto_cms'),
  'description' => sprintf(__('Parallax oraz trzy linki/cechy.','moto_cms')),
  'priority'    => 180
));

$wp_customize->add_setting('s6-graphic-1', array(
  'default'   => get_bloginfo('template_directory').'/img/auto-2.jpg',
  'type'      => 'theme_mod'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 's6-graphic-1', array(
  'label'   => __('Grafika I', 'moto_cms'),
  'description' => sprintf(__('WAŻNE: Zastosowany jest tutaj efekt parallax, warto zastosować odpowiednią grafikę, aby całość dobrze się prezentowała.','moto_cms')),
  'section' => 'section-6',
  'settings' => 's6-graphic-1',
  'priority'  => 10
)));

$wp_customize->add_setting('s6-title-1', array(
  'default'   => _x('TYTUŁ 001', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s6-title-1', array(
  'label'   => __('Tytuł I', 'moto_cms'),
  'section' => 'section-6',
  'priority'  => 20
));

$wp_customize->add_setting('s6-url-1', array(
  'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s6-url-1', array(
  'label'   => __('Odnośnik - tytuł I', 'moto_cms'),
  'section' => 'section-6',
  'priority'  => 30
));

$wp_customize->add_setting('s6-icon-1', array(
  'default'   => _x('fa fa-star', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s6-icon-1', array(
  'label'   => __('Ikona Font Awesome', 'moto_cms'),
  'description' => __('Klasa Font Awesome odpowiadająca za ikonę w czerwonym boxie.', 'moto_cms'),
  'section' => 'section-6',
  'priority'  => 40
));

$wp_customize->add_setting('s6-title-2', array(
  'default'   => _x('TYTUŁ 002', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s6-title-2', array(
  'label'   => __('Tytuł II', 'moto_cms'),
  'section' => 'section-6',
  'priority'  => 50
));

$wp_customize->add_setting('s6-url-2', array(
  'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s6-url-2', array(
  'label'   => __('Odnośnik - tytuł II', 'moto_cms'),
  'section' => 'section-6',
  'priority'  => 60
));

$wp_customize->add_setting('s6-icon-2', array(
  'default'   => _x('fa fa-star', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s6-icon-2', array(
  'label'   => __('Ikona Font Awesome', 'moto_cms'),
  'description' => __('Klasa Font Awesome odpowiadająca za ikonę w czerwonym boxie.', 'moto_cms'),
  'section' => 'section-6',
  'priority'  => 70
));

$wp_customize->add_setting('s6-title-3', array(
  'default'   => _x('TYTUŁ 003', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s6-title-3', array(
  'label'   => __('Tytuł III', 'moto_cms'),
  'section' => 'section-6',
  'priority'  => 80
));

$wp_customize->add_setting('s6-url-3', array(
  'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s6-url-3', array(
  'label'   => __('Odnośnik - tytuł III', 'moto_cms'),
  'section' => 'section-6',
  'priority'  => 90
));

$wp_customize->add_setting('s6-icon-3', array(
  'default'   => _x('fa fa-star', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s6-icon-3', array(
  'label'   => __('Ikona Font Awesome', 'moto_cms'),
  'description' => __('Klasa Font Awesome odpowiadająca za ikonę w czerwonym boxie.', 'moto_cms'),
  'section' => 'section-6',
  'priority'  => 100
));
?>
