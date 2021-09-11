$(function () {
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


  /*アコーディオンメニュー*/
  $('.menu-link').each(function () {
    $(this).on('click', function () {
      $("+.header-menu", this).slideToggle();
      $("+.header-menu", this).nextAll().slideToggle();
      return false;
    });
  });

  $('.menu01').on("click", function () {

    if ($(".arrow-01").hasClass("change")) {
      $(".arrow-01").attr("src", "./img/under_red.png");
      $(".arrow-01").toggleClass("change");
    } else {
      $(".arrow-01").attr("src", "./img/under_blue.png");
      $(".arrow-01").toggleClass("change");
    }
  });

  $('.menu02').on("click", function () {

    if ($(".arrow-02").hasClass("change")) {
      $(".arrow-02").attr("src", "./img/under_red.png");
      $(".arrow-02").toggleClass("change");
    } else {
      $(".arrow-02").attr("src", "./img/under_blue.png");
      $(".arrow-02").toggleClass("change");
    }
  });




  /*slickによるスライド機能*/
  $(".theme-content").slick({
    accessibility: true,
    autoplay: false,
    //autoplaySpeed: 1000,
    dots: true,
    fade: true,
  });




});
