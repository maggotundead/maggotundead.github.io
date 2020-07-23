$(document).ready(function() {

	$('.list-item .list-item-title').click( function() {
		$(this).parent().toggleClass('open');
	});
	

	$(".order-btn").click( function() {
		$('#popup').fadeIn();
	});
	$('.form-overlay, .form-close').click( function() {
		$(this).closest('.form-modal').fadeOut();
	});

	var mail_form = $('#mail-form');

	mail_form.submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: mail_form.attr('method'),
			url: mail_form.attr('action'),
			data: mail_form.serialize(),
			success: function (data) {
				console.log('send');
				$('#popup').fadeOut();
				$('#popup-success').fadeIn();
			},
			error: function (data) {
				console.log('error');
			},
		});
	});



});