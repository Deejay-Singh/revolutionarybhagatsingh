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
	<meta name="description" content="Bhagat Singh was an Indian socialist considered to be one of the most influential revolutionaries of the Indian independence movement he was also a freedom fighter" />
	<meta name="keywords" content="bhagat singh, bhagat, singh, revolutionary, freedom, fighter, freedom fighter, revolution, revolutionary, independence, india, punjab, british, 1947" />
	<?php
		echo $this->Html->meta(array("name"=>"viewport","content"=>"width=device-width,  initial-scale=1.0"));
        echo $this->Html->meta('icon');
        echo $this->Html->css( array('bootstrap', 'bootstrap-responsive', 'comb', 'style', 'style-responsive', 'feedback-style' ) );
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->Html->script( array( 'jquery.min', 'modernizr.min', 'bootstrap.min', 'jquery.validate', 'jquery.validate.min', 'jquery-ui.min', 'common') );
        echo $this->fetch('script');
	?>
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
    <header><?php echo $this->element('header');?></header>
    <div class="container" style="min-height:97%">
        <div class="hero-unit" >
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>
    <footer class="footer"><?php echo $this->element('footer');?></footer>
    <?php echo $this->element('sql_dump'); ?>
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
