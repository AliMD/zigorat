$(function() {
	
	var len = $('.icon').length;
	function rnd(a,b){
		return Math.floor(Math.random()*(b-a+1))+a;
	}
	
	fadeAll($('.icon'));
function fadeAll(elems) {
	var i=-1;
	function next() {
		i = i+1;
		if (i <= elems.length)
			$(elems[i]).animate({'left':'0'},rnd(120,800),(next));
	}
	next();
}
});