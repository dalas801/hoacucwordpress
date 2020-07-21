<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hiencucvang
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo@2x.png">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="1024">
		<meta property="og:image:height" content="1024">


		<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.ico">
		
		<title>Hiên Cúc Vàng</title>
		
		<!-- Bootstrap core CSS -->
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Font Awesome Icons -->
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/all.min.css" rel="stylesheet">
		<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/allfontawesome.min.js"></script>
		<!-- Custom CSS -->
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/custom.css" rel="stylesheet">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/themify-icons.css" rel="stylesheet">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/customsas.css" rel="stylesheet">

		<link href="https://unpkg.com/@glidejs/glide@3.3.0/dist/css/glide.core.min.css" rel="stylesheet">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/glide.theme.min.css" rel="stylesheet">
		
		<!-- Google Fonts -->
		
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,800;1,900&family=Quicksand:wght@400;500;600;700&family=Roboto+Slab:wght@900&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<!-- Add the slick-theme.css if you want default styling -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hiencucvang' ); ?></a>

	<header class="site-header" role="banner">
			<div class="header-top">
				<div class="container">
					<div class="slogan">
						Website chia sẻ  thông tin về trà lớn nhất hiện nay
					</div>
					<!-- <div class="signIn">
						<i class="far fa-user"></i>
						<a>Đăng ký/ Đăng nhập</a>
					</div> -->
					
				</div>
			</div>
			
			<!-- NAVBAR
			================================================== -->
			<div class="fl-allNav-full">
			<div class="container fl-allNav">
				
				<nav class="navbar navbar-expand-lg navbar-light fl-nav ">
					<a class="navbar-brand" href="index.html">
						<img class="logoImg" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo@2x.png" alt="hoa cuc vang logo">
					</a>
				
					<?php
						wp_nav_menu( array(
							
							'theme_location'	=> 'menu-1',
							'container'			=> 'nav',
							'container_class'	=> 'navbar-collapse collapse',
							'menu_class'		=> 'navbar-nav ml-auto nav-custom'
							
						) );
					?>

					<div id="search-icon" class="b-nav-search_icon">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/close.svg" width="20"  alt="" class="b-nav-search_close-icon">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/search.svg" width="20" id="search-icon-open"  alt="" class="b-nav-search_open-icon" >
					</div>
					<div class="login-menu">
					<button class="btn btn-login btn-dk" type="submit" data-toggle="modal" data-target="#modalRegisterForm">Đăng nhập</button> 
					</div>
					
					<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span> </span>
						<span> </span>
						<span> </span>
					</button>
				</nav>
				</div>
			</div>
				<div class="b-nav-search_wrap" id="searchBox">
					<div class="b-nav-search_inner">
					<form  id="search-component" class="b-nav-search_component w-form">
						<input type="search" class="b-nav-search_input w-input" maxlength="256" name="query" placeholder="Tìm kiếm thông tin về trà nào..."
						id="search-2" required="">
						<input type="submit" value=" " class="b-nav-search_button cc-light w-button"></form>
				  </div>
				</div>
				</div>
				
			</header>
