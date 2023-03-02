<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<meta name="description" content="Description Web"/>
	<meta name="keywords" content="" />
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/jquery.mmenu.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/lightGallery.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/lightslider.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/jquery.mmenu.positioning.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
	<link rel="icon" href="<?php bloginfo('template_directory') ?>/favicon.png" type="image/x-icon"/>
	<?php wp_head(); ?>
	<style>
		html {
		margin-top: 0px !important;
	}
	.block-partner {
			background: #fbfbfb;
		padding: 0 !important;
		}
	</style>
</head>
<body <?php body_class();?>>
	<div id="header-menu" class="lh-wrapper">
		<div>
		</div>
		<div class="lh-header <?php if(!is_home()){echo 'module-header';} ?>">
			<div class="header-position">
				<!-- end block-header -->
				<div class="block-menu">
					<div class="container">
						<div class="row">
							<div class="box-logo col-lg-2 col-4">
								<a href="" class="logo"><img class="img-fluid" src="" alt=""></a>
							</div>
							<div style="display:flex;justify-content:center" class="box-menu col-lg-12">
								<nav id="drop_down">
								<?php 
								wp_nav_menu( 
								array( 
									'theme_location' => 'main-menu', 
									'container' => 'false', 
									'menu_id' => 'header-menu', 
									'menu_class' => 'lh2-ul'
									) 
								); ?>

								</nav>
							</div>
						</div>
						<button class="d-lg-none d-md-none" id="menu"><span></span></button>
					</div>
				</div>
				<!-- end block-menu -->
			</div>
			<?php if(!is_home()){ ?>
				<div class="block-slider"></div>
			<?php } ?>
			