/*
 * Slide in Search & Menu
 * @johncionci
 */
$(function() {
	var $page = $('#page');
	var $closeSearch = $('.close-toggle-search');
	var $closeMenu = $('.close-toggle-menu');
	// since we have two menus we break into multiple functions
	var toggleSearchNav = function () {
		// just in case another panel is open we remove the classes that display them
		$page.removeClass('menu-activated');
		$page.removeClass('menu-deactivated');
		if ($page.hasClass('search-activated')) {
			// if this panel is open...
			$page.removeClass('search-activated');
			$page.addClass('search-deactivated');
			$closeSearch.removeClass('close-toggle-search-activated');
		} else {
			// if this panel is closed
			$page.addClass('search-activated');
			$page.removeClass('search-deactivated');
			$closeSearch.addClass('close-toggle-search-activated');
		}
	}

	// Toggle Search Search on Click
	$('.js-button-search-activate, .close-toggle-search').click(function() {
		toggleSearchNav();
	});

	// since we have two menus we break into multiple functions
	var toggleMenuNav = function () {
		// just in case another panel is open we remove the classes that display them
		$page.removeClass('search-activated');
		$page.removeClass('search-deactivated');
		if ($page.hasClass('menu-activated')) {
			// if this panel is closed...
			$page.removeClass('menu-activated');
			$page.addClass('menu-deactivated');
			$closeMenu.removeClass('close-toggle-menu-activated');
		} else {
			// if this panel is open...
			$page.addClass('menu-activated');
			$page.removeClass('menu-deactivated');
			$closeMenu.addClass('close-toggle-menu-activated');
		}
	}

	// Toggle menu Menu on Click
	$('.js-button-menu-activate, .close-toggle-menu').click(function() {
		toggleMenuNav();
	});

	// insert a toggle icon for subnav elements when on mobile
	// @johncionci
	$('<span class="sub-toggle-icon">+</span>').insertAfter('.main-navigation .menu > li.menu-item-has-children > a');

	// Toggle menu Menu on Click
	$('.sub-toggle-icon').click(function() {
		$(this).next('ul').slideToggle('slow');
		$(this).html($(this).text() == '+' ? '-' : '+');
	});

});