<?php
$wp_customize->add_section('section-3', array(
  'title'   => __('Sekcja III', 'moto_cms'),
  'description' => sprintf(__('Ta część strony jest podzielona na dwie części. Pierwszą uznano jako tą opisową - drugą to zbiór linków.','moto_cms')),
  'priority'    => 150
));

$wp_customize->add_setting('s3-title-1', array(
  'default'   => _x('KEYS TO SUCCESS', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s3-title-1', array(
  'label'   => __('Tytuł sekcji po lewo', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 20
));

$wp_customize->add_setting('s3-subtitle-1', array(
    'default'   => _x('WE CAN HELP YOU FIND ORIGINAL SPARE PARTS FOR YOUR CAR, NO MATTER WHAT AGE IT IS. WE PROVIDE CAR ENGINES, ACCESSORIES AND CONSUMABLES OF THE HIGHEST QUALITY FROM TRUSTED WORLDWIDE-KNOWN MANUFACTURERS.', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s3-subtitle-1', array(
  'label'   => __('Podtytuł', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 20
));

$wp_customize->add_setting('s3-text-1', array(
  'default'   => _x('If you have a problem, we\'ll quickly and effectively eliminate the problem, perform all work connected with the repair of your vehicle, efficiently and inexpensive. We are ready to provide you with a full range of services for warranty and post-warranty maintenance and repair.', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s3-text-1', array(
  'label'   => __('Dłuższy tekst', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 30
));

$wp_customize->add_setting('s3-btn-text-1', array(
  'default'   => _x('READ MORE', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-btn-text-1', array(
  'label'   => __('Opis widniejący na przycisku', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 30
));

$wp_customize->add_setting('s3-btn-url-1', array(
  'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-btn-url-1', array(
  'label'   => __('Adres z przycisku', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 30
));

$wp_customize->add_setting('s3-title-2', array(
  'default'   => _x('COMPREHENSIVE SERVICES', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s3-title-2', array(
  'label'   => __('Tytuł sekcji z linkami', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 20
));

$wp_customize->add_setting('s3-btn-url-1', array(
  'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-btn-url-1', array(
  'label'   => __('Adres z przycisku', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 30
));

$wp_customize->add_setting('s3-list-text-1', array(
  'default'   => _x('OPCJA 01', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-list-text-1', array(
  'label'   => __('Napis widniejący jako link', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 40
));

$wp_customize->add_setting('s3-list-url-1', array(
  'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-list-url-1', array(
  'label'   => __('Adres, do którego prowadzi link', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 45
));

$wp_customize->add_setting('s3-list-text-2', array(
  'default'   => _x('OPCJA 02', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-list-text-2', array(
  'label'   => __('Napis widniejący jako link', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 50
));

$wp_customize->add_setting('s3-list-url-2', array(
  'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-list-url-2', array(
  'label'   => __('Adres, do którego prowadzi link', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 60
));

$wp_customize->add_setting('s3-list-text-3', array(
  'default'   => _x('OPCJA 03', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-list-text-3', array(
  'label'   => __('Napis widniejący jako link', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 70
));

$wp_customize->add_setting('s3-list-url-3', array(
  'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-list-url-3', array(
  'label'   => __('Adres, do którego prowadzi link', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 80
));

$wp_customize->add_setting('s3-list-text-4', array(
  'default'   => _x('OPCJA 04', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-list-text-4', array(
  'label'   => __('Napis widniejący jako link', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 90
));

$wp_customize->add_setting('s3-list-url-4', array(
  'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-list-url-4', array(
  'label'   => __('Adres, do którego prowadzi link', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 100
));

$wp_customize->add_setting('s3-list-text-5', array(
  'default'   => _x('OPCJA 05', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-list-text-5', array(
  'label'   => __('Napis widniejący jako link', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 110
));

$wp_customize->add_setting('s3-list-url-5', array(
  'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-list-url-5', array(
  'label'   => __('Adres, do którego prowadzi link', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 120
));

$wp_customize->add_setting('s3-list-text-6', array(
  'default'   => _x('OPCJA 06', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-list-text-6', array(
  'label'   => __('Napis widniejący jako link', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 130
));

$wp_customize->add_setting('s3-list-url-6', array(
  'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s3-list-url-6', array(
  'label'   => __('Adres, do którego prowadzi link', 'moto_cms'),
  'section' => 'section-3',
  'priority'  => 140
));
 ?>
