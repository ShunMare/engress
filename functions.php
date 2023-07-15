<?php
add_theme_support('post-thumbnails');
function add_custom_post_type()
{
  register_post_type(
    'news',
    array(
      'name' => __('news'),
      'singular_name' => __('news'),
      'label' => 'News',
      'public'        => true,
      'has_archive'   => true,
      'menu_position' => 5,
      'rewrite' => array('slug' => 'news'),
      'menu_icon'     => 'dashicons-edit',
      'supports' => array(
        'title',
        'editor',
      )
    )
  );
  register_post_type(
    'blog',
    array(
      'name' => __('blog'),
      'singular_name' => __('blog'),
      'label' => 'blog',
      'public'        => true,
      'has_archive'   => true,
      'menu_position' => 5,
      'rewrite' => array('slug' => 'blog'),
      'menu_icon'     => 'dashicons-edit',
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
      )
    )
  );
  register_post_type(
    'result',
    array(
      'name' => __('result'),
      'label' => 'result',
      'public'        => true,
      'menu_position' => 5,
      'rewrite' => array('slug' => 'result'),
      'menu_icon'     => 'dashicons-edit',
      'supports' => array(
        'title',
        'editor',
      )
    )
  );
  register_post_type(
    'price',
    array(
      'name' => __('price'),
      'label' => 'price',
      'public'        => true,
      'menu_position' => 5,
      'rewrite' => array('slug' => 'price'),
      'menu_icon'     => 'dashicons-edit',
      'supports' => array(
        'title',
        'editor',
      )
    )
  );
}
add_action('init', 'add_custom_post_type');
function add_custom_taxonomy()
{
  register_taxonomy(
    'news-category',
    'news',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
    )
  );
  register_taxonomy(
    'news-tag',
    'news',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
    )
  );
  register_taxonomy(
    'blog-category',
    'blog',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
    )
  );
  register_taxonomy(
    'blog-tag',
    'blog',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
    )
  );
}
add_action('init', 'add_custom_taxonomy');