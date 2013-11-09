<?php
$c = $current['Image']['id']-1;
$p = $prev['Image']['slug'].'-'.$prev['Image']['name'];
$n = $next['Image']['slug'].'-'.$next['Image']['name'];
?>
<div class="well well-small">
	<h2>Image</h2>
</div>
<div class="row-fluid">
	<div class="span8 well">
			<div class="span1"><a class="btn btn-info pull-left" href="<?php echo $this->Xyz->u('images', 'index', $p ); ?>" ><i class="icon-arrow-left"></i></a></div>
			<div class="span10"><center><img class="img-rounded" src="<?php echo $this->webroot . 'img/gallery/images('.$c.')' ?>" alt="" /></center></div>
			<div class="span1"><a class="btn btn-info pull-right" href="<?php echo $this->Xyz->u('images', 'index', $n );?>" ><i class="icon-arrow-right"></i></a></div>
	</div>
	<?php echo $this->element('right'); ?>
</div>
