<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header') ?>
  <div class="wrapper">
    <main class="taxonomy-news-category-main-wrapper">
      <div class="taxonomy-news-category-main">
        <h2 class="taxonomy-news-category-main-title">
          お知らせ
        </h2>
      </div>
    </main>
    <?php
    global $target_taxonomy;
    $target_taxonomy = 'news-category';
    ?>
    <?php get_template_part('includes/common-breadcrumb'); ?>
    <section class="taxonomy-news-category-section-post-wrapper">
      <div class="taxonomy-news-category-section-post">
        <h2 class="taxonomy-news-category-section-post-title">
          <?php
          $category_slug = get_query_var('term');
          echo $category_slug . "一覧";
          ?>
        </h2>
        <ul class="taxonomy-news-category-section-post-content">
        <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'news',
            'posts_per_page' => 10,
            'paged' => $paged,
            'tax_query' => array(
              array(
                'taxonomy' => 'news-category',
                'field'    => 'slug',
                'terms'    => $category_slug,
              ),
            ),
          );
          global $the_query;
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>
              <li class="taxonomy-news-category-section-post-content-item">
                <div class="taxonomy-news-category-section-post-content-item-date">
                  <p><?php echo get_the_date(); ?></p>
                </div>
                <div class="taxonomy-news-category-section-post-content-item-text">
                  <a href="<?php the_permalink(); ?>">
                    <p><?php the_title(); ?></p>
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