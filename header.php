<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Имя автора">

	<meta content="Название сайта" />
	<meta content="website" />
	<meta content="Ссылка на изображение логотипа" />
	
	<link href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/media.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	
	<?php wp_enqueue_script("jquery"); ?> 
	<?php wp_head(); ?> 
</head>
<body>
	<div id="wrap"><!-- Фиксированная респонсив навигация -->
		<header>
			<nav class="navbar navbar-inverse" role="navigation">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
				  <a class="navbar-brand" href="#">Brand</a>
				</div>

				
				<?php // Collect the nav links, forms, and other content for toggling 
					wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
				?><!-- /.navbar-collapse -->		
			  </div><!-- /.container-fluid -->
			</nav>
		</header>






