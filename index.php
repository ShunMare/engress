<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header') ?>
  <div class="wrapper">
    <main class="index-main-wrapper">
      <div class="index-main">
        <h2 class="index-main-title">
          TOEFL対策はEngress
        </h2>
        <div class="index-main-text">
          <p>日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p>
        </div>
        <div class="index-main-button">
          <a href="<?php echo home_url('contact'); ?>" class="index-main-button-content">
            <p>資料請求</p>
          </a>
        </div>
        <a href="<?php echo home_url('contact'); ?>" class="index-main-inquiry">
          <p>お問い合わせ</p>
        </a>
      </div>
    </main>
    <section class="index-section-trouble-wrapper">
      <div class="index-section-trouble">
        <h2 class="index-section-trouble-title">
          TOEFL学習で<br class="none-tablet-portrait-desktop">こんな悩みありませんか？
        </h2>
        <ul class="index-section-trouble-list">
          <li>
            <p>勉強の習慣が<br class="none-phone">身についていない</p>
          </li>
          <li>
            <p>勉強しているはず<br class="none-phone">なのに点数が伸びない</p>
          </li>
          <li>
            <p>正しい勉強方法が<br class="none-phone">わからない</p>
          </li>
        </ul>
        <div class="index-section-trouble-introduction">
          <div class="index-section-trouble-introduction-text">
            <div class="index-section-trouble-introduction-text-content">
              <p class="index-section-trouble-introduction-text-content-main">
                Engressは<br><span class="underline_sub_color">TOEFLに特化した<br class="none-tablet-portrait-desktop">スクール</span>です
              </p>
              <p class="index-section-trouble-introduction-text-content-sub">
                完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br class="none-phone">TOEFLの苦手分野を克服します。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="index-section-strong-wrapper">
      <div class="index-section-strong">
        <h2 class="index-section-strong-title">
          TOEFL対策に特化したEngress3つの強み
        </h2>
        <div class="index-section-strong-feature">
          <div class="index-section-strong-feature-content">
            <div class="index-section-strong-feature-content-text">
              <div class="index-section-strong-feature-content-text-label">
                <p>特長 １</p>
              </div>
              <div class="index-section-strong-feature-content-text-title">
                <p>TOEFLに最適化された<br>無駄のないカリキュラム</p>
              </div>
              <div class="index-section-strong-feature-content-text-content">
                <p>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
              </div>
            </div>
            <div class="index-section-strong-feature-content-img none-tablet-landscape-phone">
              <img src="<?php echo get_template_directory_uri(); ?>/images/feature01.jpg" alt="パソコン作業">
            </div>
          </div>
          <div class="index-section-strong-feature-content">
            <div class="index-section-strong-feature-content-text">
              <div class="index-section-strong-feature-content-text-label">
                <p>特長 ２</p>
              </div>
              <div class="index-section-strong-feature-content-text-title">
                <p>日本人指導歴10年以上の<br>経験豊富な講師陣</p>
              </div>
              <div class="index-section-strong-feature-content-text-content">
                <p>Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
              </div>
            </div>
            <div class="index-section-strong-feature-content-img none-tablet-landscape-phone">
              <img src="<?php echo get_template_directory_uri(); ?>/images/feature02.jpg" alt="授業風景">
            </div>
          </div>
          <div class="index-section-strong-feature-content">
            <div class="index-section-strong-feature-content-text">
              <div class="index-section-strong-feature-content-text-label">
                <p>特長 ３</p>
              </div>
              <div class="index-section-strong-feature-content-text-title">
                <p>平均3ヶ月でTOEFL iBT20点アップ</p>
              </div>
              <div class="index-section-strong-feature-content-text-content">
                <p>Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
              </div>
            </div>
            <div class="index-section-strong-feature-content-img none-tablet-landscape-phone">
              <img src="<?php echo get_template_directory_uri(); ?>/images/feature03.jpg" alt="上達の様子">
            </div>
          </div>
        </div>
        <div class="index-section-strong-plan">
          <div class="index-section-strong-plan-content">
            <p>Engressの料金プランはこちら</p>
            <div class="index-section-strong-plan-content-button">
              <a href="<?php echo home_url('courses'); ?>" class="index-section-strong-plan-content-button-content">
                <p>料金を見てみる</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="index-section-success-wrapper">
      <div class="index-section-success">
        <h2>TOEFL成功事例</h2>
        <?php
        $args = array(
          'post_type' => 'result',
          'posts_per_page' => 3,
        );
        $query = new WP_Query($args);
        ?>
        <?php
        if ($query->have_posts()) :
          echo '<div class="index-section-success-example">';
          while ($query->have_posts()) : $query->the_post();
            echo '<div class="index-section-success-example-card">';
            echo '<p class="index-section-success-example-card-text none-tablet-landscape-phone">';
            echo get_post_meta(get_the_ID(), 'result', true);
            echo '</p>';
            echo '<div class="index-section-success-example-card-img">';
            $image = get_field('image');
            echo '<img src="' . esc_url($image['url']) . '" alt="成功者1">';
            echo '</div>';
            echo '<div class="index-section-success-example-card-info">';
            echo '<p class="index-section-success-example-card-info-text none-desktop">';
            echo get_post_meta(get_the_ID(), 'result', true);
            echo '</p>';
            echo '<div class="index-section-success-example-card-info-personal">';
            echo '<div class="index-section-success-example-card-info-personal-job">';
            echo '<p>' . get_post_meta(get_the_ID(), 'job', true) . '</p>';
            echo '</div>';
            echo '<div class="index-section-success-example-card-info-personal-name">';
            echo '<p>' . get_post_meta(get_the_ID(), 'name', true) . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="index-section-success-example-card-info-result">';
            echo '<p>' . get_post_meta(get_the_ID(), 'point', true) . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          endwhile;
          echo '</div>';
        endif;
        wp_reset_postdata();
        ?>
    </section>
    <section class="index-section-Workflow-wrapper">
      <div class="index-section-Workflow">
        <h2 class="index-section-Workflow-title">
          ご利用の流れ
        </h2>
        <ul class="index-section-Workflow-content">
          <li class="index-section-Workflow-content-list">
            <div class="index-section-Workflow-content-list-no">
              <p>01</p>
            </div>
            <div class="index-section-Workflow-content-list-text">
              <div class="index-section-Workflow-content-list-text-item">
                <p>お問い合わせ</p>
                <div class="vertical-line none-tablet-landscape-phone"></div>
              </div>
              <div class="index-section-Workflow-content-list-text-description">
                <p>まずはフォームまたはお電話からお申し込みください。</p>
              </div>
            </div>
          </li>
          <li class="index-section-Workflow-content-list">
            <div class="index-section-Workflow-content-list-no">
              <p>02</p>
            </div>
            <div class="index-section-Workflow-content-list-text">
              <div class="index-section-Workflow-content-list-text-item">
                <p>ヒアリング</p>
                <div class="vertical-line none-tablet-landscape-phone"></div>
              </div>
              <div class="index-section-Workflow-content-list-text-description">
                <p>現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
              </div>
            </div>
          </li>
          <li class="index-section-Workflow-content-list">
            <div class="index-section-Workflow-content-list-no">
              <p>03</p>
            </div>
            <div class="index-section-Workflow-content-list-text">
              <div class="index-section-Workflow-content-list-text-item">
                <p>学習プランのご提供</p>
                <div class="vertical-line none-tablet-landscape-phone"></div>
              </div>
              <div class="index-section-Workflow-content-list-text-description">
                <p>目標達成のために最適な学習プランをご提案致します。</p>
              </div>
            </div>
          </li>
          <li class="index-section-Workflow-content-list">
            <div class="index-section-Workflow-content-list-no">
              <p>04</p>
            </div>
            <div class="index-section-Workflow-content-list-text">
              <div class="index-section-Workflow-content-list-text-item">
                <p>ご入会</p>
                <div class="vertical-line none-tablet-landscape-phone"></div>
              </div>
              <div class="index-section-Workflow-content-list-text-description">
                <p>お申込み完了後、レッスンがスタートします。</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="index-section-qa-wrapper">
      <div class="index-section-qa">
        <h2>よくある質問</h2>
        <div class="index-section-qa-content">
          <div class="index-section-qa-content-toggle">
            <div class="index-section-qa-content-toggle-question">
              <div class="index-section-qa-content-toggle-question-container">
                <p>Engressはサラリーマンでも学習を続けられるでしょうか？</p>
              </div>
              <div class="index-section-qa-content-toggle-question-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
              </div>
            </div>
            <div class="index-section-qa-content-toggle-answer">
              <p>Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
            </div>
          </div>
          <div class="index-section-qa-content-toggle">
            <div class="index-section-qa-content-toggle-question">
              <div class="index-section-qa-content-toggle-question-container">
                <p>教材はオリジナルのものを使用しているのでしょうか？</p>
              </div>
              <div class="index-section-qa-content-toggle-question-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
              </div>
            </div>
            <div class="index-section-qa-content-toggle-answer">
              <p>Engressオリジナルの教材を使用しております。</p>
            </div>
          </div>
          <div class="index-section-qa-content-toggle">
            <div class="index-section-qa-content-toggle-question">
              <div class="index-section-qa-content-toggle-question-container">
                <p>講師に日本人はいますか？</p>
              </div>
              <div class="index-section-qa-content-toggle-question-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
              </div>
            </div>
            <div class="index-section-qa-content-toggle-answer">
              <p>日本人講師も在籍しております。</p>
            </div>
          </div>
          <div class="index-section-qa-content-toggle">
            <div class="index-section-qa-content-toggle-question">
              <div class="index-section-qa-content-toggle-question-container">
                <p>TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</p>
              </div>
              <div class="index-section-qa-content-toggle-question-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
              </div>
            </div>
            <div class="index-section-qa-content-toggle-answer">
              <p>TOEFL対策に特化しておりますが、それ以外のサポートは行っておりません。</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="index-section-blog-and-notice-wrapper">
      <div class="index-section-blog-and-notice-container">
        <section class="index-section-blog-wrapper">
          <div class="index-section-blog">
            <h2 class="index-section-blog-title">
              ブログ
            </h2>
            <div class="index-section-blog-content">
              <?php
              $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 3
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                  $categories = get_the_terms(get_the_ID(), 'blog-category');
              ?>
                  <div class="index-section-blog-content-post">
                    <div class="index-section-blog-content-post-img">
                      <?php
                      if (has_post_thumbnail() && get_the_post_thumbnail_url() != "") {
                        echo '<img src="' . get_the_post_thumbnail_url() . '" alt="">';
                      } else {
                        echo '<img src="' . get_template_directory_uri() . '/images/noimage.png"  alt="イメージなし">';
                      }
                      ?>
                        <?php
                        if (!empty($categories)) {
                          echo '<div class="index-section-blog-content-post-img-category">';
                          echo '<p>' . esc_html($categories[0]->name) . '</p>';
                          echo '</div>';
                        }
                        ?>
                    </div>
                    <div class="index-section-blog-content-post-text">
                      <a href="<?php the_permalink(); ?>" class="index-section-blog-content-post-text-title">
                        <?php
                        $title = get_the_title();
                        if (!empty($title)) : ?>
                          <p><?php echo $title; ?></p>
                        <?php else : ?>
                          <p>タイトルのない投稿</p>
                        <?php endif; ?>
                      </a>
                      <div class="index-section-blog-content-post-text-date">
                        <p><?php echo get_the_date(); ?></p>
                      </div>
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
        </section>
        <section class="index-section-notice-wrapper">
          <div class="index-section-notice">
            <h2 class="index-section-notice-title">
              お知らせ
            </h2>
            <div class="index-section-notice-content">
              <?php
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => 3
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
              ?>
                  <div class="index-section-notice-content-post">
                    <div class="index-section-notice-content-post-date">
                      <p><?php echo get_the_date(); ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="index-section-notice-content-post-title">
                      <?php
                      $title = get_the_title();
                      if (!empty($title)) : ?>
                        <p><?php echo $title; ?></p>
                      <?php else : ?>
                        <p>タイトルのない投稿</p>
                      <?php endif; ?>
                    </a>
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
        </section>
      </div>
    </div>
    <?php get_template_part('includes/common-request'); ?>
    <?php get_template_part('includes/common-call'); ?>
    <?php get_template_part('includes/footer'); ?>
  </div>
  <?php get_footer(); ?>
</body>

</html>