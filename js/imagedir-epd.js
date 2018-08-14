$(document).ready ( function() {

	$("div").each(function(i) {

		$(this).append("<img src='images/album/epd/"+(++i)+".jpg'/>");

	});

});