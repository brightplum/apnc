(function($) {
	var Slideshows = {
		over_thumb: function(thumb_li) {
			var slide_li = thumb_li.data('slide_li');
			thumb_li.find('> img').attr('src', slide_li.attr('data-color-thumb'));
		},
		
		out_thumb: function(thumb_li) {
			var slide_li = thumb_li.data('slide_li');
			if (!slide_li.attr('data-selected')) {
				thumb_li.find('> img').attr('src', slide_li.attr('data-gray-thumb'));
			}
		},
		
		select: function(thumb_li) {
			var slideshow = thumb_li.closest('.slideshow');
			var slide_li = thumb_li.data('slide_li');
			if (!slide_li.attr('data-selected') && !slideshow.data('animating')) {
				// Fade out the previously selected one
				slideshow.data('animating', true);
				var previous_slide_li = $('.slideshow ul.slides > li[data-selected]');
				previous_slide_li.data('thumb_li').find('> img').attr('src', previous_slide_li.attr('data-gray-thumb'));
				previous_slide_li.removeAttr('data-selected').css('z-index', 1).animate({'opacity': 0}, {
					duration: 300,
					complete: function() {
						$(this).css({'display': 'none', 'z-index': 0, 'opacity': 1});
						slideshow.data('animating', false);
					}
				});
				slide_li.css('display', 'block').attr('data-selected', '1');
				thumb_li.find('> img').attr('src', slide_li.attr('data-color-thumb'));
			}
		}
	}


	$(document).ready(function() {
		$('.slideshow ul.slides > li').each(function() {
			var slide_li = $(this);
			if (slide_li.closest('.slideshow').hasClass('grayscale_thumbs')) {
				var img_src = slide_li.attr('data-gray-thumb');
			} else {
				var img_src = slide_li.attr('data-thumb');
			}
			var thumb_img = $('<img src="' + img_src + '"/>');
			var thumb_li = $('<li></li>');
			slide_li.closest('.slideshow').find('ul.thumbs').append(thumb_li);
			thumb_li.append(thumb_img);
			thumb_li.data('slide_li', slide_li);
			slide_li.data('thumb_li', thumb_li);
		});
		
		$('.slideshow ul.slides > li').not(':first-child').css('display', 'none');
		var first_slide_li = $('.slideshow ul.slides > li:first-child');
		first_slide_li.attr('data-selected', '1').data('thumb_li').find('> img').attr('src', first_slide_li.attr('data-color-thumb'));
		
		$('.slideshow ul.thumbs > li').click(function() {
			var thumb_li = $(this);
			Slideshows.select(thumb_li);
		});
		$('.slideshow.grayscale_thumbs ul.thumbs > li').mouseover(function() {
			Slideshows.over_thumb($(this));
		}).mouseout(function() {
			Slideshows.out_thumb($(this));
		});
	});
})(jQuery);
