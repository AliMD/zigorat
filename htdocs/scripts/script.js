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
	test : {
		load : {
			ani1 : {
				delay : 1000,
				target : '.box1',
				keyframe : 'key3',
				due : 1000,
				ease : 'ease-out'
			},
			ani2 : {
				delay : 2000,
				target : '.box2',
				keyframe : 'key3',
				due : 1000
			},
			ani3 : {
				delay : 3000,
				target : '.box3',
				keyframe : 'key3',
				due : 2000,
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

	else if(page == 'projects-shopping') {
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