<?php 
///**
//* загружаемые стили и скрипты
//**/
function load_style_script() {
//    wp_enqueue_script('js-file', get_template_directory_uri() . '/js/js-file.js');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
///**
//* загружаем стили и скритпы
//**/
add_action('wp_enqueue_scripts', 'load_style_script');
//
///**
//* подключаем возможность юзать миниатюры
//**/
add_theme_support('post-thumbnails');
//
///**
//* подключаем возможность юзать меню
//**/
register_nav_menu('menu', 'Main-menu');
//
///**
//* подключаем виджеты в сайдбаре
//**/
register_sidebar(array(
    'name' => 'widgets in sitebar',
    'id' => 'sidebarid',
    'description' => 'here is widget',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));
//
//
///**
//* подключаем виджеты в футере
//**/
//register_sidebar(array(
//    'name' => 'widgets in footer',
//    'id' => 'footerid',
//    'description' => 'here is widget in footer',
//    'before_widget' => '<div class="wrapcat">',
//    'after_widget' => '</div>',
//    'before_title' => '<h3>',
//    'after_title' => '</h3>',
//));
//



include('/settings.php');


?>