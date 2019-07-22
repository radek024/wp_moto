<?php $wp_customize->add_section('section-7', array(
  'title'   => __('Sekcja VII', 'moto_cms'),
  'description' => sprintf(__('Mapa oraz dane kontaktowe.','moto_cms')),
  'priority'    => 190
));

$wp_customize->add_setting('s7-title-1', array(
  'default'   => _x('CONTACTS', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s7-title-1', array(
  'label'   => __('Tytuł', 'moto_cms'),
  'section' => 'section-7',
  'priority'  => 20
));

$wp_customize->add_setting('s7-text-1', array(
    'default'   => _x('4578 MARMORA ROAD <br> GLASGOW D04 89GR', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s7-text-1', array(
  'label'   => __('Dane ważniejsze', 'moto_cms'),
  'section' => 'section-7',
  'priority'  => 40
));

$wp_customize->add_setting('s7-text-2', array(
    'default'   => _x('It doesn\'t matter where do you live. Call us and we\’ll help to solve all of your problems. The support team is waiting for your calls 24 hours a day, 7 days per week. Or connect us via email.', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s7-text-2', array(
  'label'   => __('Dane mniej ważne', 'moto_cms'),
  'section' => 'section-7',
  'priority'  => 50
));

$wp_customize->add_setting('s7-url-1', array(
    'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s7-url-1', array(
  'label'   => __('Facebook - kontakt', 'moto_cms'),
  'section' => 'section-7',
  'priority'  => 60
));

$wp_customize->add_setting('s7-url-2', array(
    'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s7-url-2', array(
  'label'   => __('Twitter - kontakt', 'moto_cms'),
  'section' => 'section-7',
  'priority'  => 70
));

$wp_customize->add_setting('s7-url-3', array(
    'default'   => _x('#', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s7-url-3', array(
  'label'   => __('Google+ - kontakt', 'moto_cms'),
  'section' => 'section-7',
  'priority'  => 80
));


$wp_customize->add_setting('s6-map-1', array(
  'default'   => _x('https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d158615.16835286378!2d22.698302849999997!3d51.5982553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spl!2spl!4v1473958119838', 'moto_cms'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s6-map-1', array(
  'label'   => __('Adres mapy', 'moto_cms'),
  'description' => __('Udostępnij mapę i podaj link, który jest wskazany w tagu iframe', 'moto_cms'),
  'section' => 'section-6',
  'priority'  => 110
));
?>
