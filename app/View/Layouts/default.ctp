<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

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
	<?php
		echo $this->Html->meta(array("name"=>"viewport","content"=>"width=device-width,  initial-scale=1.0"));
        echo $this->Html->meta('icon');
        echo $this->Html->css( array('bootstrap', 'bootstrap-responsive', 'comb', 'style', 'style-responsive') );
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->Html->script( array( 'jquery.min', 'modernizr.min', 'bootstrap.min', 'jquery.validate', 'jquery.validate.min', 'jquery-ui.min', 'common' ) );
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
