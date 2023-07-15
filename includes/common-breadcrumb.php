<div class="common-breadcrumb-wrapper">
  <ul class="common-breadcrumb">
    <li><a href="<?php echo home_url(); ?>">
        <p>ホーム</p>
      </a></li>
    <span>
      <p>></p>
    </span>
    <?php
    global $target_taxonomy;
    if (is_category() || is_single()) : ?>
      <?php if (is_single()) : ?>
        <?php $categories = get_the_terms(get_the_ID(), $target_taxonomy); ?>
        <?php if (!empty($categories)) : ?>
          <li><a href="<?php echo get_term_link($categories[0]->term_id, $target_taxonomy); ?>"><?php echo esc_html($categories[0]->name); ?></a></li>
          <span>
            <p>></p>
          </span>
        <?php endif; ?>
        <li><p><?php the_title(); ?></p></li>
      <?php else : ?>
        <li><p><?php single_cat_title(); ?></p></li>
      <?php endif; ?>
    <?php elseif (is_archive()) : ?>
      <?php
      $post_type = get_post_type();
      $post_type_object = get_post_type_object($post_type);
      if($post_type_object->labels->singular_name == 'News') {
        echo '<li><p>お知らせ</p></li>';
      } elseif($post_type_object->labels->singular_name == 'blog') {
        echo '<li><p>ブログ</p></li>';
      }
      ?>
    <?php elseif (is_page()) : ?>
      <?php
      if(get_the_title() == 'courses') {
        echo '<li><p>コース・料金</p></li>';
      } elseif(get_the_title() == 'contact') {
        echo '<li><p>お問い合わせ・資料請求</p></li>';
      } elseif(get_the_title() == 'submission-success') {
        echo '<li><p>送信完了</p></li>';
      }
      ?>
    <?php elseif (is_search()) : ?>
      <li><p>検索結果：<?php echo get_search_query(); ?></p></li>
    <?php elseif (is_404()) : ?>
      <li><p>お探しのページは見つかりませんでした。</p></li>
    <?php endif; ?>
  </ul>
</div>