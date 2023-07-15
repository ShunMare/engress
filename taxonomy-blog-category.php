<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header') ?>
  <div class="wrapper">
    <main class="taxonomy-blog-category-main-wrapper">
      <div class="taxonomy-blog-category-main">
        <h2 class="taxonomy-blog-category-main-title">
          ブログ
        </h2>
      </div>
    </main>
    <?php
    global $target_taxonomy;
    $target_taxonomy = 'blog-category';
    ?>
    <?php get_template_part('includes/common-breadcrumb'); ?>
    <section class="taxonomy-blog-category-section-post-wrapper">
      <div class="taxonomy-blog-category-section-post">
        <h2 class="taxonomy-blog-category-section-post-title">
          <?php
          $category_slug = get_query_var('term');
          echo $category_slug . "一覧";
          ?>
        </h2>
        <ul class="taxonomy-blog-category-section-post-content">
          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'blog',
            'posts_per_page' => 10,
            'paged' => $paged,
            'tax_query' => array(
              array(
                'taxonomy' => 'blog-category',
                'field'    => 'slug',
                'terms'    => $category_slug,
              ),
            ),
          );
          global $the_query;
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
              $categories = get_the_terms(get_the_ID(), 'blog-category');
          ?>
              <li class="taxonomy-blog-category-section-post-content-item">
                <div class="taxonomy-blog-category-section-post-content-item-img">
                  <?php
                  if (has_post_thumbnail()) {
                    echo '<img src="' . get_the_post_thumbnail_url() . '" alt="">';
                  } else {
                    echo '<img src="'. get_template_directory_uri() . '/images/noimage.png"  alt="イメージなし">';
                  }
                  ?>
                  <div class="taxonomy-blog-category-section-post-content-item-img-category">
                    <?php
                    if (!empty($categories)) {
                      echo '<p>' . esc_html($categories[0]->name) . '</p>';
                    }
                    ?>
                  </div>
                </div>
                <div class="taxonomy-blog-category-section-post-content-item-text">
                  <div class="taxonomy-blog-category-section-post-content-item-text-date">
                    <p><?php echo get_the_date(); ?></p>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="taxonomy-blog-category-section-post-content-item-text-title">
                    <p><?php the_title(); ?></p>
                  </a>
                  <div class="taxonomy-blog-category-section-post-content-item-text-content">
                    <p><?php echo wp_trim_words(get_the_content(), 60, '…') ?></p>
                  </div>
                </div>
              </li>
          <?php
            endwhile;
            wp_reset_postdata();
          else :
            echo '<p>該当する投稿が見つかりませんでした。</p>';
          endif;
          ?>
        </ul>
      </div>
    </section>
    <?php get_template_part('includes/common-pagination'); ?>
    <?php get_template_part('includes/common-request'); ?>
    <?php get_template_part('includes/common-call'); ?>
    <?php get_template_part('includes/footer'); ?>
  </div>
  <?php get_footer(); ?>
</body>

</html>