$(function() {
	var config={
		due:350,
		delay:100,
		addDelay:200
	};

	$('.icon').each(function(){
		var that = this;
		config.delay+=config.addDelay;
		console.log(config.delay);
		setTimeout(function(){
			$(that).animate({'left':'0px'},config.due);
		},config.delay);
	});
});