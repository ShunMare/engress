$(function($) {
  $(function () {
      $('#header-hamburger-toggle').on('click', function() {
        $('header').toggleClass('header-nav-open');
      });
  });
});

$(function($) {
  $(function () {
      $('.index-section-qa-content-toggle-question-toggle').on('click', function() {
        $(this).toggleClass('bar-toggle-open');
        $(this).closest('.index-section-qa-content-toggle').find('.index-section-qa-content-toggle-answer').toggle();
      });
  });
});