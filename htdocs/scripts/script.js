configs = {
	ease:{
		normal:''
	},
	icons:{
		due:350,
		delay:200
	}
}

pageAni = {
	home : {
		load : {
			ani1 : {
				delay : 100,
				target : '.bigpic',
				keyframe : 'key1',
				due : 800,
				ease : 'ease-in'
			},
			ani2 : {
				delay : 800,
				target : '.small_pic',
				keyframe : 'key1',
				due : 800
			},
			ani3 : {
				delay : 1200,
				target : 'div.passage div.content',
				keyframe : 'key2',
				due : 1500,
				ease : 'ease-in-out'
			}
		}
	}
}

$.tween = function(tweenJson){
	$.each(tweenJson,function(i,tweeen){
		var prfx = '-webkit-', cssAni = {};
		if(tweeen.due && tweeen.keyframe){
			cssAni[prfx+"animation-name"] = tweeen.keyframe;
			cssAni[prfx+"animation-duration"] = tweeen.due+'ms';
			cssAni[prfx+"animation-timing-function"] = tweeen.ease || 'linear';
			cssAni[prfx+"animation-play-state"] = "paused";
			$(tweeen.target).css(cssAni);
		}
		tweeen.id = setTimeout(function() {
			var target = $(tweeen.target);
			tweeen.class && target.addClass(tweeen.class);
			cssAni = {}; cssAni[prfx+"animation-play-state"] = "running"; target.css(cssAni);
		},tweeen.delay);
	});
}

imageMapLink = function(target, href){
	$(target+'Map').mouseover(function(){
		$(target).addClass('hover');
	}).mouseout(function(){
		$(target).removeClass('hover');
	}).click(function(){
		window.location.href=href;
	})
}

window.onload = function(){
	setTimeout(function(){
		$('body').removeClass('preload');
		pageAni[page] && $.tween(pageAni[page]['load']);
		setTimeout(function(){
			$('section.loadingContainer').css({display:'none'});
		},1000);
	},1000);
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
pagejs = function(pg){
	page = pg;

	$(page).addClass('active');

	if(page=='home'){
		// pages logo icons
		var delay=1;
		$('.icon').each(function(){
			var that = this;
			delay += configs.icons.delay;
			setTimeout(function(){
				$(that).animate({'left':'0px'},configs.icons.due);
			},delay);
		});

		imageMapLink('#lastProject', './last-project')
		tmp = [];
		$('#transparentImgLast').click(function (event) {
			tmp=tmp.concat([event.offsetX,event.offsetY])
			console.log(tmp);
		})

		/*$('.fullimg > div').fadeLoop({
				delay : 300,
				freez : 4000,
				duration : 2000,
				fadeFirstImage : false
		});
*/
	}

	else if(page == 'projects') {
		imageMapLink('#prdShopping', './projects-shopping');
		imageMapLink('#prdExhibition', './projects-exhibition')
		imageMapLink('#prdHome', './projects-home')
		imageMapLink('#prdOffice', './projects-office')
		tmp = [];
		$('#transparentImg').click(function (event) {
			tmp=tmp.concat([event.offsetX,event.offsetY])
			console.log(tmp);
		})
	}

	else if(page.indexOf('projects-')===0) {
		imageMapLink('#prdShopping', './projects-shopping');
		imageMapLink('#prdExhibition', './projects-exhibition')
		imageMapLink('#prdHome', './projects-home')
		imageMapLink('#prdOffice', './projects-office')
		imageMapLink('#Gallery0', './Gallery0');
		imageMapLink('#Gallery01', './Gallery01')
		imageMapLink('#Gallery02', './Gallery02')
	}

	else if(page=='fullscreen'){

		/*$('.fullimg > div').fadeLoop({
				delay : 300,
				freez : 4000,
				duration : 2000,
				fadeFirstImage : false
		});
*/
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

		$(function(){
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
		
			$('#reset').click(function(){
				$('#ifrm').animate({
					height:'0px'
				},200);
			});
		});
	}
	
	if(page!=='home'){
		$('div.lines').css('opacity','0.2'); // move to css
	}
};