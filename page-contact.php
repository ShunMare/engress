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
        <!-- <div class="page-contact-section-description">
          <p>
            弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
          </p>
        </div>
        <div class="page-contact-section-info">
          <div class="page-contact-section-info-input">
            <p class="page-contact-section-info-input-label">
              会社名
            </p>
            <input type="text" placeholder="Engress">
          </div>
          <div class="page-contact-section-info-input">
            <p class="page-contact-section-info-input-label">
              氏名
            </p>
            <input type="text" placeholder="田中　太郎">
          </div>
          <div class="page-contact-section-info-input">
            <p class="page-contact-section-info-input-label">
              メールアドレス
            </p>
            <input type="text" placeholder="example@example.com">
          </div>
          <div class="page-contact-section-info-input">
            <p class="page-contact-section-info-input-label">
              電話番号
            </p>
            <input type="text" placeholder="01-2345-6789">
          </div>
        </div>
        <div class="page-contact-section-option">
          <p>
            お問い合わせの種類を選択してください（<span class="text-bold">資料請求の方は資料請求を選択ください</span>）
          </p>
          <div class="page-contact-section-option-button">
            <input type="radio" name="option">
            <p>商談のご相談</p>
          </div>
          <div class="page-contact-section-option-button">
            <input type="radio" name="option">
            <p>サービスに関するお問い合わせ</p>
          </div>
          <div class="page-contact-section-option-button">
            <input type="radio" name="option">
            <p>資料請求</p>
          </div>
          <div class="page-contact-section-option-button">
            <input type="radio" name="option">
            <p>その他</p>
          </div>
        </div>
        <div class="page-contact-section-inquiry">
          <p>
            お問い合わせ内容
          </p>
          <textarea name="" id="" cols="30" rows="10" placeholder="入力して下さい"></textarea>
        </div>
        <div class="page-contact-section-policy">
          <a href="#">プライバシーポリシー</a>
          <p>に同意の上、送信ください。</p>
        </div>
        <div class="page-contact-section-agreement">
          <input type="checkbox" class="hidden">
          <p>プライバシーポリシーに同意する</p>
        </div>
        <div class="page-contact-section-send">
          <a href="<?php echo home_url('submission-success'); ?>">送信する</a>
        </div> -->
      </div>
    </section>
    <?php get_template_part('includes/footer'); ?>
  </div>
  <?php get_footer(); ?>
</body>
</html>