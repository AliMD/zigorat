$(document).ready(function() {
	;(fixZoom=function(pageWidth,pageHeight,px,py,tfo,undefined){
		var prefix='',
		iv = 0,
		vendors = {Webkit: 'webkit', Moz: '', O: 'o', ms: 'MS' },
		testEl = document.createElement('div'),
		each = function(elements, callback){
			for (var key in elements)
				if (callback.call(elements[key], key, elements[key]) === false) return elements
			return elements
		},
		winZoom = function(){
			var paddingX = px || 0,
				paddingY = py || 0,
				winHeight  = winHeight || window.innerHeight,
				winWidth  = winWidth || window.innerWidth,
				container = document.querySelector('.container-zoom'),
				scalex = Math.floor((winHeight-paddingY)/pageHeight*1000)/1000,
				scaley = Math.floor((winWidth-paddingX)/pageWidth*1000)/1000,
				scale = Math.min(scalex,scaley),
				top = Math.round((winHeight-pageHeight*scale)/2),
				left = Math.round((winWidth-pageWidth*scale)/2);
			left = left>0 ? left : 0;
			container.style.position  = 'absolute';
			container.style.left = left + 'px';
			container.style.top = top + 'px'; 
			container.style[prefix+'TransformOrigin']=tfo || "0 0";
			container.style[prefix+'Transform'] = 'scale('+scale+')';
			console.log(prefix);
		},
		resize=function(){
			if(iv) clearTimeout(iv);
			iv = setTimeout(winZoom,300);
		};window.onresize = resize;
	 
		each(vendors, function(vendor, evt){
			if (testEl.style[vendor + 'TransitionProperty'] !== undefined) {
				prefix = vendor
				return false
			}
		});
	 
		winZoom();
	})(900,720,10,10);
 });

