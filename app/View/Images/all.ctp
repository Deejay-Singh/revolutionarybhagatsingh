<div class="well well-small">
	<h2>Gallery</h2>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="well">
			<div class="well-small"><?php echo $this->element('right'); ?></div>
			<?php foreach($images as $image ) { $i = $image['Image']['id']-1; ?>
				<a href="<?php echo $this->Xyz->u('images', 'index', $image['Image']['slug'].'-'.$image['Image']['name']);?>"><img class="img-polaroid lazy" data-original="<?php echo $this->webroot . 'img/gallery/images('.$i.')' ?>" width="250" height="250" alt="" /></a>
			<?php } ?>
		</div>
	</div>
</div>
<script>
jQuery(function() {
    jQuery("img.lazy").lazyload();
});
</script>
