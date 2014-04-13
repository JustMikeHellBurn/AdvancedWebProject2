$( document ).ready(function() {

	$("body").slideDown().trigger("heightchange");
	$("body").on("heightchange",function(e){
    	var $el = $(e.target); 
		fixFooterHeight();
	});

	$('#footer').change(function() {
        fixFooterHeight();
    });

	$( window ).resize(function() {
		fixFooterHeight();
	});
	fixFooterHeight();

});

function fixFooterHeight() {
    var docHeight = $(window).height();
    var footerHeight = $('#footer').height();
    var footerBottom = Math.floor($('#footer').position().top + footerHeight);
	
	console.log("Footer Bottom: " + footerBottom);
	console.log("Doc Height: " + docHeight);

	if (footerBottom <= docHeight) {
		$( "#footer" ).css("height", $(window).height() - $("#footer").offset().top);
	} else {
		console.log("Footer Bottom is greater than doc height");
		$( "#footer" ).css("height", "auto");
	}
}

