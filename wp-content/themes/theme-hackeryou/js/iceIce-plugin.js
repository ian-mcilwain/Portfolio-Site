$.fn.iceIce = function() {
	$(function() {
		var kkeys = [], iceIce = "73,67,69,73,67,69,66,65,66,89";

		$(document).keydown(function(e) {

			kkeys.push( e.keyCode );

			if ( kkeys.toString().indexOf( iceIce ) >= 0 ) {

				$(document).unbind('keydown',arguments.callee);

    // do something awesome
    
    $('body').append('<iframe id="iceVideo" width="0" height="0" src="https://www.youtube.com/embed/70OrP0bgvwI?autoplay=1" frameborder="0" allowfullscreen></iframe>');


    $("body").addClass("iceIce");

    $('img').attr("src", "http://www.nicenicejpg.com/500");

    $('h1').text('YOU GOT ICED');

    $('h2').text('Robert Matthew Van Winkle (born October 31, 1967)');


    $('head').append("<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>");

    $('.iceIce').css({'background-image': 'url("http://www.arte.tv/cdnp-creative/cdn/farfuture/NkzHYsGwmoFPPA0MkXMT7CpcvF6u_IzPsUt0OjzcZ2k/mtime:1405610896/sites/default/files/wallpapers/summer90s-cleoburo_patterns_seite_1_yes.jpg")',
	"background-size": "cover",
	"<background-attachments>	</background-attachments>": "fixed",
	"font-family": "lobster"});

    // $('.iceIce').css('background-size', 'cover')
    
    $('.iceIce h1').css('font-family', "lobster");

}

});
	});

}
