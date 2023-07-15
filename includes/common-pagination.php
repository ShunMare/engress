<?php
global $the_query;
$big = 999999999;
$paginate_links = paginate_links(array(
  'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
  'format' => '?paged=%#%',
  'current' => max(1, get_query_var('paged')),
  'total' => $the_query->max_num_pages,
  'type' => 'array',
  'prev_text' => 'Prev',
  'next_text' => 'Next',
  'end_size' => 1,
  'mid_size' => 2,
));
if ($paginate_links) {
  echo '<div class="common-pagination-wrapper">';
  echo '<div class="common-pagination">';
  $current_page = get_query_var('paged');
  $last_page = intval(end(preg_replace('/\D/', '', $paginate_links)));
  foreach ($paginate_links as $paginate_link) {
    $page_num = intval(preg_replace('/\D/', '', $paginate_link));
    if (strpos($paginate_link, 'Prev') !== false || strpos($paginate_link, 'Next') !== false) {
      continue;
    } else if (strpos($paginate_link, 'current') !== false) {
      echo '<div class="common-pagination-box current-page">';
      echo '<p>';
      echo $paginate_link;
    } else if (strpos($paginate_link, 'dots') !== false) {
      echo '<div class="common-pagination-box-bo-border">';
      echo '<p>';
      echo $paginate_link;
    } else {
      echo '<div class="common-pagination-box">';
      echo '<p>';
      echo $paginate_link;
    }
    echo '</p>';
    echo '</div>';
  }
  echo '</div>';
  echo '</div>';
}
