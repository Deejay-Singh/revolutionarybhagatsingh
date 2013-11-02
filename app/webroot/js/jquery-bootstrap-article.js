jQuery(document).ready(function () {
	jQuery('.article-call').click(function() {
		jQuery('.article-val').val('');
	});
	
	jQuery("#submitArticleForm").validate({
		submitHandler: function (form) {
			$('#submitArticle').html('<div class="modal-header">\
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> \
							<h3>Processing!</h3> \
						</div> \
						<div class="modal-body"> \
							<p>We Are processing your Request.</p>\
						</div> \
						<div class="modal-footer"> \
							<p>Team Bhagat Singh</p> \
						</div>');
			$.ajax({
				type: "POST",
				url: "/article/submit",
				data: $(form).serialize(),
				success: function () {
					$('#submitArticle').html('<div class="modal-header">\
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> \
							<h3>Thanks!</h3> \
						</div> \
						<div class="modal-body"> \
							<p>Thanks for your Request. You will receive a email shortly including further steps.</p>\
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
