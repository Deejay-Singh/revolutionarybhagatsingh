<div class="clear"></div>
    <table width="100%">
        <tr>
            <td valign="top" class="form-horizontal well">
                <div class="form-horizontal well" style="clear:both;">
                    <div class="breadcrumb">
                        <h4>Enter Your comment</h4>
                    </div>
                    <table width="100%" name='comment'>
                        <?php echo $this->Form->create('Comment', array('action' => 'comment')); ?>
                            <tr>
                                <td colspan="3"><textarea name='comment' cols='2' rows='5'  style="width:97.8%;" id ='addComment' required></textarea></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="controls" style="margin-right:20px; display:inline;">
                                        <label class="checkbox">
                                            <input type="checkbox" value="agree" name="display_in_front_end" id="termsCheckbox">Display in Front End
                                        </label>
                                    </div>
                                </td>
                            <tr>
                                <td style="float:right;">
                                    <?php echo $this->Form->submit('Submit', array( 'class' => 'btn btn-success', 'div' => 'controls' ) );?>
                                    <?php echo $this->Form->end(); ?>
                                </td> 
                            </tr>
                    </table>
                </div>
            </td>
            
            <td width="3%">&nbsp;</td>
            
            <td valign="top" class="form-horizontal well">
                <div class="form-horizontal well" >
                    <div class="breadcrumb">
                        <h4>Comments</h4>
                    </div>
                    <div style="clear:both;overflow:auto;height: 277px;">
                        <?php  
                            if($this->Session->check('Auth.User')) {
                                foreach($comments as $comment) {
                        ?>			
                                    <div id='commentId_<?php echo $comment['Comment']['_id'] ?>' style='background-color: #f2f2f2;border: 1px solid #dddddd;border-radius:5px;margin: 12px 0;padding:10px;'>
                                        <span style="color:#536A7E;font-size:10px;"><i class=" icon-user" style="margin-right:5px;"></i> <?php echo ucfirst($comment['Comment']['user_name']); ?></span>
                                        <span style="font-size:10px; color:#536A7E; margin-right:10px;"><i class="icon-calendar" style="margin-right:5px;"></i> <?php echo $this->Bestylish->beautifulDate( $comment['Comment']['created'] ); ?></span>
                                        <b><a class="btn btn-small delete-link dmsbutton" id='<?php echo $comment['Comment']['_id'] ?>' style="cursor:pointer;float:right;"><i class="icon-trash"></i> </a></b>
                                        <br/>
                                        <div style="margin-left:25px;">
                                            <i class="icon-comment"></i>
                                            <span style="color:#6F9631;font-size:12px; font-weight:600; margin-right:10px;"><?php echo wordwrap( str_replace('\n', ' ', $comment['Comment']['comment'] ), 30, "<br/>" );?> </span>
                                        </div>
                                    </div>
                    <?php 
                            }
                        }
                    ?>
                    </div>
                </div>
            </td>
        </tr>
    </table>
