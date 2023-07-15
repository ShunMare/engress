<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header') ?>
  <div class="wrapper">
    <main class="archive-blog-main-wrapper">
      <div class="archive-blog-main">
        <h2 class="archive-blog-main-title">
          ブログ
        </h2>
      </div>
    </main>
    <?php
    global $target_taxonomy;
    $target_taxonomy = 'blog-category';
    ?>
    <?php get_template_part('includes/common-breadcrumb'); ?>
    <section class="archive-blog-section-post-wrapper">
      <div class="archive-blog-section-post">
        <h2 class="archive-blog-section-post-title">
          新着一覧
        </h2>
        <ul class="archive-blog-section-post-content">
          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'blog',
            'posts_per_page' => 10,
            'paged' => $paged
          );
          global $the_query;
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
              $categories = get_the_terms(get_the_ID(), 'blog-category');
          ?>
              <li class="archive-blog-section-post-content-item">
                <div class="archive-blog-section-post-content-item-img">
                  <?php
                  if (has_post_thumbnail()) {
                    echo '<img src="' . get_the_post_thumbnail_url() . '" alt="ブログ投稿画像">';
                  } else {
                    echo '<img src="' . get_template_directory_uri() . '/images/noimage.png"  alt="イメージなし">';
                  }
                  ?>
                    <?php
                    if (!empty($categories)) {
                      echo '<div class="archive-blog-section-post-content-item-img-category">';
                      echo '<p>' . esc_html($categories[0]->name) . '</p>';
                      echo '</div>';
                    }
                    ?>
                </div>
                <div class="archive-blog-section-post-content-item-text">
                  <div class="archive-blog-section-post-content-item-text-date">
                    <p><?php echo get_the_date(); ?></p>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="archive-blog-section-post-content-item-text-title">
                    <p><?php the_title(); ?></p>
                  </a>
                  <div class="archive-blog-section-post-content-item-text-content">
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