<meta property="og:title" content="Revolutionary Bhagat Singh Quotes"/>
<meta property="og:image" content="http://www.revolutionarybhagatsingh.com/img/gallery/images(386)"/>
<meta property="og:site_name" content="http://www.revolutionarybhagatsingh.com"/>
<meta property="og:description" content="<?php echo str_replace( '"', ' ' , str_replace('\n', ' ', $current['Quotes']['quote'] ) );?>"/>
<div class="well well-small">
	<h2>Bhagat Singh Quote <a href="<?php echo $this->Xyz->u('quotes', 'add');?>" class="btn btn-primary pull-right" >Add Some Quote</a></h2>
</div>
<div class="row-fluid">
	<div class="span8 well">
			<div class="span1" title="Previous quote" ><a class="btn btn-info pull-left" <?php if( $neighbors['next']['Quotes']['q_id'] ) { ?> href="<?php echo $this->Xyz->u('quotes', 'view', 'bhagat-singh-quotes-' . $neighbors['next']['Quotes']['q_id']);?>" <?php } else { ?> disabled <?php } ?> ><i class="icon-arrow-left"></i></a></div>
			<div class="span10">
				<div id='<?php echo "quoteId_".$current['Quotes']['id'] ?>' style='background-color: #FFFFFF;border: 1px solid #dddddd;border-radius:5px;margin: 12px 0;padding:10px;'>
					<div class="media">
						<center>
							<h4>
								<span style="color:#536A7E;font-size:10px;" class="pull-left">
									<i class=" icon-user" style="margin-right:5px;"></i>
									<?php echo ucfirst( $current['Quotes']['quote_by_name'] ); ?>
								</span>
								<span style="font-size:10px; color:#536A7E; margin-right:10px;" class="pull-right" >
									<i class="icon-calendar" style="margin-right:5px;"></i>
									<?php echo $this->Xyz->beautifulDate( $current['Quotes']['created'], true ); ?>
								</span>
							</h4>
							<?php echo $this->Gravatar->image( $current['Quotes']['quote_by_email'] , array('size' => 120), array( 'class' => 'media-object img-rounded' )); ?>
						</center>
						<br/>
						<div class="media-body">
							<div style="margin-left:25px;">
								<i class="icon-comment"></i>
								<span class="text-success" style="font-size:20px; margin-right:10px;"><?php echo str_replace('\n', ' ', $current['Quotes']['quote'] );?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="span1" title="Next quote"><a class="btn btn-info pull-right" <?php if( $neighbors['prev']['Quotes']['q_id'] ) { ?> href="<?php echo $this->Xyz->u('quotes', 'view', 'bhagat-singh-quotes-' . $neighbors['prev']['Quotes']['q_id']);?>" <?php } else { ?> disabled <?php } ?> ><i class="icon-arrow-right"></i></a></div>
	</div>
	<div class="span4">
		<h2 class="text-info" >
			Stay Informed
		</h2>
		<form class="form-search" method="post" action="/feedbacks/subscribe">
			<input name="email" type="email" placeholder="Enter email" class="input-large search-query" required >
			<button type="submit" id ='submitButtons' class="btn btn-primary">Submit</button>
		</form>
		<div>
			<h2>
				Tell Your Friends about us!
			</h2>
			<p>
				Just Copy paste the link below to your favourite social website, or mail it to your friends.
			</p>
			<div class="well">
				<p>
					<a href="http://goo.gl/NbJ6jQ" target="_blank">http://goo.gl/NbJ6jQ</a>
				</p>
			</div>
		</div>
	</div>
	
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
								<span style="color:#6F9631;font-size:12px; font-weight:600; margin-right:10px;"><?php echo str_replace('\n', ' ', 'Hey! all You can comment on these quotes here, Will be displayed once admin approves it.' );?></span>
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
					<input type="hidden" name="object_id" id="object_id" value="<?php echo $current['Quotes']['id'] ?>" />
					<input type="hidden" name="object_type" id="object_type" value="quotes" /><br/><br/>
					<button class="btn btn-success" type="submit">Submit</button>
				</fieldset>
			</form>
		</div>
	</div>
</div>
