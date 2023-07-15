<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_header(); ?>
</head>
<body <?php body_class(); ?>>
  <?php get_template_part('includes/header') ?>
  <div class="wrapper">
  <?php get_template_part('includes/common-breadcrumb'); ?>
    <section class="page-submission-success-section-wrapper">
      <div class="page-submission-success-section">
        <div class="page-submission-success-section-text">
          <p>
            お問い合わせいただきありがとうございます<br>内容を確認した後、担当者よりご連絡いたします
          </p>
        </div>
        <a href="<?php echo home_url(); ?>">ホームへ戻る</a>
      </div>
    </section>
    <?php get_template_part('includes/footer'); ?>
  </div>
  <?php get_footer(); ?>
</body>
</html>