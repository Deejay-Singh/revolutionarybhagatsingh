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
<div class="clear"></div>
<div class="row-fluid clearfix">
	<div class="span8 column ui-sortable form-horizontal well">
		<div class="form-horizontal well"  valign="top" >
			<div class="breadcrumb">
				<h4>Comments</h4>
			</div>
			<div style="clear:both;overflow:auto;height: 340px;">
				<!-- Default Admin Start -->
				<div id='commentId_admin ?>' rel="admin" style='background-color: #f2f2f2;border: 1px solid #dddddd;border-radius:5px;margin: 12px 0;padding:10px;'>
					<div class="media">
						<a class="pull-left" href="#">
							<?php echo $this->Gravatar->image( 'daljeet.working@gmail.com' , array('size' => 64), array( 'class' => 'media-object img-rounded' )); ?>
						</a>
						<div class="media-body">
							<h4 class="media-heading"><span style="color:#536A7E;font-size:10px;"><i class=" icon-user" style="margin-right:5px;"></i> <?php echo ucfirst( 'Bhagat Singh' ); ?></span><span style="font-size:10px; color:#536A7E; margin-right:10px;" class="pull-right" ><i class="icon-calendar" style="margin-right:5px;"></i> <?php echo $this->Xyz->beautifulDate( '2013-11-16 19:20:53', true ); ?></span></h4>
							<div style="margin-left:25px;">
								<i class="icon-comment"></i>
								<span style="color:#6F9631;font-size:12px; font-weight:600; margin-right:10px;"><?php echo str_replace('\n', ' ', 'Hey! all You can comment on these images here, Will be displayed once admin approves it.' );?></span>
							</div>
						</div>
					</div>
				</div>
				<!-- Default Admin End -->
			<?php  
				foreach($comments as $comment) {
			?>
				<div id='commentId_<?php echo $comment['Comment']['_id'] ?>' rel="<?php echo $comment['Comment']['user_id'] ?>" style='background-color: #f2f2f2;border: 1px solid #dddddd;border-radius:5px;margin: 12px 0;padding:10px;'>
					<div class="media">
						<a class="pull-left" href="#">
							<?php echo $this->Gravatar->image( $comment['Comment']['user_email'] , array('size' => 64), array( 'class' => 'media-object img-rounded' )); ?>
						</a>
						<div class="media-body">
							<h4 class="media-heading"><span style="color:#536A7E;font-size:10px;"><i class=" icon-user" style="margin-right:5px;"></i> <?php echo ucfirst( $comment['Comment']['user_name'] ); ?></span><span style="font-size:10px; color:#536A7E; margin-right:10px;" class="pull-right" ><i class="icon-calendar" style="margin-right:5px;"></i> <?php echo $this->Xyz->beautifulDate( $comment['Comment']['created'], true ); ?></span></h4>
							<div style="margin-left:25px;">
								<i class="icon-comment"></i>
								<span style="color:#6F9631;font-size:12px; font-weight:600; margin-right:10px;"><?php echo str_replace('\n', ' ', $comment['Comment']['comment'] );?></span>
							</div>
						</div>
					</div>
				</div>
				<?php 
					}
				?>
			</div>
		</div>
	</div>
	<div class="span4 column ui-sortable form-horizontal well">
		<div class="form-horizontal well"  valign="top" >
			<form accept-charset="utf-8" method="post" id="CommentCommentForm" action="/comments/comment">
				<fieldset>
					<legend>Enter Your Comment</legend>
					<input type="email" placeholder="Enter Email Id" class="input-xlarge" id="user_email" name="user_email" required=""><br/><br/>
					<input type="text" placeholder="Enter your name" class="input-xlarge input-append" id="user_name" name="user_name" required=""><br/><br/>
					<textarea placeholder='Comment here...' required="" id="addComment" style="width:97.8%;" rows="5" cols="2" name="comment"></textarea>
					<input type="hidden" name="object_id" id="object_id" value="<?php echo $id ?>" />
					<input type="hidden" name="object_type" id="object_type" value="image" /><br/><br/>
					<button class="btn btn-success" type="submit">Submit</button>
				</fieldset>
			</form>
		</div>
	</div>
</div>
