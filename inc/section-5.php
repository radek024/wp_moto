<?php $wp_customize->add_section('section-5', array(
  'title'   => __('Sekcja V', 'moto_cms'),
  'description' => sprintf(__('','moto_cms')),
  'priority'    => 170
));

$wp_customize->add_setting('s5-title-1', array(
  'default'   => _x('WHO WE ARE', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s5-title-1', array(
  'label'   => __('Tytuł I', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 20
));

$wp_customize->add_setting('s5-subtitle-1', array(
    'default'   => _x('LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. APERIAM, ASSUMENDA!', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s5-subtitle-1', array(
  'label'   => __('Podtytuł', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 30
));

$wp_customize->add_setting('s5-text-1', array(
  'default'   => _x('You can find service centers of our company all over the world – from the USA to Japan. There is no better and cheaper way to buy, sell, rent or repair a car than to use our services. If you have any questions concerning our job, our support team will be glad to answer them.', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s5-text-1', array(
  'label'   => __('Dłuższy tekst', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 40
));

$wp_customize->add_setting('s5-btn-text-1', array(
  'default'   => _x('READ MORE', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s5-btn-text-1', array(
  'label'   => __('Opis widniejący na przycisku', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 60
));

$wp_customize->add_setting('s5-btn-url-1', array(
  'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s5-btn-url-1', array(
  'label'   => __('Adres z przycisku', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 60
));

$wp_customize->add_setting('s5-title-2', array(
  'default'   => _x('WHO WE ARE', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s5-title-2', array(
  'label'   => __('Tytuł II', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 70
));

$wp_customize->add_setting('s5-subtitle-2', array(
    'default'   => _x('LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. APERIAM, ASSUMENDA!', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s5-subtitle-2', array(
  'label'   => __('Podtytuł', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 80
));

$wp_customize->add_setting('s5-text-2', array(
  'default'   => _x('You can find service centers of our company all over the world – from the USA to Japan. There is no better and cheaper way to buy, sell, rent or repair a car than to use our services. If you have any questions concerning our job, our support team will be glad to answer them.', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s5-btn-text-2', array(
  'label'   => __('Dłuższy tekst', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 90
));

$wp_customize->add_setting('s5-btn-text-2', array(
  'default'   => _x('READ MORE', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s5-btn-text-2', array(
  'label'   => __('Opis widniejący na przycisku', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 100
));

$wp_customize->add_setting('s5-btn-url-2', array(
  'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s5-btn-url-2', array(
  'label'   => __('Adres z przycisku', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 110
));

$wp_customize->add_setting('s5-title-3', array(
  'default'   => _x('WHO WE ARE', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s5-title-3', array(
  'label'   => __('Tytuł III', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 120
));

$wp_customize->add_setting('s5-subtitle-3', array(
    'default'   => _x('LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. APERIAM, ASSUMENDA!', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s5-subtitle-3', array(
  'label'   => __('Podtytuł', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 130
));

$wp_customize->add_setting('s5-text-3', array(
  'default'   => _x('You can find service centers of our company all over the world – from the USA to Japan. There is no better and cheaper way to buy, sell, rent or repair a car than to use our services. If you have any questions concerning our job, our support team will be glad to answer them.', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s5-btn-text-3', array(
  'label'   => __('Dłuższy tekst', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 140
));

$wp_customize->add_setting('s5-btn-text-3', array(
  'default'   => _x('READ MORE', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s5-btn-text-3', array(
  'label'   => __('Opis widniejący na przycisku', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 150
));

$wp_customize->add_setting('s5-btn-url-3', array(
  'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s5-btn-url-3', array(
  'label'   => __('Adres z przycisku', 'moto_cms'),
  'section' => 'section-5',
  'priority'  => 160
));
?>
