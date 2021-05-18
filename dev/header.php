<!doctype html>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="utf-8">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
		<meta name="language" content="PT-BR">
		<meta content="pt-br" http-equiv="content-language">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/slick/slick.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/slick/slick-theme.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.typekit.net/djm3dgo.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<?php wp_head(); ?> 
		
		<style>
			
		</style>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-47753258-20"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-47753258-20');
		</script>

	</head>

	<body>
		<header>
		<div class="container">
			<div class="headerMobileFixed">
				<div class="headerLogo">
					<a href="<?php echo site_url(); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-shecar-new.png" alt="Shecar Logo">
					</a>
				</div>
				<div class="hamburguerIcon">
					<a href="#">
						<div id="nav-icon4">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</a>
				 </div>
			</div>
			<div class="mainMenu">
				<div class="wpMainMenu">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</div>
				<div class="menuCta">
					<ul>
						<li><a href="<?php echo site_url(); ?>/find-my-car" class="btn btn-green">Find My Car</a></li>
						<li><a class="menuPhone" href="tel:407.234.0080">407.234.0080</a></li>
					</ul>
				</div>
			</div>
		</div>	
	</header>