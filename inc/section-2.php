<?php $wp_customize->add_section('section-2', array(
  'title'   => __('Sekcja II', 'moto_cms'),
  'description' => sprintf(__('Tekst powitalny','moto_cms')),
  'priority'    => 140
));

$wp_customize->add_setting('s2-graphic-1', array(
  'default'   => get_bloginfo('template_directory').'/img/auto-1.jpg',
  'type'      => 'theme_mod'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 's2-graphic-1', array(
  'label'   => __('Grafika I', 'moto_cms'),
  'description' => sprintf(__('WAŻNE: Zastosowany jest tutaj efekt parallax, warto zastosować wąską oraz długą grafikę, aby całość dobrze się prezentowała.','moto_cms')),
  'section' => 'section-2',
  'settings' => 's2-graphic-1',
  'priority'  => 10
)));

$wp_customize->add_setting('s2-title-1', array(
  'default'   => _x('OUR COMMITMENT', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s2-title-1', array(
  'label'   => __('Tytuł', 'moto_cms'),
  'section' => 'section-2',
  'priority'  => 20
));

$wp_customize->add_setting('s2-subtitle-1', array(
    'default'   => _x('THANKS FOR VISITING OUR WEBSITE! WE HAVE NUMEROUS LOYAL CLIENTS ALL OVER THE GLOBE. THIS FACT PROVES THAT OUR COMPANY TAKES THE LEADING PLACE AMONG THE COMPETITORS.', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s2-subtitle-1', array(
  'label'   => __('Podtytuł', 'moto_cms'),
  'section' => 'section-2',
  'priority'  => 20
));

$wp_customize->add_setting('s2-text-1', array(
  'default'   => _x('An impressive choice of new and used cars with photos, full technical information, and quality proved by us; thousands of dealers all over the world. We are ready to provide you with a full range of services for warranty and post-warranty maintenance and repair.', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s1-text-1', array(
  'label'   => __('Dłuższy tekst', 'moto_cms'),
  'section' => 'section-2',
  'priority'  => 30
));
 ?>
