<div class="well well-small">
    <h2>Add Quote<span class="label label-important pull-right"><sup> * </sup>FIELDS ARE MANDATORY </span></h2>
</div>
<div class="row-fluid">
	<div class="form-horizontal well span8">
		<form name="Addimage" action="" method="post" enctype="multipart/form-data" id="Addimage">
			<fieldset style="width:90%;">
				<div class="control-group" >
					<label for="keyword" class="control-label">keyword:<font color = "red"><sup>*</sup></font></label>
					<div class="controls">
						<textarea name="keyword" class="required" rows="10" >bhagat singh, revolutionary, india, freedom fighter, bhagat, shaheed, singh soorma, revolution, india, independence, bhagat singh images,bhagat singh,bhagat singh bday photos,bhagat singh ajay devgan songs,bhagat singh movie online,the legend of bhagat singh,bhagat singh pictures,shaheed bhagat singh,bhagat singh photos,the legend of bhagat singh full movie download,bhagat singh birthday quotes,the legend of bhagat singh movie online,bhagat singh image,the legend of bhagat singh full,photo gallery bhagat singh,shaheed bhagat singh college,history of bhagat singh,the legend of bhagat singh full movie,the legend of bhagat singh movie online free,shahid bhagat singh,bhagat singh singh,bhagat singh session judge,bhagat singh quotes,watch legend of bhagat singh online free,bhagat singh birthday postcards,the legend of bhagat singh movie,yo yo honey singh bhagat singh full song,bhagat singh biography,bhagat singh movie,real image of bhagat singh,legend of bhagat singh full movie,photo quotes on bhagat singh birthday,sardar bhagat singh,information about bhagat singh,bhagat singh birthday,bhagat singh diary,bhagat singh original photo,bhagat singh rajguru sukhdev images,bhagat singh full movie watch online,shaheed bhagat singh state technical campus,bombs exploded after bhagat singh by mistake,bhagat singh images download,legend of bhagat singh stream,bhikhowal wale sant baba bhagat singh,bhagat singh full movie,give information about bhagat singh,poem on bhagat singh in punjabi,bhagat singh movie watch online,the legend of bhagat singh watch online,the lrgend of bhagat singh watch online,the legend of bhagat singh movie free download,quotes,main fan bhagat singh da, fan bhagat singh, bhagat singh hindi, hindi quote on bhagta singh, poem on bhagat singh in hindi,bhagat singh in punjabi, bhagat singh poem in punjabi, bhagat singh songs</textarea>
					</div>
				</div>
				<div class="control-group" >
					<label for="desc" class="control-label">desc:<font color = "red"><sup>*</sup></font></label>
					<div class="controls">
						<textarea name="desc" class="required" rows="10" ></textarea>
					</div>
				</div>
				<div class="control-group" >
					<label for="slug" class="control-label">slug:<font color = "red"><sup>*</sup></font></label>
					<div class="controls">
						<input type="text" name="slug" class="required">
					</div>
				</div>
				<div class="control-group" >
					<label for="web_desc" class="control-label">web_desc:<font color = "red"><sup>*</sup></font></label>
					<div class="controls">
						<textarea name="web_desc" class="required" rows="10" ></textarea>
					</div>
				</div>
				<div class="control-group" >
					<label for="web_name" class="control-label">web_name:<font color = "red"><sup>*</sup></font></label>
					<div class="controls">
						<input type="text" name="web_name" class="required">
					</div>
				</div>
				<div class="control-group" >
					<label for="name" class="control-label">name:<font color = "red"><sup>*</sup></font></label>
					<div class="controls">
						<input type="text" name="name" class="required" value="<?php echo $image+1; ?>">
					</div>
				</div>
				<button class="btn btn-success pull-right" name="submit" value ="submit" type="submit"><i class="icon-book icon-white"></i> Submit</button>
			</fieldset>
		</form>
	</div>
	<div class="span4">
		<img alt="" src="<?php echo $this->webroot . 'img/gallery/images('. $image . ')' ?>">
		<?php echo $image+1; ?>
	</div>
</div>
