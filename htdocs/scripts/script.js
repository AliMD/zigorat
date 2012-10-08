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

pagejs = function(page){

	pageAni[page] && $.tween(pageAni[page]['load'])

	$(page).addClass('active');
	
window.onload=function(){
	$('section.loadingContainer').css('display','none');
}

pload = function (bodyClass){
	$('body').removeClass(bodyClass);
	$('nav.nav ul li a').click(function(){
		$('body').addClass('unload');
		var newurl = $(this).attr('href');
		setTimeout(function(){
			window.location.href = newurl;
		},700);
		return false; // prevent to load page.
	});
	
}

	if(page=='home'){
	pload('home');
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
	}

	else if(page == 'projects') {
		pload('projects');
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

	else if(page == 'projects-shopping') {
		imageMapLink('#prdShopping', './projects-shopping');
		imageMapLink('#prdExhibition', './projects-exhibition')
		imageMapLink('#prdHome', './projects-home')
		imageMapLink('#prdOffice', './projects-office')
		imageMapLink('#Gallery0', './Gallery0');
		imageMapLink('#Gallery01', './Gallery01')
		imageMapLink('#Gallery02', './Gallery02')
	}

	else if(page == 'projects-office') {
		imageMapLink('#prdShopping', './projects-shopping');
		imageMapLink('#prdExhibition', './projects-exhibition')
		imageMapLink('#prdHome', './projects-home')
		imageMapLink('#prdOffice', './projects-office')
		imageMapLink('#Gallery0', './Gallery0');
		imageMapLink('#Gallery01', './Gallery01')
		imageMapLink('#Gallery02', './Gallery02')
	}

	else if(page == 'projects-home') {
		imageMapLink('#prdShopping', './projects-shopping');
		imageMapLink('#prdExhibition', './projects-exhibition')
		imageMapLink('#prdHome', './projects-home')
		imageMapLink('#prdOffice', './projects-office')
		imageMapLink('#Gallery0', './Gallery0');
		imageMapLink('#Gallery01', './Gallery01')
		imageMapLink('#Gallery02', './Gallery02')
	}

	else if(page == 'projects-exhibition') {
		imageMapLink('#prdShopping', './projects-shopping');
		imageMapLink('#prdExhibition', './projects-exhibition')
		imageMapLink('#prdHome', './projects-home')
		imageMapLink('#prdOffice', './projects-office')
		imageMapLink('#Gallery0', './Gallery0');
		imageMapLink('#Gallery01', './Gallery01')
		imageMapLink('#Gallery02', './Gallery02')
	}

	else if(page=='links'){
		pload('links');
	}
	else if(page=='about-us'){
		pload('about-us');
	}
	else if(page=='our-customers'){
		pload('our-customers');
	}

	else if(page=='contact-us'){
		pload('contact-us');
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