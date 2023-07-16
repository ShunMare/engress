<div class="single-blog-side mt-0">
  <div class="single-blog-side-relate">
    <p class="single-blog-large-box">
      関連記事
    </p>
    <?php
    $post_id = get_the_ID();
    $categories = get_the_terms($post_id, 'blog-category');
    if ($categories) {
      $category = $categories[0];
      $args = array(
        'post_type' => 'blog',
        'posts_per_page' => 3,
        'post__not_in' => array($post_id),
        'tax_query' => array(
          array(
            'taxonomy' => 'blog-category',
            'field'    => 'slug',
            'terms'    => $category->slug,
          ),
        ),
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
    ?>
          <div class="single-blog-side-post">
            <?php
            if (has_post_thumbnail() && get_the_post_thumbnail_url() != "") {
              echo '<img src="' . get_the_post_thumbnail_url() . '" alt="メイン画像">';
            } else {
              echo '<img src="' . get_template_directory_uri() . '/images/noimage.png"  alt="イメージなし">';
            }
            ?>
            <a href="<?php the_permalink(); ?>">
              <?php
              $title = get_the_title();
              if (!empty($title)) : ?>
                <?php echo $title; ?>
              <?php else : ?>
                タイトルのない投稿
              <?php endif; ?>
            </a>
          </div>
    <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p>該当する投稿が見つかりませんでした。</p>';
      endif;
    }
    ?>

  </div>
  <div class="single-blog-side-category">
    <p class="single-blog-large-box">カテゴリー</p>
    <ul>
      <?php
      $args = array(
        'post_type' => 'blog',
        'posts_per_page' => 3
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
          $categories = get_the_terms(get_the_ID(), 'blog-category');
          if (!empty($categories)) {
            foreach ($categories as $category) {
              echo '<li>';
              echo '<a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a>';
              echo '</li>';
            }
          }
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p>該当する投稿が見つかりませんでした。</p>';
      endif;
      ?>
    </ul>
  </div>
</div>