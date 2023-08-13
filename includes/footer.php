<footer>
  <div class="footer-main-wrapper">
    <div class="footer-main">
      <ul class="footer-main-nav">
        <li>
          <a href="<?php echo home_url(); ?>"><p>ホーム</p></a>
        </li>
        <li>
          <div class="vertical-line"></div>
          <a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>"><p>お知らせ</p></a>
        </li>
        <li>
          <div class="vertical-line none-phone"></div>
          <a href="<?php echo esc_url(get_post_type_archive_link('blog')); ?>"><p>ブログ</p></a>
        </li>
        <li>
          <div class="vertical-line"></div>
          <a href="<?php echo home_url('courses'); ?>"><p>コース・料金</p></a>
        </li>
      </ul>
      <div class="footer-main-info">
        <a href="<?php echo home_url(); ?>" class="footer-main-info-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Engressのロゴ">
        </a>
        <div class="footer-main-info-text">
          <div class="footer-main-info-text-call">
            <img src="<?php echo get_template_directory_uri(); ?>/images/phone_white.svg" alt="電話マーク">
            <p>0123-456-7890</p>
          </div>
          <div class="footer-main-info-text-when">
            <p>平日08:00~20:00</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="footer-copyright-text">
      <p>&copy; 2020 Engress.</p>
    </div>
  </div>
</footer>