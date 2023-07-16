<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <div class="wrapper">
    <?php
    global $target_taxonomy;
    $target_taxonomy = 'blog-category';
    ?>
    <?php get_template_part('includes/common-breadcrumb'); ?>
    <div class="single-blog-wrapper">
      <div class="single-blog">
        <div class="single-blog-content mt-0">
          <?php
          $title = get_the_title();
          if (!empty($title)) : ?>
            <h1><?php echo $title; ?></h1>
          <?php else : ?>
            <h1>タイトルのない投稿</h1>
          <?php endif; ?>
          <?php get_template_part('includes/blog-info') ?>
          <?php
          if (has_post_thumbnail() && get_the_post_thumbnail_url() != "") {
            echo '<img src="' . get_the_post_thumbnail_url() . '" alt="メイン画像">';
          } else {
            echo '<img src="' . get_template_directory_uri() . '/images/noimage.png"  alt="イメージなし">';
          }
          ?>
          <div class="single-blog-content-text">
            <?php the_content(); ?>
            <div class="single-blog-content-text-recommend">
              <h2>おすすめの記事</h2>
              <?php
              $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 3,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'blog-tag',
                    'field' => 'slug',
                    'terms' => 'pickup',
                  )
                )
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
              ?>
                  <div class="single-blog-content-text-recommend-post">
                    <div class="post-img mt-0">
                      <?php
                      if (has_post_thumbnail() && get_the_post_thumbnail_url() != "") {
                        echo '<img class="mt-0" src="' . get_the_post_thumbnail_url() . '" alt="授業風景">';
                      } else {
                        echo '<img class="mt-0" src="' . get_template_directory_uri() . '/images/noimage.png"  alt="イメージなし">';
                      }
                      ?>
                        <?php
                        $categories = get_the_terms(get_the_ID(), 'blog-category');
                        if (!empty($categories)) {
                          echo '<p class="post-img-category mt-0">';
                          echo esc_html($categories[0]->name);
                          echo '</p>';
                        }
                        ?>
                    </div>
                    <div class="post-text mt-0">
                      <p class="post-text-date mt-0">
                        <?php the_time('Y-m-d'); ?>
                      </p>
                      <a href="<?php the_permalink(); ?>" class="post-text-title">
                        <?php
                        $title = get_the_title();
                        if (!empty($title)) : ?>
                          <p><?php echo $title; ?></p>
                        <?php else : ?>
                          <p>タイトルのない投稿</p>
                        <?php endif; ?>
                      </a>
                    </div>
                  </div>
              <?php
                endwhile;
                wp_reset_postdata();
              else :
                echo '<p>該当する投稿が見つかりませんでした。</p>';
              endif;
              ?>
            </div>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
    <?php get_template_part('includes/common-request'); ?>
    <?php get_template_part('includes/common-call'); ?>
    <?php get_template_part('includes/footer'); ?>
  </div>
  <?php get_footer(); ?>
</body>

</html>