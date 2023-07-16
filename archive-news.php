<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header') ?>
  <div class="wrapper">
    <main class="archive-news-main-wrapper">
      <div class="archive-news-main">
        <h2 class="achieve-news-main-title">
          お知らせ
        </h2>
      </div>
    </main>
    <?php
    global $target_taxonomy;
    $target_taxonomy = 'news-category';
    ?>
    <?php get_template_part('includes/common-breadcrumb'); ?>
    <section class="archive-news-section-post-wrapper">
      <div class="archive-news-section-post">
        <h2 class="archive-news-section-post-title">
          お知らせ一覧
        </h2>
        <ul class="archive-news-section-post-content">
          <?php
          $args = array(
            'post_type' => 'news',
            'posts_per_page' => 10
          );
          global $the_query;
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>
              <li class="archive-news-section-post-content-item">
                <div class="archive-news-section-post-content-item-date">
                  <p><?php echo get_the_date(); ?></p>
                </div>
                <div class="archive-news-section-post-content-item-text">
                  <a href="<?php the_permalink(); ?>">
                    <?php
                    $title = get_the_title();
                    if (!empty($title)) : ?>
                      <p><?php echo $title; ?></p>
                    <?php else : ?>
                      <p>タイトルのない投稿</p>
                    <?php endif; ?>
                  </a>
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