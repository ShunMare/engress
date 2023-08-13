<!-- <?php wp_body_open(); ?> -->
<header>
    <div class="header-wrapper">
      <div class="header-left">
        <a  href="<?php echo home_url(); ?>" class="header-left-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Engressのロゴ">
        </a>
        <ul class="header-left-nav none-tablet-landscape-phone">
          <li><a href="<?php echo home_url(); ?>"><p>ホーム</p></a></li>
          <li><a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>"><p>お知らせ</p></a></li>
          <li><a href="<?php echo esc_url(get_post_type_archive_link('blog')); ?>"><p>ブログ</p></a></li>
          <li><a href="<?php echo home_url('courses'); ?>"><p>コース・料金</p></a></li>
        </ul>
      </div>
      <div class="header-right none-tablet-landscape-phone">
        <div class="header-right-contact">
          <div class="header-right-contact-time">
            <p>平日08:00〜20:00</p>
          </div>
          <div class="header-right-contact-call">
            <img src="<?php echo get_template_directory_uri(); ?>/images/phone_black.svg" alt="電話のロゴ">
            <p>0123-456-7890</p>
          </div>
        </div>
        <div class="header-right-button">
          <a href="<?php echo home_url('contact'); ?>" class="header-right-button-documents">
            <p>資料請求</p>
          </a>
          <a href="<?php echo home_url('contact'); ?>" class="header-right-button-contact">
            <p>お問い合わせ</p>
          </a>
        </div>
      </div>
      <div class="header-hamburger-wrapper none-tablet-landscape-desktop">
        <div id="header-hamburger-toggle">
          <div class="header-hamburger-toggle-content">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <nav class="header-nav">
        <ul class="header-nav-content">
          <li><a class="nav-link" href="<?php echo home_url(); ?>"><p>ホーム</p></a></li>
          <li><a class="nav-link" href="<?php echo esc_url(get_post_type_archive_link('news')); ?>"><p>お知らせ</p></a></li>
          <li><a class="nav-link" href="<?php echo esc_url(get_post_type_archive_link('blog')); ?>"><p>ブログ</p></a></li>
          <li><a class="nav-link" href="<?php echo home_url('courses'); ?>"><p>コース・料金</p></a></li>
          <li><a class="nav-link" href="<?php echo home_url('contact'); ?>"><p>資料請求</p></a></li>
          <li><a class="nav-link" href="<?php echo home_url('contact'); ?>"><p>お問い合わせ</p></a></li>
        </ul>
      </nav>
    </div>
  </header>
