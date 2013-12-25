<script src="/js/ckeditor/ckeditor.js"></script>
<script src="/js/ckeditor/adapters/jquery.js"></script>
<script>
jQuery( document ).ready( function() {
	jQuery( 'textarea#editor1' ).ckeditor();
} );
</script>
<div class="well well-small">
    <h2>Add Question<span class="label label-important pull-right"><sup> * </sup>FIELDS ARE MANDATORY </span></h2>
</div>
<div class="row-fluid">
	<div class="form-horizontal well span8">
		<form name="question" action="" method="post" enctype="multipart/form-data" id="addQuestion">
			<fieldset style="width:90%;">
				<div class="control-group" >
					<label for="quote_by_name" class="control-label">Title:<font color = "red"><sup>*</sup></font></label>
					<div class="controls">
						<input type="text" name="title" class="required input-xxlarge" placeholder="Name" >
					</div>
				</div>
				<div class="control-group" >
					<label for="quote" class="control-label">Enter Question:<font color = "red"><sup>*</sup></font></label>
					<div class="controls">
						<textarea cols="80" id="editor1" name="question" rows="10"></textarea>
					</div>
				</div>
				<button class="btn btn-success pull-right" name="submit" value ="submit" type="submit"><i class="icon-book icon-white"></i> Submit</button>
			</fieldset>
		</form>
	</div>
</div>

