<?php

//为文章添加特色图像
add_theme_support('post-thumbnails');

function xuwen_nav_menus()
{
    register_nav_menus(array(
        'header' => __('顶部菜单', 'xuwen'),
        'footer' => __('页脚菜单', 'xuwen')
    ));
}
add_action('init', 'xuwen_nav_menus');


