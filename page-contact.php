<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_header(); ?>
</head>
<body <?php body_class(); ?>>
  <?php get_template_part('includes/header') ?>
  <div class="wrapper">
    <main class="page-contact-main-wrapper">
      <div class="page-contact-main">
        <h2 class="page-contact-main-title">
          お問い合わせ・資料請求
        </h2>
      </div>
    </main>
    <?php get_template_part('includes/common-breadcrumb'); ?>
    <section class="page-contact-section-wrapper">
      <div class="page-contact-section">
        <?php echo do_shortcode('[mwform_formkey key="2315"]'); ?>
      </div>
    </section>
    <?php get_template_part('includes/footer'); ?>
  </div>
  <?php get_footer(); ?>
</body>
</html>