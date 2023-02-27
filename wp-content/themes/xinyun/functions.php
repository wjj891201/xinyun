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

function xuwen_seo()
{
    if (is_home())
    {
        $title = get_bloginfo('name');
        $keywords = '星雲歡樂城，星雲，麻將成';
        $description = get_bloginfo('description');
    }
    if (is_category())
    {
        $term = get_queried_object();
        $title = get_field('title', $term);
        if (!$title)
        {
            $title = $term->name;
        }
        $keywords = get_field('keywords', $term);
        if (!$keywords)
        {
            $keywords = '';
        }
        $description = get_field('description', $term);
        if (!$description)
        {
            $description = $term->description;
        }
    }
    if (is_singular())
    {
        $title = get_field('title');
        if (!$title)
        {
            $title = get_the_title();
        }
        $keywords = get_field('keywords');
        if (!$keywords)
        {
            $tag = get_the_tags();
            if (is_array($tag))
            {
                $i = 1;
                foreach ($tag as $v)
                {
                    if ($i == 1)
                    {
                        $keywords .= $v->name;
                    }
                    else
                    {
                        $keywords .= '，' . $v->name;
                    }
                }
            }
        }
        $description = get_field('description');
        if (!$description)
        {
            $description = get_the_excerpt();
        }
    }
    if (is_search())
    {
        
    }
    echo '<title>' . $title . '</title>' . PHP_EOL;
    if ($keywords)
    {
        echo '<meta name="keywords" content="' . $keywords . '">' . PHP_EOL;
    }
    if ($description)
    {
        echo '<meta name="description" content="' . $description . '">' . PHP_EOL;
    }
}
