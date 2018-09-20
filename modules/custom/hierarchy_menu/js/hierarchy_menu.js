(function ($) {
  $('#block_hierarchy_menu ul li').off().on('click',(function () {
    $(this).next('ul').toggle('active');
  }));
})(jQuery);

