
$(function () {
  /*=======================================================================
  ハンバーガーメニュー
  *======================================================================= * /
  /*-----------------------------------------------------------------------
  .g_navはcss（Style_s)では非表示。display:none;
  →ボタンを押しても何も起らないので、メニューを表示できるようにしたい。
  →クリックした時にメニューの一覧を出す。
  ------------------------------------------------------------------------*/
  $('.menu-trigger').click(function () {

    /* 1_クリックした要素に「.active」要素を付与*/
    $(this).toggleClass('active');

    /* 2_display:noneからblockに変更*/
    $('.g_nav').css('display', 'block');

    /* 3_条件分岐*/
    if ($(this).hasClass('active')) {      /* もしクリックした要素に「.active」があった場合*/
      $('.g_nav').addClass('active');      /*「.active」要素を付与*/
    } else {                               /*「.active」がない場合*/
      $('.g_nav').removeClass('active');   /*「.active」要素を外す*/
    }

  });
  $('.g_nav ul li a').click(function () {
    $('.g_nav').toggleClass('active');
    $('.menu-trigger').toggleClass('active');
  });
});

/*=======================================================================
スライド機能
======================================================================= */
$(function () {
  function toggleChangeBtn() {
    var slideIndex = $('.book-box').index($('.active'));

    $('.button').show();

    if (slideIndex == 0) {
      $('.prev').hide();
    } else if (slideIndex == 2) {
      $('.next').hide();
    }
  }
  toggleChangeBtn();

  $('.next').click(function () {
    var $displaySlide = $('.active');
    $displaySlide.removeClass('active box-design');
    $displaySlide.next().addClass('active box-design');
    toggleChangeBtn();
  });

  $('.prev').click(function () {
    var $displaySlide = $('.active');
    $displaySlide.removeClass('active box-design');
    $displaySlide.prev().addClass('active box-design');
    toggleChangeBtn();
  });
});
/*=======================================================================
モーダル機能
======================================================================= */
$(function () {
  $('.modalOpen').each(function () {
    $(this).on('click', function () {
      var target = $(this).data('target');
      var modal = document.getElementById(target);
      $(modal).fadeIn();
      return false;
    });
  });

  $('.modalClose, .modal-main').on('click', function () {
    $('.modal-main').fadeOut();
    return false;
  });
});
/*=======================================================================
タブの切り替え機能
======================================================================= */
$(function () {
  var $filters = $('.filter [data-filter]'),
    $boxes = $('.trip-wrapper [data-category]');

  $filters.on('click', function (e) {
    e.preventDefault();
    var $this = $(this);
    $filters.removeClass('active');
    $this.addClass('active');

    var $filterTime = $this.attr('data-filter');

    if ($filterTime == 'all') {
      $boxes.removeClass('is-animated')
        .fadeOut().promise().done(function () {
          $boxes.addClass('is-animated').fadeIn();
        });
    } else {
      $boxes.removeClass('is-animated')
        .fadeOut().promise().done(function () {
          $boxes.filter('[data-category = "' + $filterTime + '"]')
            .addClass('is-animated').fadeIn();
        });
    }
  });
});
