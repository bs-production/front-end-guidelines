(function($) {

	$.fn.thingLink = function( options ) {

		// Establish our default settings
		var settings = $.extend({
			main         : '#main-message > .row',

			content0 			: '</div><h4>Customer testimonial</h4><iframe width=\"290\" height=\"163\" src=\"https://www.youtube.com/embed/XT40_-7h9As?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>',

			content1 			: '<h4>Why water and mold resistance is important to every basement</h4><iframe width=\"290\" height=\"163\" src=\"https://www.youtube.com/embed/gg0xfFXqwU4?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>',

			content2 			: '<h4>MillCreek Basement Flooring</h4><p>MillCreek Flooring™ uses a patented process that gives the same look, feel and touch as a hardwood floor, all while being suited for basement environments.</p>',

			content3 			: '<h4>Reimagine Your Basement</h4><p>With the award-winning Total Basement Finishing system you can plan the basement of your dreams.  TBF can help make your basement a new room that is as comfortable as your upstairs.</p>',
			
			content4 			: '<h4>Easy access to walls</h4><p>Being a panel system, TBF grants quick and easy access to walls.  No cutting, patching and repainting of drywall is necessary.</p>',

			content5 			: '<h4>No-sag ceiling tiles</h4><p>Choose from bright-white Prestige or Linen ceiling tiles that come with a 30-year warranty against mold and mildew.  Both ceiling tile styles resist the absorption of water vapor, so they are not subject to sagging. </p>',

			icon0        : '<div class=\"main-point\"><i class=\"fa fa-info-circle pulsor\"></i></div>',
			icon1        : '<div class=\"main-point\"><i class=\"fa fa-youtube-play pulsor\"></i></div>',
			icon2        : '<div class=\"main-point\"><i class=\"fa fa-info-circle pulsor\"></i></div>',
			icon3        : '<div class=\"main-point\"><i class=\"fa fa-heart pulsor\"></i></div>',
			icon4        : '<div class=\"main-point\"><i class=\"fa fa-info-circle pulsor\"></i></div>',
			icon5        : '<div class=\"main-point\"><i class=\"fa fa-info-circle pulsor\"></i></div>',
			fontStyle    : null
		  }, options);

		return this.each( function() {


      newElement1 = $('<div/>').attr("class", "point").html(settings.content0);

			newElement2 = $('<div/>').attr("class", "point").html(settings.content1);

			newElement3 = $('<div/>').attr("class", "point").html(settings.content2);

			newElement4 = $('<div/>').attr("class", "point").html(settings.content3);

			newElement5 = $('<div/>').attr("class", "point").html(settings.content4);

			newElement6 = $('<div/>').attr("class", "point").html(settings.content5);

			var newDivs = [newElement1, newElement2, newElement3, newElement4, newElement5, newElement6];

			// make icons
			$icon0 = settings.icon0;
			$icon1 = settings.icon1;
			$icon2 = settings.icon2;
			$icon3 = settings.icon3;
			$icon4 = settings.icon4;
			$icon5 = settings.icon5;

			var newIcons = [$icon0, $icon1, $icon2, $icon3, $icon4, $icon5];

			//Lets make some dots
			  for (var i = 0; i < 6; i++) {
			    $(settings.main).append(newIcons[i]);
			};

			//Let us add some content and position to dots
			  $('.main-point').each(function(i) {
			    $(this).addClass('new-' + i);
			    $(this).append(newDivs[i]);
			  });



			  //Show and hide content on hover
			 $('.main-point').hover(
			  function() {
			    $(this).children(".point").css('display', 'block');
			  },
			  function() {
			     $(this).children(".point").css('display', 'none');
			  });

			// on scroll fade out thing links

			$(window).scroll(function() {
			    $(".fa").css({
			    'opacity' : 1-(($(this).scrollTop())/375)
			    });
			});

			// End thing link script

		});

	};

}(jQuery));
