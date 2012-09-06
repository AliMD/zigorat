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
		window.onload = function(){
			
			var myform = document.forms.item(0);
			
			myform.onsubmit = function(){
				
				var ret = true;
				
				for(var i=0;i<myform.elements.length;i++){
					if(myform.elements.item(i).className!='ok'){
						ret = false;
						break;
					}
				}
				return ret;
			}
			
			for (var i=0;i<myform.elements.length;i++){
				
				var inp = myform.elements.item(i);
				
				if (inp.type!='text' && inp.type!='textarea'){
					continue;
				}
				
				inp.onfocus = function(){
					if (this.value == this.defaultValue){
						this.value = '';
					}
				}
		
				inp.onblur = function(){
					if (this.value!=''){
						this.className='ok';
					}else{
						this.className='nok'
					}
					if (this.value == ''){
						this.value = this.defaultValue;
					}
					
				}
			}
		}
	}
};