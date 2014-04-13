/*
    Title:              Incident Tracker
    Authors' Names:     Justin Hellsten http://advanceweb.justinhellsten.com/project2/
                        Michael Burnie  http://comp2068.michaelburnie.com/project2/
    File Name:          footer.js
    Description:        This script ensures the footer height fills the bottom gap. Defaults if greater than window height. 
    Last Modified Date: 2014/04/13
*/
$( document ).ready(function() {

	/* Apply Events for fixFooterHeight, such as resize and on change */
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
	// Get dimensions for caluculations
    var docHeight = $(window).height();
    var footerHeight = $('#footer').height();
    var footerBottom = Math.floor($('#footer').position().top + footerHeight);
	
	// Fill bottom area with footer
	if (footerBottom <= docHeight) {
		$( "#footer" ).css("height", $(window).height() - $("#footer").offset().top);
	} else {
		console.log("Footer Bottom is greater than doc height");
		$( "#footer" ).css("height", "auto");
	}
}

