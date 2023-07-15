<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header') ?>
  <div class="wrapper">
    <?php
    global $target_taxonomy;
    $target_taxonomy = 'news-category';
    ?>
    <?php get_template_part('includes/common-breadcrumb'); ?>
    <div class="single-news-wrapper">
      <div class="single-news">
        <div class="single-news-content  mt-0">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
          ?>
              <h1><?php the_title(); ?></h1>
              <div class="single-news-content-info">
                <p class="single-news-content-info-date"><?php echo get_the_date(); ?></p>
              </div>
              <div class="single-news-content-text">
                <?php the_content(); ?>
              </div>
          <?php
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
    <?php get_template_part('includes/common-request'); ?>
    <?php get_template_part('includes/common-call'); ?>
    <?php get_template_part('includes/footer'); ?>
  </div>
  <?php get_footer(); ?>
</body>

</html>