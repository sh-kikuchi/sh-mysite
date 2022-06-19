/*=======================================================================
Topに戻る
======================================================================= */
window.onload = function () {
  let Animation = function () {
    //アイコンの位置取得
    let pageTop = document.getElementById('vampire');
    //要素の位置座標を取得
    let rect = pageTop.getBoundingClientRect();
    //topからの距離
    let scrollTop = rect.top + window.pageYOffset;

    if (scrollTop > 600) {
      pageTop.classList.add('show');
    } else {
      pageTop.classList.remove('show');
    }
  }
  window.addEventListener('scroll', Animation);
}
/*=======================================================================
スクロール時のフェードイン
======================================================================= */
let fadeInTarget = document.querySelectorAll('.fade-in');
window.addEventListener('scroll', () => {
  for (let i = 0; i < fadeInTarget.length; i++) {
    const rect = fadeInTarget[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight; // 現在のブラウザの高さ
    if (scroll > offset - windowHeight + 200) {
      fadeInTarget[i].classList.add('scroll-in');
    }
  }
});
/*=======================================================================
スクロール時のヘッダー表示
======================================================================= */
(function () {
  const fh = document.getElementById('fixed-header');
  const isUp = (function () {
    const scrollElement = document.scrollingElement; //スクロール要素取得
    let flag, prePoint, scrollPoint;
    return function () {
      scrollPoint = scrollElement.scrollTop; //スクロール位置の取得
      flag = prePoint > scrollPoint ? true : false;
      prePoint = scrollPoint;
      return flag;
    }
  }());
  window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
      if (isUp()) {
        fh.classList.remove('is-show');
      } else {
        fh.classList.add('is-show')
      }
    } else {
      fh.classList.remove('is-show');
    }
  })
}());
/*=======================================================================
ハンバーガーメニュー
======================================================================= */
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
// document.querySelectorAll(".modalOpen").forEach(function (targetImage) {
//   targetImage.onclick = function () {
//     const dataTarget = this.getAttribute("data-target");
//     const modal = document.getElementById(dataTarget);
//     modal.classList.remove("modal-remove");
//     modal.classList.add("modal-show");
//     alert(modal.className);
//     return false;
//   };
// });
// document.querySelectorAll(".modal-close").forEach(function (targetImage) {
//   targetImage.onclick = function () {
//     const dataTarget = this.getAttribute("data-target");
//     const modal = document.getElementById(dataTarget);
//     modal.classList.remove("modal-show");
//     modal.classList.add("modal-remove");
//     alert(modal.className);
//     return false;
//   };
// });

$(function () {
  $('.modalOpen').each(function () {
    $(this).on('click', function () {
      var target = $(this).data('target');
      var modal = document.getElementById(target);
      console.log(modal);
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
フィルター機能
======================================================================= */
$(function () {
  var $filters = $('.filter [data-filter]'),
    $boxes = $('.modal-area [data-category]');

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
/*=======================================================================
タブ切り替え（live/playlist)
=======================================================================*/
document.addEventListener('DOMContentLoaded', function () {
  // タブに対してクリックイベントを適用
  const tabs = document.getElementsByClassName('tab');
  for (let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', tabSwitch, false);
  }

  // タブをクリックすると実行する関数
  function tabSwitch() {
    // タブのclassの値を変更
    document.getElementsByClassName('is-active')[0].classList.remove('is-active');
    this.classList.add('is-active');
    // コンテンツのclassの値を変更
    document.getElementsByClassName('is-show')[0].classList.remove('is-show');
    const arrayTabs = Array.prototype.slice.call(tabs);
    const index = arrayTabs.indexOf(this);
    document.getElementsByClassName('panel')[index].classList.add('is-show');
  };
}, false);
/*=======================================================================
フォームのエラーチェック
======================================================================= */
const contactForm = document.getElementById('contactForm');
contactForm.addEventListener('submit', function (e) {
  e.preventDefault();

  //値を取得
  const username = document.getElementById('username').value;
  const mail = document.getElementById('mail').value;
  const option = document.getElementById('option').value;
  const comment = document.getElementById('comment').value;

  //空チェック用配列
  const formArray = [username, mail, option, comment];

  //メールアドレスの正規表現
  const regex = /^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/;

  // 空チェック
  for (let i = 0; i < formArray.length; i++) {
    if (formArray[i] === "") {
      switch (i) {
        case 0:
          alert("名前を入力して下さい");
          break;
        case 1:
          alert("メールアドレスを入力して下さい");
          break;
        case 2:
          alert("ご用件を選択して下さい");
          break;
        case 3:
          alert("問い合わせ内容を入力してください");
          break;
      }
      return false;
    }
  }

  // 名前の文字数制限
  if (username.length > 25) {
    alert('名前は25文字以上で入力してください。')
    return false;
  }

  // メールアドレスの形式チェック
  if (!regex.test(mail)) {
    alert('メールアドレスの形式が不正です')
    return false;
  }

  // 名前の文字数制限
  if (comment.length > 200) {
    alert('コメントは200文字以内で入力してください。')
    return false;
  }

  $.ajax({
    type: 'post',
    url: 'send_mail.php',
    datatype: 'json',
    data: {
      username: $("#username").val(),
      mail: $("#mail").val(),
      option: $("#option").val(),
      comment: $("#comment").val()
    }
  })
    .done(function (response) {
      confirm('本当に送信しても宜しいでしょうか？');
      $("#username").text(response["username"]);
      $("#mail").text(response["mail"]);
      $("#option").text(response["option"]);
      $("#comment").text(response["comment"]);
      $("#username").val("");
      $("#mail").val("");
      $("#option").val("");
      $("#comment").val("");
    })
    .fail(function () {
      alert("通信エラー");
    });
});
