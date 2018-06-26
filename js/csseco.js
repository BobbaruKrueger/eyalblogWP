/**
  * @package eyalb
  * js/csseco.js
  */
jQuery(document).ready(function($){
	
	// ==================
	// Carousel next and prev thumb preview
	// ==================
	var carouselClass = '.csseco_carousel';
	$(document).on('click', carouselClass, function(){
		var id = $("#"+$(this).attr("id"));
		$(id).on('slid.bs.carousel', function(){
			csseco_get_bs_thumbs(id);
		});
	});
	$(document).on('mouseenter', carouselClass, function(){
		var id = $("#"+$(this).attr("id"));
		csseco_get_bs_thumbs(id);
	});
	function csseco_get_bs_thumbs( id ) {
		var prevThumb = $(id).find('.carousel-item.active').find('.prev-thumb-preview').data('image');
		$(id).find('.carousel-control.left').find('.preview-thumb').css('background-image', 'url('+prevThumb+')');
		var nextThumb = $(id).find('.carousel-item.active').find('.next-thumb-preview').data('image');
		$(id).find('.carousel-control.right').find('.preview-thumb').css('background-image', 'url('+nextThumb+')');
	}

	// ==================
	// Add bootstrap classes on different elements in the DOM
	// ==================
	$('img').addClass('img-fluid'); // add img-responsive(bootstrap) to all images
	$('select').addClass('form-control'); // add form-control(bootstrap) class on all select elements on the site
	$('table').addClass('table'); // add table(bootstrap) class on all table elements on the site
	
	// ==================
	// Menus dropdown on mobile
	// ==================	
	$('.csseco_navbar').find('li.menu-item-has-children').append('<span class="csseco_ddev"><i class="fas fa-chevron-right"></i></span>');
	$('.csseco_ddev').on('click', function() { // dropdown event
		var $this = $(this);
		$this.parent('.menu-item-has-children').toggleClass('opened').children('.sub-menu').slideToggle();
		$this.parent('.menu-item-has-children').siblings().removeClass('opened').find('.sub-menu').slideUp();
		$this.parent('.menu-item-has-children').siblings().find('.menu-item-has-children').removeClass('opened').find('.sub-menu').slideUp();
		$this.parent('.menu-item-has-children').find('.menu-item-has-children').removeClass('opened').find('.sub-menu').slideUp();
	});
	
	// ==================
	// Search show
	// ==================
	$('.csseco_search_show_btn').on('click', function(){
		$('#header').find('.search-form').toggleClass('show');
	});
	
	// ==================
	// Footer el height
	// ==================
	var cntntF = $('#footer li.pthmb').find('.cntnt');
	//var cntntPH = $('.fpst-featured-img').height();
	var cntntPH = cntntF.parent('li').height();
	cntntF.css('height', cntntPH);
	
});