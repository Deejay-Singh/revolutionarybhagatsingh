<div class="well well-small">
    <h2>Add Quote<span class="label label-important pull-right"><sup> * </sup>FIELDS ARE MANDATORY </span></h2>
</div>
<div class="row-fluid">
	<div class="form-horizontal well span8">
		<form name="Addquote" action="" method="post" enctype="multipart/form-data" id="AddQuote">
			<fieldset style="width:90%;">
				<div class="control-group" >
					<label for="quote_by_name" class="control-label">Name:<font color = "red"><sup>*</sup></font></label>
					<div class="controls">
						<input type="text" name="quote_by_name" class="required" placeholder="Name">
					</div>
				</div>
				<div class="control-group" >
					<label for="quote_by_email" class="control-label">Email:<font color = "red"><sup>*</sup></font></label>
					<div class="controls">
						<input type="email" name="quote_by_email" class="required email" placeholder="Email" >
					</div>
				</div>
				<div class="control-group" >
					<label for="quote" class="control-label">Enter Quote:<font color = "red"><sup>*</sup></font></label>
					<div class="controls">
						<textarea name="quote" class="span12 required" rows="10" placeholder="Quote here...."></textarea>
					</div>
				</div>
				<button class="btn btn-success pull-right" name="submit" value ="submit" type="submit"><i class="icon-book icon-white"></i> Submit</button>
			</fieldset>
		</form>
	</div>
	<?php echo $this->element('right'); ?>
</div>
