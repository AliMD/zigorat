$(document).ready(function() {
	(fixZoom=function(pageWidth,pageHight,px,py,tfo){
		var iv = 0,
		winZoom = function(){
			var paddingX = px || 0,
				paddingY = py || 0,
				winHight  = winHight || window.innerHeight,
				winWidth  = winWidth || window.innerWidth,
				container = document.querySelector('.container-zoom'),
				scalex = Math.floor((winHight-paddingY)/pageHight*1000)/1000,
				scaley = Math.floor((winWidth-paddingX)/pageWidth*1000)/1000,
				scale = Math.min(scalex,scaley),
				top = Math.round((winHight-pageHight*scale)/2),
				left = Math.round((winWidth-pageWidth*scale)/2);
			left = left>0 ? left : 0;
			container.style.position  = 'absolute';
			container.style.left = left + 'px';
			container.style.top = top + 'px'; 
			container.style.webkitTransformOrigin=tfo || "0 0";
			container.style.webkitTransform = 'scale('+scale+')';
	 
		};
		window.onresize = function(){
			if(iv) clearTimeout(iv);
			iv = setTimeout(winZoom,300);
		};
		winZoom();
	})(900,720,30,30);
 });

