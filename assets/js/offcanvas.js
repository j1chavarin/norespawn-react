$(function () {
	'use strict'

	$('[data-toggle="offcanvas"]').on('click', function () {
		
		$(this).toggleClass('is-active');
		$('.offcanvas-collapse').toggleClass('open');

	})
	
	$('.nav-link').on('click', function () {
		$('[data-toggle="offcanvas"]').toggleClass('is-active');
		$('.offcanvas-collapse').toggleClass('open');
	})
})