configs = {
	ease:{
		normal:''
	},
	icons:{
		due:350,
		delay:200
	}
}

pagejs = function(page){
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


};

pagejs = function(page){
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