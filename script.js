

$(document).ready(function(){
	$('.parallax').parallax();
	$('.sidenav').sidenav();
	$('.materialboxed').materialbox();
	$('.carousel').carousel();

	$(".keitimas-images").on("click", function() {
		// $(".paveikslelis").attr("src", "https://picsum.photos/200/201");
		console.log($(this).attr("src"));
		var paveikslelioUlr = $(this).attr("src");
		$(".perkelti-image").attr("src",paveikslelioUlr);
	});

	$(".uzvedimas-image").on("mouseenter", function() {
		// $(".paveikslelis").attr("src", "https://picsum.photos/200/201");
		console.log($(this).attr("src"));
		var paveikslelioUlr = $(this).attr("src");
		$(".mouse-image").attr("src",paveikslelioUlr);
	});

	$(".keitimas-dbl-images").on("dblclick", function() {
		// $(".paveikslelis").attr("src", "https://picsum.photos/200/201");
		console.log($(this).attr("src"));
		var paveikslelioUlr = $(this).attr("src");
		$(".perkelti-dbl-image").attr("src",paveikslelioUlr);
	});

});


