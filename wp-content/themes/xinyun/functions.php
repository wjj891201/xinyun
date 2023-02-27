<?php

function xuwen_nav_menus()
{
    register_nav_menus(array(
        'header' => __('顶部菜单', 'xuwen'),
        'footer' => __('页脚菜单', 'xuwen')
    ));
}

add_action('init', 'xuwen_nav_menus');
