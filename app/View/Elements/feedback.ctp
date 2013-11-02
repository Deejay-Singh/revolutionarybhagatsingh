<div id="feedbackModal" class="modal hide fade">
	<form id="feedbackForm">
  <div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Get In Touch</h3>
  </div>
  <div class="modal-body">
	<p>Please submit us any kind of feedback you like. It is really valuable for us to improve our service.</p>
	  <div class="row-fluid">
		<input type="text" name="name" class="span6 required feedback-val" placeholder="Your name">
		<input type="text" name="email" class="span6 required email feedback-val" placeholder="Your email">
	  </div>
	  <div class="row-fluid">
		<input type="text" name="subject" class="span12 required feedback-val" placeholder="Subject">
		<input type="hidden" id="feed-mood" value="1" name="mood" class="span2">
	  </div>
	  <div class="row-fluid">
		<textarea name="comment" class="span12 required feedback-val" rows="5" placeholder="Tell us your story..."></textarea>
	  </div>
	  <div class="row-fluid">
		<div class="btn-group span3 js-emotion-bar" data-toggle="buttons-radio">
		  <a href="javascript:;" class="btn feed-mood" rel="1" data-toggle="tooltip" title="I\'m happy"><i class="icon-emo-happy"></i>&nbsp;</a>
		  <a href="javascript:;" class="btn feed-mood" rel="2" data-toggle="tooltip" title="I\'m ok"><i class="icon-emo-sleep"></i>&nbsp;</a>
		  <a href="javascript:;" class="btn feed-mood" rel="3" data-toggle="tooltip" title="I\'m unhappy"><i class="icon-emo-unhappy"></i>&nbsp;</a>
		</div>
		<div class="span8">
		  <p class="muted note">How are you feeling?</p>
		</div>
	  </div>
	
  </div>
  <div class="modal-footer">
	<button class="btn btn-success js-send-feedback" name="submit" value ="submit" type="submit"><i class="icon-envelope icon-white"></i> Send it to us!</button>
  </div>
  </form>
</div>
<div id="supportbar">
	<a href="#feedbackModal" class="btn btn-success btn-feedback js-open-feedback feedback-call" data-toggle="modal"><i class="icon-comment icon-white"></i> Get in Touch</a>
</div>
