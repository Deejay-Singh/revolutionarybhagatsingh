<div class="row-fluid">
	<div class="span12">
		<div class="well">
			<h1>
				Quotes
				<a href="<?php echo $this->Xyz->u('quotes', 'add');?>" class="btn btn-info pull-right" >Add Some Quote</a>
			</h1>
			<div class="row-fluid">
				 <div class="span12">
					<?php $flag = 0; foreach( $quotes as $key => $quote ) {?>
						<?php if($flag == 0 ) { $started = true; ?> <div class="row-fluid"> <?php } ?>
						<div class="span4">
							<div id='<?php echo "quoteId_".$quote['Quotes']['id'] ?>' style='background-color: #FFFFFF;border: 1px solid #dddddd;border-radius:5px;margin: 12px 0;padding:10px;cursor: pointer;'  onclick="location.href='<?php echo $this->Xyz->u('quotes', 'view', 'bhagat-singh-quotes-' . $quote['Quotes']['q_id']);?>';">
								<div class="media">
									<a class="pull-left" href="<?php echo $this->Xyz->u('quotes', 'view', 'bhagat-singh-quotes-' . $quote['Quotes']['q_id']);?>">
										<?php echo $this->Gravatar->image( $quote['Quotes']['quote_by_email'] , array('size' => 48), array( 'class' => 'media-object img-rounded' )); ?>
									</a>
									<div class="media-body">
										<h4 class="media-heading"><span style="color:#536A7E;font-size:10px;"><i class=" icon-user" style="margin-right:5px;"></i> <?php echo ucfirst( $quote['Quotes']['quote_by_name'] ); ?></span><span style="font-size:10px; color:#536A7E; margin-right:10px;" class="pull-right" ><i class="icon-calendar" style="margin-right:5px;"></i> <?php echo $this->Xyz->beautifulDate( $quote['Quotes']['created'], true ); ?></span></h4>
										<div style="margin-left:25px;">
											<a href="<?php echo $this->Xyz->u('quotes', 'view', 'bhagat-singh-quotes-' . $quote['Quotes']['q_id']);?>" style="text-decoration:none;">
												<i class="icon-comment"></i>
												<span style="color:#6F9631;font-size:12px; font-weight:600; margin-right:10px;"><?php echo str_replace('\n', ' ', $quote['Quotes']['quote'] );?></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php if($flag == 2 ) { ?> </div> <?php $started = false; } ?>
					<?php
						$flag++;
						if( $flag ==3 ) { $flag = 0; }
						}
					?>
					<?php if( $started ) {  ?> </div> <?php } ?>
				</div>
			</div>
		</div>
	</div>
	<?php //echo $this->element('right'); ?>
</div>
