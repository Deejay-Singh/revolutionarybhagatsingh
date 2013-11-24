<?php
$cakeDescription = __d('cake_dev', 'Life and ideas of Revolutionary Bhagat Singh');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="description" content="Bhagat Singh was an Indian socialist considered to be one of the most influential revolutionaries of the Indian independence movement he was also a freedom fighter, Bhagat Singh Quotes, Bhagat Singh Images, Bhagat Singh Articles" />
	<meta name="keywords" content="bhagat singh, bhagat, singh, revolutionary, freedom, fighter, freedom fighter, revolution, revolutionary, independence, india, punjab, british, 1947 bhagat singh, revolutionary, india, freedom fighter, bhagat, shaheed, singh soorma, revolution, india, independence, bhagat singh images,bhagat singh,bhagat singh bday photos,bhagat singh ajay devgan songs,bhagat singh movie online,the legend of bhagat singh,bhagat singh pictures,shaheed bhagat singh,bhagat singh photos,the legend of bhagat singh full movie download,bhagat singh birthday quotes,the legend of bhagat singh movie online,bhagat singh image,the legend of bhagat singh full,photo gallery bhagat singh,shaheed bhagat singh college,history of bhagat singh,the legend of bhagat singh full movie,the legend of bhagat singh movie online free,shahid bhagat singh,bhagat singh singh,bhagat singh session judge,bhagat singh quotes,watch legend of bhagat singh online free,bhagat singh birthday postcards,the legend of bhagat singh movie,yo yo honey singh bhagat singh full song,bhagat singh biography,bhagat singh movie,real image of bhagat singh,legend of bhagat singh full movie,photo quotes on bhagat singh birthday,sardar bhagat singh,information about bhagat singh,bhagat singh birthday,bhagat singh diary,bhagat singh original photo,bhagat singh rajguru sukhdev images,bhagat singh full movie watch online,shaheed bhagat singh state technical campus,bombs exploded after bhagat singh by mistake,bhagat singh images download,legend of bhagat singh stream,bhikhowal wale sant baba bhagat singh,bhagat singh full movie,give information about bhagat singh,poem on bhagat singh in punjabi,bhagat singh movie watch online,the legend of bhagat singh watch online,the lrgend of bhagat singh watch online,the legend of bhagat singh movie free download,quotes,main fan bhagat singh da, fan bhagat singh, bhagat singh hindi, hindi quote on bhagta singh, poem on bhagat singh in hindi,bhagat singh in punjabi, bhagat singh poem in punjabi, bhagat singh songs" />
	<link rel="stylesheet" href="css/jquery-bootstrap-feedback.css">
	<?php
		echo $this->Html->meta(array("name"=>"viewport","content"=>"width=device-width,  initial-scale=1.0"));
        echo $this->Html->meta('icon');
        echo $this->Html->css( array('bootstrap', 'bootstrap-responsive.min', 'comb', 'style', 'style-responsive', 'jquery-bootstrap-feedback', 'jquery-bootstrap-feedback-ie7', 'jquery.pointpoint' ) );
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->Html->script( array( 'jquery.min', 'modernizr.min', 'bootstrap.min', 'jquery.validate.min', 'jquery-ui.min', 'jquery.pointpoint', 'transform', 'script' ,'jquery-bootstrap-feedback', 'jquery-bootstrap-article', 'jquery.lazyload.min' ) );
        echo $this->fetch('script');
	?>
	<script>
	jQuery(document).ready(function() {
		jQuery("#AddQuote").validate();
	});
	</script>
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
    <header><?php echo $this->element('header');?></header>
    <div class="container-fluid" style="min-height:100%" >
		<div class="row-fluid">
			<div class="span12">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
				<?php echo $this->element('feedback'); ?>
				<?php echo $this->element('submit_article'); ?>
			</div>
        </div>
    </div><br/><br/>
    <footer class="footer"><?php echo $this->element('footer');?></footer>
    <?php //echo $this->element('sql_dump'); ?>
</body>
</html>
<?php if( $_SERVER['HTTP_HOST'] == 'www.revolutionarybhagatsingh.com' ) { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45173818-1', 'revolutionarybhagatsingh.com');
  ga('send', 'pageview');
</script>
<?php } ?>
<script>
	jQuery(document).ready( function() {
		jQuery('#submitButton').pointPoint();
	});
</script>
