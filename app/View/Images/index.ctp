<?php $rand = myRand('0', '400', '10' );?>
<div class="well well-small">
	<h2>Gallery</h2>
</div>
<div class="row-fluid">
	<div class="span4">
		<div class="well">
			<p class="text-info">
				We want your help to increase our rechability to maximum public, for that we need more resources, feedback and ideas.
				If You have any ideas, points aor any thing please feel free to fill our feedback form.
				We will reach you and will try to add that idea to our website.
				And yes Don't forget to mention your name, as we will be cediting you for the features and valuable ideas.
			</p>
			<p>
				Regards,<br/>
				Team Revolutionary Bhagat Singh <br/>
				admin@revolutionarybhagatsingh.com
			</p>
		</div>
	</div>
	<div class="span4">
		<div class="well">
			<div class="carousel slide" id="carousel-610177">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-610177"></li>
					<li data-slide-to="1" data-target="#carousel-610177" class=""></li>
					<li data-slide-to="2" data-target="#carousel-610177" class=""></li>
					<li data-slide-to="3" data-target="#carousel-610177" class=""></li>
					<li data-slide-to="4" data-target="#carousel-610177" class=""></li>
					<li data-slide-to="5" data-target="#carousel-610177" class=""></li>
					<li data-slide-to="6" data-target="#carousel-610177" class=""></li>
					<li data-slide-to="7" data-target="#carousel-610177" class=""></li>
					<li data-slide-to="8" data-target="#carousel-610177" class=""></li>
					<li data-slide-to="9" data-target="#carousel-610177" class=""></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="<?php echo $this->webroot . 'img/gallery/images('. $rand[0] . ')' ?>">
						<div class="carousel-caption">
							<h4>Revolutionary Bhagat Singh</h4>
							<p>Tribute To Revolutionary Bhagat Singh.</p>
						</div>
					</div>
					<?php for($i=1; $i<10; $i++ ) { ?>
					<div class="item">
						<img alt="" src="<?php echo $this->webroot . 'img/gallery/images('. $rand[$i] . ')' ?>">
						<div class="carousel-caption">
							<h4>Revolutionary Bhagat Singh</h4>
							<p>Tribute To Revolutionary Bhagat Singh.</p>
						</div>
					</div>
					<?php } ?>
				</div>
				<a data-slide="prev" href="#carousel-610177" class="left carousel-control">‹</a>
				<a data-slide="next" href="#carousel-610177" class="right carousel-control">›</a>
			</div>
		</div>
	</div>
	<?php echo $this->element('right'); ?>
</div>
