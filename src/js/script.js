
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
function GethashID (hashIDName){
	if(hashIDName){
		//タブ設定
		$('.tab li').find('a').each(function() { //タブ内のaタグ全てを取得
			var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得	
			if(idName == hashIDName){ //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
				var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
				$('.tab li').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
				$(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
				//表示させるエリア設定
				$(".area").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
				$(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加	
			}
		});
	}
}

//タブをクリックしたら
$('.tab__box a').on('click', function() {
	var idName = $(this).attr('href'); //タブ内のリンク名を取得	
	GethashID (idName);//設定したタブの読み込みと
	return false;//aタグを無効にする
});


// 上記の動きをページが読み込まれたらすぐに動かす
$(window).on('load', function () {
    $('.tab__box li:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
    $('.area:first-of-type').addClass("is-active"); //最初の.areaにis-activeクラスを追加
	var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
	GethashID (hashName);//設定したタブの読み込み
});



$(function(){
	$("a").on('click',function(){
		$(this).toggleClass("active");
	});
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
$(function () {
	$(".page-faq__list .page-faq__box").css("display", "block"); //.page-faq__list:first-of-typeを.page-faq__listに代入一番目開いておく//
	$(".page-faq__list .page-faq__title").addClass("open");//.page-faq__list:first-of-typeを.page-faq__listに代入
	$(".page-faq__title").on("click", function () {
		$(".page-faq__title").not(this).removeClass("open");
		$(".page-faq__title").not(this).next().slideUp(200);
		$(this).toggleClass("open");
		$(this).next().slideToggle(200);
	});
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







