$(document).ready(function() {

	"use strict";

/*----------------------------------------------
	Dashboard Nav
-----------------------------------------------*/

	$('#dashboard-nav .dropdown').on('click', function (event) {
	  var clickover = $(event.target);
	  $(this).siblings('.dropdown').children('.dropdown-menu').slideUp();
	  $(this).children('.dropdown-menu').slideToggle();
	});

	$("#dashboard-nav .dropdown > a ").on('click', function(e) {
		e.preventDefault();
	});

}) 