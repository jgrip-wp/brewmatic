/**
 * common.js
 *
 *  version --- 3.6
 *  updated --- 2011/09/06
 */


/* !stack ------------------------------------------------------------------- */
/* 全てのスマホで幅320px(iphone)相当に見えるようにdpiを調整 */
jQuery(document).ready(function($) {
	/*
	 Android の場合 DPIを調整
	=========================================*/
	$(window).on('resize.dpi', function () {

		// 指定済みの viewport を取得
		var BASE_PARAM = $('meta[name="viewport"]').attr('content');
	
		// Android スマートフォンのみに適用する（タブレットも対象にしたい場合は 'Mobile' の判定を削除）
		if (navigator.userAgent.indexOf('Android') != -1 && navigator.userAgent.indexOf('Mobile') != -1 && window.orientation === 0) {
	
			// デバイスのスクリーンの幅を取得する
			var width = $(window).width();
	
			// Android の仕様でDPI基準値となる 160 で固定
			var DEFAULT_DPI = 160;
	
			// iPhone の幅に合わせるので 320 固定
			// ※ガラケー基準の場合は、240 でも可
			var DEFAULT_WIDTH = 320;
	
			if (width !== DEFAULT_WIDTH) {
	
				// 320px で収まる DPI を計算する
				var dpi = DEFAULT_WIDTH / width * DEFAULT_DPI;
	
				// 幅が正常に取得できた時だけ （dpi の値が、仕様の 70-400 に収まる）
				// 幅が正常に取得できず DPI が異常値（70-400に入らない）になった場合に除外する
				if (dpi >= 70 && dpi <= 400) {
					// Androidは「target-densitydpi」プロパティで、1インチの中に何ドット表示するかを設定して調整する
					$('head').append('<meta name="viewport" content="target-densitydpi=' + dpi + ', ' + BASE_PARAM + '" />');
				}
			}
		}
	}).trigger('resize.dpi');
	
	pageScroll();
	common();
});

$(function() { //IE8のalpha使用時に発生の黒枠を消す
    if(navigator.userAgent.indexOf("MSIE") != -1) {
        $('img').each(function() {
            if($(this).attr('src').indexOf('.png') != -1) {
                $(this).css({
                    'filter': 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src="' +
                    $(this).attr('src') +
                    '", sizingMethod="scale");'
                });
            }
        });
    }
});	

/* !isUA -------------------------------------------------------------------- */
var isUA = (function(){
	var ua = navigator.userAgent.toLowerCase();
	indexOfKey = function(key){ return (ua.indexOf(key) != -1)? true: false;}
	var o = {};
	o.ie      = function(){ return indexOfKey("msie"); }
	o.fx      = function(){ return indexOfKey("firefox"); }
	o.chrome  = function(){ return indexOfKey("chrome"); }
	o.opera   = function(){ return indexOfKey("opera"); }
	o.android = function(){ return indexOfKey("android"); }
	o.ipad    = function(){ return indexOfKey("ipad"); }
	o.ipod    = function(){ return indexOfKey("ipod"); }
	o.iphone  = function(){ return indexOfKey("iphone"); }
	return o;
})();

/* !pageScroll -------------------------------------------------------------- */
var pageScroll = function(){
	jQuery.easing.easeInOutCubic = function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	}; 
	$('a.scroll, .scroll a').each(function(){
		$(this).bind("click keypress",function(e){
			e.preventDefault();
			var target  = $(this).attr('href');
			var targetY = $(target).offset().top;
			var parent  = ( isUA.opera() )? (document.compatMode == 'BackCompat') ? 'body': 'html' : 'html,body';
			var headH = $('.headerin').outerHeight();
			var hdmenuH = $('.headernavi').outerHeight();
			if($(window).width() > 1080){
				$(parent).animate(
					{scrollTop: targetY - headH - hdmenuH},
					400
				);
			}else{
				$(parent).animate(
					{scrollTop: targetY - headH},
					400
				);
			}
			return false;
		});
	});
	$('.pagetop a').click(function(){
		$('html,body').animate({scrollTop: 0}, 'slow','swing');
		return false;
	});
}


/* !common --------------------------------------------------- */
var common = (function(){
  
	$(function(){
		var hdmenu = $('.js-navbar');
		var menuclose = $('.js-navbar-close');
		var menu = $('#menu');
		hdmenu.click(function(){
			menu.addClass('on');
			menuclose.addClass('is-active');
		});
		menuclose.click(function(){
			menu.removeClass('on');
			menuclose.removeClass('is-active');
			hdmenu.removeClass('is-active');
		})
	})
	
	$(function() {
		
		$(window).resize(function (event) {
			switchImage($('.visiblets').css('display') == 'block');
		});
		switchImage($('.visiblets').css('display') == 'block');
		function switchImage(isVisible_header) {
			$('img').each(function (index) {
				var pc = $(this).attr('src').replace('_sp.', '_pc.');
				var ts = $(this).attr('src').replace('_pc.', '_sp.');
				if (!isVisible_header) {
					$(this).attr("src",pc);
				}else {
					
					$(this).attr("src",ts);
				}
			});
		}
	});
  
	if ($('#pageID').length == 1) {
		if($('#pageID').val() != ''){
			var ides = $('#pageID').val().split(',');
			for (var idx = 0; idx < ides.length; idx++) {
				var id = '#' + ides[idx];
				
				if ($(id).length == 1)
					$(id).addClass('current');
				
			}
		}
			
	}

    new WOW().init();

});

