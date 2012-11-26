(function($,undefined){

configs = {
	ease:{
		normal:''
	},
	icons:{
		due:350,
		delay:200
	}
}

var	ease = !!window.Zepto ? 'ease-out' : 'swing';
$.extend($.fn,{
	fadeLoop :function(options){

		options=$.extend({
			duration : 2500,
			freez : 1500,
			delay : 10,
			startIndex : 0,
			fadeFirstImage : true,
			zIndex : -3,
			zIndexAct : -2
		},options);

		options.startIndex--;

		var nextPic,
			pics    =this,
			indx    =options.startIndex,
			plen    =this.length,
			fadeIn  ={opacity:1},
			fadeOut ={opacity:0};

		var nextPic = function(){
			pics.eq(indx).animate(fadeOut,options.duration,ease,function(){
				 $(this).css({'z-index':options.zIndex});

			});
			indx=indx<plen-1?indx+1:0;
			setTimeout(function(){
				pics.eq(indx).css({'z-index':options.zIndexAct}).animate(fadeIn,options.duration,ease,function(){
					setTimeout(nextPic,options.freez);
				});
			},options.delay+10);
		};

		pics.css(fadeOut).css({'z-index':options.zIndex});

		if(!options.fadeFirstImage){
			pics.eq(0).css(fadeIn).css({'z-index':options.zIndexAct});
			indx++;
			setTimeout(nextPic,options.freez);
		}else{
			nextPic();
		}
	}
});

imageMapLink = function(target, href){
	$(target+'Map').mouseover(function(){
		$(target).addClass('hover');
	}).mouseout(function(){
		$(target).removeClass('hover');
	}).click(function(){
		window.location.href=href;
	});
}

pageLoadedAnimations = [];

window.onload = function(){

	setTimeout(function(){
		$('body').removeClass('preload');

		setTimeout(function(){
			$('section.loadingContainer').css({display:'none'});
		},1000);

		setTimeout(function(){
			for(fn in pageLoadedAnimations) fn();
		},2000);

	},500);

	$('nav.nav a').click(function(){
		$('section.loadingContainer').css({display:'block',visibility:'hidden'});
		setTimeout(function(){
			$('body').addClass('preload');
		},10);
		var url = $(this).attr('href');
		setTimeout(function(){
			$('section.loadingContainer').css({visibility:'visible'});
		},1000);
		setTimeout(function(){
			window.location.href = url;
		},1600);
		return false; // prevent to load page.
	});

}

var page;
pagejs	= function(pg){
	page	= pg;

	$(page).addClass('active');

	if(page	=='home'){
		// pages logo icons
		pageLoadedAnimations.push(function(){
			var delay	=1;
			$('.icon').each(function(){
				var that = this;
				delay += configs.icons.delay;
				setTimeout(function(){
					$(that).animate({'left':'0px'},configs.icons.due);
				},delay);
			});
		})

		imageMapLink('#lastProject', './last-project');

		$('.home-slider > div').fadeLoop({
				delay : 300,
				freez : 4000,
				duration : 2000,
				fadeFirstImage : false
		});

	}

	else if(page == 'projects') {
		imageMapLink('#prdShopping', './projects_cat2_shopping');
		imageMapLink('#prdExhibition', './projects_cat0_exhibition');
		imageMapLink('#prdHome', './projects_cat3_home');
		imageMapLink('#prdOffice', './projects_cat1_office');

		/*
		tmp = [];
		$('#transparentImg').click(function (event) {
			tmp=tmp.concat([event.offsetX,event.offsetY])
			console.log(tmp);
		})
		*/
	}

	else if(page == 'projects_list') {
		
		imageMapLink('#prdShopping', './projects_cat2_shopping');
		imageMapLink('#prdExhibition', './projects_cat0_exhibition');
		imageMapLink('#prdHome', './projects_cat3_home');
		imageMapLink('#prdOffice', './projects_cat1_office');
		
		(function($){
			for(var i=0;i<100;i++){
				var prdpics = $('.prdpic'+i);
				if(!prdpics.length) break;
				prdpics.colorbox({
					rel:'prdpic'+i,
					slideshow:true,
					speed:500,
					slideshowSpeed:5000,
					slideshowStart:'Start ',
					slideshowStop:'Stop ',
					opacity:0.7,
					scrolling:false,
					returnFocus:false,
					maxHeight:window.innerHeight-50,
					maxWidth:window.innerWidth-50
				});
			}
		})(window.jQuery);
	}

	else if(page=='fullscreen'){

		$('.fullimg > div').fadeLoop({
				delay : 300,
				freez : 4000,
				duration : 2000,
				fadeFirstImage : false
		});

		$('div.close').click(function(){
			$('.top-desc').toggleClass('active');
			return false;
		});
	}

	else if(page=='about-us'){
		var aboutSlider={
			first : -70,
			len:4,
			step : 500
		};aboutSlider.top = aboutSlider.first;

		$('.aboutPageContainer').css({'top':aboutSlider.top});

		$('.bot-arrow').click(function(){
			if (aboutSlider.top > -1*(aboutSlider.len-1)*aboutSlider.step){
				aboutSlider.top -= aboutSlider.step;
			}else{
				aboutSlider.top = aboutSlider.first;
			}
			$('.aboutPageContainer').animate({'top':aboutSlider.top},700,'ease-out');
		});

		$('.top-arrow').click(function(){
			if (aboutSlider.top < aboutSlider.first){
				aboutSlider.top += aboutSlider.step;
			}else{
				aboutSlider.top = -1*(aboutSlider.len-1)*aboutSlider.step + aboutSlider.first ;
			}
			$('.aboutPageContainer').animate({'top':aboutSlider.top},700,'ease-out');
		});
	}

	else if(page=='contact-us'){
		function validateText(str,len){
			return str.length >= len;
		}

		function validateEmail(str){
			var emailPattern = /^[a-z0-9+_%.-]+@(?:[a-z0-9-]+\.)+[a-z]{2,6}$/i ;

			return emailPattern.test(str);
		}

		$('.form-holder').submit(function(){
			var target, err = false;

			target = $('#name');
			if( validateText(target.val(),3) ){
				target.removeClass('err').addClass('ok');
				$('div.name').removeClass('nok').addClass('ok');
			}else{
				target.removeClass('ok').addClass('err');
				$('div.name').removeClass('ok').addClass('nok');
				err = true;
			}

			target = $('#subject');
			if( validateText(target.val(),5) ){
				target.removeClass('err').addClass('ok');
				$('div.subject').removeClass('nok').addClass('ok');
			}else{
				target.removeClass('ok').addClass('err');
				$('div.subject').removeClass('ok').addClass('nok');
				err = true;
			}

			target = $('#email');
			if( validateEmail(target.val()) ){
				target.removeClass('err').addClass('ok');
				$('div.email').removeClass('nok').addClass('ok');
			}else{
				target.removeClass('ok').addClass('err');
				$('div.email').removeClass('ok').addClass('nok');
				err = true;
			}

			target = $('#txt');
			if( validateText(target.val(),10) ){
				target.removeClass('err').addClass('ok');
				$('div.txt').removeClass('nok').addClass('ok');
			}else{
				target.removeClass('ok').addClass('err');
				$('div.txt').removeClass('ok').addClass('nok');
				err = true;
			}

			if(!err){
				$('#ifrm').animate({
					height:'75px'
				},500);
			}

			return !err;

		});
	}

	if(page!=='home'){
		$('div.lines').css('opacity','0.2'); // move to css
	}
};

})(window.Zepto || window.jQuery);
