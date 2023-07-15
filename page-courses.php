<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header') ?>
  <div class="wrapper">
    <main class="page-courses-main-wrapper">
      <div class="page-courses-main">
        <h2 class="page-courses-main-title">
          コース・料金
        </h2>
      </div>
    </main>
    <?php get_template_part('includes/common-breadcrumb'); ?>
    <section class="page-courses-section-pricing-structure-wrapper">
      <div class="page-courses-section-pricing-structure">
        <h2 class="page-courses-section-pricing-structure-title">
          料金体系
        </h2>
        <div class="page-courses-section-pricing-structure-price">
          <div class="page-courses-section-pricing-structure-price-entrance">
            <p>入会金 39,800円</p>
          </div>
          <div class="page-courses-section-pricing-structure-price-plus">
            <span></span>
            <span></span>
          </div>
          <div class="page-courses-section-pricing-structure-price-month">
            <p>月額費用</p>
          </div>
        </div>
        <div class="page-courses-section-pricing-structure-price-text">
          <p>
            Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめ<br>
            のスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
          </p>
        </div>
      </div>
    </section>
    <?php
    $args = array(
      'post_type' => 'price',
      'posts_per_page' => 5,
    );
    $query = new WP_Query($args);
    $prices = array();
    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        $prices[] = array(
          'price' => get_post_meta(get_the_ID(), 'price', true)
        );
      }
    }
    wp_reset_postdata();
    ?>
    <section class="page-courses-section-pricing-table-wrapper">
      <div class="page-courses-section-pricing-table">
        <h2 class="page-courses-section-pricing-table-title">
          料金表
        </h2>
        <ul class="page-courses-section-pricing-table-panel">
          <li class="page-courses-section-pricing-table-panel-list">
            <div class="page-courses-section-pricing-table-panel-list-head">
              <p>基礎プラン</p>
            </div>
            <div class="page-courses-section-pricing-table-panel-list-body">
              <div class="page-courses-section-pricing-table-panel-list-body-price">
                <?php echo "<p>".number_format($prices[3]['price'])."円~</p>"; ?>
                <p>*月額（税抜価格）</p>
              </div>
              <ul class="page-courses-section-pricing-table-panel-list-body-item">
                <li class="page-courses-section-pricing-table-panel-list-body-item-list">
                  <div class="page-courses-section-pricing-table-panel-list-body-item-list-check">
                    <span></span>
                  </div>
                  <p>カリキュラム作成</p>
                </li>
                <li class="page-courses-section-pricing-table-panel-list-body-item-list">
                  <div class="page-courses-section-pricing-table-panel-list-body-item-list-check">
                    <span></span>
                  </div>
                  <p>TOEFL学習サポート</p>
                </li>
                <li class="page-courses-section-pricing-table-panel-list-body-item-list">
                  <div class="page-courses-section-pricing-table-panel-list-body-item-list-check">
                    <span></span>
                  </div>
                  <p>週一回のビデオMTG</p>
                </li>
              </ul>
            </div>
          </li>
          <li class="page-courses-section-pricing-table-panel-list">
            <div class="page-courses-section-pricing-table-panel-list-head">
              <p>基礎プラン</p>
            </div>
            <div class="page-courses-section-pricing-table-panel-list-body">
              <div class="page-courses-section-pricing-table-panel-list-body-price">
                <?php echo "<p>".number_format($prices[2]['price'])."円~</p>"; ?>
                <p>*月額（税抜価格）</p>
              </div>
              <ul class="page-courses-section-pricing-table-panel-list-body-item">
                <li class="page-courses-section-pricing-table-panel-list-body-item-list">
                  <div class="page-courses-section-pricing-table-panel-list-body-item-list-check">
                    <span></span>
                  </div>
                  <p>カリキュラム作成</p>
                </li>
                <li class="page-courses-section-pricing-table-panel-list-body-item-list">
                  <div class="page-courses-section-pricing-table-panel-list-body-item-list-check">
                    <span></span>
                  </div>
                  <p>TOEFL学習サポート</p>
                </li>
                <li class="page-courses-section-pricing-table-panel-list-body-item-list">
                  <div class="page-courses-section-pricing-table-panel-list-body-item-list-check">
                    <span></span>
                  </div>
                  <p>週一回のビデオMTG</p>
                </li>
                <li class="page-courses-section-pricing-table-panel-list-body-item-list">
                  <div class="page-courses-section-pricing-table-panel-list-body-item-list-check">
                    <span></span>
                  </div>
                  <p>月二回の模試（解説 付き）</p>
                </li>
              </ul>
            </div>
          </li>
          <li class="page-courses-section-pricing-table-panel-list">
            <div class="page-courses-section-pricing-table-panel-list-head">
              <p>おすすめ</p>
              <p>志望校対策プラン</p>
            </div>
            <div class="page-courses-section-pricing-table-panel-list-body">
              <div class="page-courses-section-pricing-table-panel-list-body-price">
                <?php echo '<p class="font-sub-color">'.number_format($prices[1]['price'])."円~</p>"; ?>
                <p>*月額（税抜価格）</p>
              </div>
              <ul class="page-courses-section-pricing-table-panel-list-body-item">
                <li class="page-courses-section-pricing-table-panel-list-body-item-list">
                  <div class="page-courses-section-pricing-table-panel-list-body-item-list-check">
                    <span></span>
                  </div>
                  <p>カリキュラム作成</p>
                </li>
                <li class="page-courses-section-pricing-table-panel-list-body-item-list">
                  <div class="page-courses-section-pricing-table-panel-list-body-item-list-check">
                    <span></span>
                  </div>
                  <p>TOEFL学習サポート</p>
                </li>
                <li class="page-courses-section-pricing-table-panel-list-body-item-list">
                  <div class="page-courses-section-pricing-table-panel-list-body-item-list-check">
                    <span></span>
                  </div>
                  <p>週一回のビデオMTG</p>
                </li>
                <li class="page-courses-section-pricing-table-panel-list-body-item-list">
                  <div class="page-courses-section-pricing-table-panel-list-body-item-list-check">
                    <span></span>
                  </div>
                  <p>月二回の模試（解説 付き） </p>
                </li>
                <li class="page-courses-section-pricing-table-panel-list-body-item-list">
                  <div class="page-courses-section-pricing-table-panel-list-body-item-list-check">
                    <span></span>
                  </div>
                  <p>週一の英語面接対策</p>
                </li>
              </ul>
            </div>
          </li>
          <li class="page-courses-section-pricing-table-panel-list">
            <div class="page-courses-section-pricing-table-panel-list-head">
              <p>フレックスプラン</p>
            </div>
            <div class="page-courses-section-pricing-table-panel-list-body">
              <div class="page-courses-section-pricing-table-panel-list-body-price">
                <?php echo "<p>".number_format($prices[0]['price'])."円~</p>"; ?>
                <p>*月額（税抜価格）</p>
              </div>
              <ul class="page-courses-section-pricing-table-panel-list-body-item">
                <li class="page-courses-section-pricing-table-panel-list-body-item-list">
                  <p>＊別途ご相談ください</p>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <?php get_template_part('includes/common-request'); ?>
    <?php get_template_part('includes/common-call'); ?>
    <?php get_template_part('includes/footer'); ?>
  </div>
  <?php get_footer(); ?>
</body>

</html>