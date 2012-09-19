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
				delay : 1000,
				target : 'body',
				class : 'ani1',
				keyframe : 'key1',
				due : 1000,
				ease : 'ease-out'
			},
			ani2 : {
				delay : 2000,
				target : 'body',
				keyframe : 'key2',
				due : 1500
			},
			ani3 : {
				delay : 3000,
				target : 'body',
				class : 'ani3',
				keyframe : 'key3',
				due : 2300,
				ease : 'ease-in-out'
			}
		}
	}
}

$.tween = function(tweenJson){
	$.each(tweenJson,function(i,tweeen){
		tweeen.id = setTimeout(function(){
			var target = $(tweeen.target);
			tweeen.class && target.addClass(tweeen.class);
			(tweeen.due && tweeen.keyframe) && target.animate(tweeen.keyframe,tweeen.due,tweeen.ease)
		},tweeen.delay);
	});
}

pagejs = function(page){

	pageAni[page] && $.tween(pageAni[page]['load'])

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

	if(page=='contact-us'){
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
		$('div.lines').css('opacity','0.2');
	}
};