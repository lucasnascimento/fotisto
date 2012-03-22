<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon') . "\r\n";

		echo $this->Html->css('bootstrap.min') . "\r\n";
		echo $this->Html->css('admin-default') . "\r\n";
		echo $this->Html->css('bootstrap-responsive.min') . "\r\n";
		echo $this->Html->script('bootstrap.min') . "\r\n";

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="#">Fotisto</a>
				<ul class="nav">
					<li class="active"><a href="#">Área Administrativa</a></li>
					<li><?php echo $this->Html->link( 'Ir para o site', '/' );?></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
