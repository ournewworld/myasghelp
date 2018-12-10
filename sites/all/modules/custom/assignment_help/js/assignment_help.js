var $ = jQuery;

$(document).ready(function () {
	$('#noofpages').bootstrapNumber({
		upClass: 'success',
		downClass: 'danger'
	})
});

$(window).scroll(function(){
	if ($(window).scrollTop() >= 130) {
	   $('.header-nav').addClass('fixed-header');
	}
	else {
	   $('.header-nav').removeClass('fixed-header');
	}
});
$(window).scroll(function(){
	if ($(window).scrollTop() >= 200) {
	   $('.header-student-post-form-wrapper').fadeOut('2000');
	}
	else {
	   $('.header-student-post-form-wrapper').fadeIn('2000');
	}
});