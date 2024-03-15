
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる


});


//ハンバーグメニュー
jQuery(function ($) {

    //ナビバートグル
    $('.js-hamburger').on('click', function () {
      if ($('.js-hamburger').hasClass('is-open')) {
        //$('.js-drawer-menu').fadeOut();
        $('.header').removeClass('is-open');
        $(this).removeClass('is-open');
        $("body").removeClass("is-open");
        $(".sp-nav").removeClass("is-open");
        
      } else {
        //$('.js-drawer-menu').fadeIn();
        $('.header').addClass('is-open');
        $('.sp-nav').addClass('is-open');
        $(this).addClass('is-open');
       
      }
    });
  
  });

 
 




  //ヘッダーの高さによるカラーチェンジ
  $(function () {
    $(window).on('scroll', function () {
      if ($('.header').height()  < $(this).scrollTop()) {
          $('.header').addClass('change-color');
      } else {
          $('.header').removeClass('change-color');
      }
    });
  });




//informationの画像出現
//要素の取得とスピードの設定
var box = $('.information__img,.card2__img,.pc-price__img'),
    speed = 700;  
 
//.colorboxの付いた全ての要素に対して下記の処理を行う
box.each(function(){
    $(this).append('<div class="color"></div>')
    var color = $(this).find($('.color')),
    image = $(this).find('img');
    var counter = 0;
 
    image.css('opacity','0');
    color.css('width','0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function(){
        if(counter == 0){
        $(this).delay(200).animate({'width':'100%'},speed,function(){
                   image.css('opacity','1');
                   $(this).css({'left':'0' , 'right':'auto'});
                   $(this).animate({'width':'0%'},speed);
                })
            counter = 1;
          }
     });
});



//top戻るボタン
$(document).ready(function() {
  var pagetop = $('.pagetop');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
   });
});



//swiper
const mySwiper = new Swiper('.swiper,.js-campaign-swiper', {
  slidesPerView: "auto",
  spaceBetween: 24,
  loop: true,
  grabCursor: true,
  pagination: {
  },
  
  navigation: {
    nextEl: '  .swiper-button-next',
    prevEl: '  .swiper-button-prev',
  },
  breakpoints: {
    765: {
      spaceBetween: 40,
      loop: true,
    autoplay: {     //追記
        delay: 0,   //追記
    },              //追記
  
    },
  },
});


jQuery(document).ready(function($){
  $('.pagination__list').paginathing({
      perPage: 4,
      firstLast: false,
      prevText:'<' ,
      nextText:'>' ,
      activeClass: 'active',
  })
});

jQuery(document).ready(function($){
  $('.pagination__list2').paginathing({
      perPage: 10,
      firstLast: false,
      prevText:'<' ,
      nextText:'>' ,
      activeClass: 'active',
  })
});

jQuery(document).ready(function($){
  $('.pagination__list3').paginathing({
      perPage: 6,
      firstLast: false,
      prevText:'<' ,
      nextText:'>' ,
      activeClass: 'active',
  })
});

//モーダル
$(".js-modal-img").click(function () {
  // クリックした画像のHTML要素を取得して、置き換える
  $(".js-modal-content").html($(this).prop("outerHTML"));

  $(".js-modal").fadeIn(200);
  return false;
});

$(".js-modal").click(function () {
  // 非表示にする
  $(".js-modal").fadeOut(200);
  return false;
});


//タブ
//任意のタブにURLからリンクするための設定
// ハッシュ値を取得する関数
function getHash() {
  return window.location.hash; // 現在のURLのハッシュ値を取得
}

// ハッシュ値に基づいてタブをアクティブにする関数
function activateTab(hash) {
  $('.tab__box li').removeClass("active"); // すべてのタブから active クラスを削除
  $(`[href="${hash}"]`).parent().addClass("active"); // ハッシュ値に対応するタブに active クラスを追加
  $('.area').removeClass("is-active"); // すべてのエリアから is-active クラスを削除
  $(hash).addClass("is-active"); // ハッシュ値に対応するエリアに is-active クラスを追加
}

// ページが読み込まれたときの処理
$(window).on('load', function () {
  var hash = getHash(); // URLのハッシュ値を取得
  if (hash) { // ハッシュ値が存在する場合
      activateTab(hash); // タブをアクティブにする
  }
});

// タブをクリックしたときの処理
$('.tab__box a').on('click', function() {
  var hash = $(this).attr('href'); // クリックされたリンクのハッシュ値を取得
  activateTab(hash); // タブをアクティブにする
});





const $js_tab = $(".js-infoTab-trigger");
  const $js_tab_target = $(".js-infoContent-target");
  const cls = "is-active";

  $js_tab.on("click", function () {
    const this_category = $(this).data("category");
    $js_tab.removeClass(cls);
    $(this).addClass(cls);
    $js_tab_target.removeClass(cls);
    $js_tab_target.each(function () {
      const target_data = $(this).data("target");
      if (this_category === target_data) {
        $(this).addClass(cls);
      }
    });
  });



     //タブへダイレクトリンクの実装
     $(function () {
      //リンクからハッシュを取得
      var hash = location.hash;
      hash = (hash.match(/^#tab_panel-\d+$/) || [])[0];
      //リンクにハッシュが入っていればtabNameに格納
      if ($(hash).length) {
        var tabName = hash.slice(1);
      } else {
        var tabName = "tab_panel-1";
      }
      //コンテンツ非表示・タブを非アクティブ
      $(".js-infoTab-trigger").removeClass("is-active");
      $(".js-infoContent-target").removeClass("is-active");
      //何番目のタブかを格納
      var tabNo = $(".js-infoContent-target#" + tabName).index();
      //コンテンツ表示
      $(".js-infoContent-target").eq(tabNo).addClass("is-active");
      //タブのアクティブ化
      $(".js-infoTab-trigger").eq(tabNo).addClass("is-active");
    });

  //アコーディオン
  $(".js-accordion-title").on("click", function () {
    $(this).toggleClass("is-open");
    $(this).next().slideToggle(300);
  });




 //フォーム
 $(function(){
  $('.Form-CheckItem-Label').on('click', function(){
    if ($('#JS_CheckItem').prop("checked") == true) {
      $('.JS_FormSubmit').addClass('isActive');
    } else {
      $('.JS_FormSubmit').removeClass('isActive');
    }
  });
});

function OnLinkClick(a_name) { 
  var elements = document.getElementsByName( "tab-radios" ) ; 
   elements[1].checked = true ; 
} 


// DOM ツリーの構築が完了したら定義した関数を呼び出す
document.addEventListener('DOMContentLoaded', () => {
  setupToggleDetailsAnimation();
});
 
// アニメーションの処理を定義した関数
function setupToggleDetailsAnimation() {
  // js-animation クラスを指定したすべての details 要素
  const details = document.querySelectorAll('details.js-animation');
 
  // 上記で取得したそれぞれの要素に対して以下を実行（elem は各 details 要素）
  details.forEach(elem => {
    // summary 要素（この要素の疑似要素で作成したアイコンをアニメーション）
    const summary = elem.querySelector('summary');
    // details-content クラスを指定した要素（この要素をアニメーション）
    const content = elem.querySelector('.details-content');
 
    // summary 要素にクリックイベントのリスナを設定
    summary.addEventListener('click', (e) => {
      // デフォルトの動作（open 属性の着脱）をキャンセル
      e.preventDefault();
      // open 属性が指定されていれば（開いていれば）
      if (elem.open) {
        //閉じるアニメーションを実行（contentはdetails-contentクラスを指定した要素）
        const closeDetails = content.animate(
          {
            opacity: [1, 0],
            height: [content.offsetHeight + 'px', 0],
          },
          {
            duration: 300,
            easing: 'ease-in',
          }
        );
        //アイコンを回転させるアニメーションを実行（summary 要素）
        const rotateIcon = summary.animate(
          { rotate: ["90deg", "0deg"] },
          {
            duration: 300,
            // summary 要素の疑似要素にアニメーションを適用
            pseudoElement: "::before",
            easing: 'ease-in',
            fill: 'forwards',
          }
        );
        // 閉じるアニメーションが終了したら open 属性を削除
        closeDetails.onfinish = () => {
          elem.removeAttribute('open');
        }
      } else {
        // open 属性を details 要素に追加
        elem.setAttribute('open', 'true');
        // 開くアニメーションを実行
        const openDetails = content.animate(
          {
            opacity: [0, 1],
            height: [0, content.offsetHeight + 'px'],
          },
          {
            duration: 300,
            easing: 'ease-in',
          }
        );
        // アイコンを回転させるアニメーションを実行（summary 要素）
        const rotateIcon = summary.animate(
          { rotate: ["0deg", "90deg"] },
          {
            duration: 300,
            // summary 要素の疑似要素にアニメーションを適用
            pseudoElement: "::before",
            easing: 'ease-in',
            fill: 'forwards',
          }
        );
      }
    });
  });
}


//タブの変更
