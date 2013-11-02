jQuery(document).ready(function () {
	jQuery('.feedback-call').click(function() {
		jQuery('.feedback-val').val('');
	});
	jQuery('.feed-mood').click( function() {
		var mood = jQuery(this).attr('rel');
		jQuery('#feed-mood').val(mood);
	});
	jQuery("#feedbackForm").validate({
		submitHandler: function (form) {
			$('#feedbackModal').html('<div class="modal-header">\
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> \
							<h3>Processing!</h3> \
						</div> \
						<div class="modal-body"> \
							<p>We Are processing your feedback.</p>\
						</div> \
						<div class="modal-footer"> \
							<p>Team Bhagat Singh</p> \
						</div>');
			$.ajax({
				type: "POST",
				url: "/feedbacks/submit",
				data: $(form).serialize(),
				success: function () {
					$('#feedbackModal').html('<div class="modal-header">\
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> \
							<h3>Thanks!</h3> \
						</div> \
						<div class="modal-body"> \
							<p>Thanks for your feedback. It is really valuable to us and we\'ll try to do our best to incorporate it.</p>\
						</div> \
						<div class="modal-footer"> \
							<a href="#" class="btn btn-primary" data-dismiss="modal">Ok</a> \
						</div>');
				}
			});
			return false;
		}
	});
});
