<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<!-- Meta
	============================================= -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i|Open+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cairo:400,400i,700,700i&subset=arabic" rel="stylesheet">
	<link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">

	<!-- Favicon
	============================================= -->
	<link rel="shortcut icon" href="images/general-elements/favicon/favicon.png">
	<link rel="apple-touch-icon" href="images/general-elements/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/general-elements/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/general-elements/favicon/apple-touch-icon-114x114.png">

	<!-- Title
	============================================= -->
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body>

	<div id="scroll-progress"><span class="scroll-percent"></span></div>

	<!-- Website Loading
	============================================= -->	
 <!-- <div id="website-loading">
		<div class="loader">
			<div class="la-ball-scale la-2x">
			    <div></div>
			</div>
		</div>
	</div>  -->
	<!-- .website-loading end -->

	<!-- Document Full Container
	============================================= -->
	<div id="full-container">

		<!-- Header
		============================================= -->
		<header id="header">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<header class="header-eight">
				<div class="header-eight__topbar">
					<div class="auto-container">
						<ul class="header-eight__topbar__info">
							<li><i class="bi bi-envelope"></i><a href="mailto:contato@versys.com">contato@versys.com</a></li>
							<li><i class="flaticon-pin-1"></i>(51) 9 9898-7137</li>
						</ul>
						<div class="header-eight__topbar__right">
							<p>Bem-vindo à VERSYS Consultoria em segurança Portuária</p>
							<div class="header-eight__topbar__social">
								<a href="#" class="fab fa-facebook-square"></a>
								<a href="#" class="fab fa-twitter"></a>
								<a href="#" class="fab fa-instagram"></a>
								<a href="#" class="fab fa-pinterest-p"></a>
							</div>
						</div>
					</div>
				</div>
				<nav class="mainmenu-eight main-header">
					<div class="auto-container">
						<div class="nav-outer mainmenu-eight__inner">
							<div class="mainmenu-eight__left">
								<a href="/index-main">
									<img src="/_next/static/media/logo-8-light.47f5cfae.png" width="134" alt="Linoor - Digital Agency NextJS Template">
								</a>
								<div class="mobile-nav-toggler">
									<span class="icon flaticon-menu-2"></span>
									<span class="txt">Menu</span>
								</div>
							</div>
							<nav class="main-menu navbar-expand-md navbar-light">
								<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class="dropdown current">
											<a href="/index-main">Home 
												<div class="dropdown-btn"><span class="fa fa-angle-right"></span></div>
											</a>
											<ul style="display: block;">
												<li><a href="/index-main">Home Style 01</a></li>
												<li><a href="/index-2">Home Style 02</a></li>
												<li><a href="/index-3">Home Style 03</a></li>
												<li><a href="/one-page">Home One Page</a></li>
												<li><a href="/index-4">Home Style 04</a></li>
												<li><a href="/index-5">Home Style 05</a></li>
												<li><a href="/index-6">Home Style 06 <span>new</span></a></li>
												<li><a href="/index-7">Home Style 07 <span>new</span></a></li>
												<li class="current"><a href="/index-8">Home Style 08 <span>new</span></a></li>
												<li><a href="/index-portfolio">Portfolio Home</a></li>
												<li><a href="/index-portfolio-2">Portfolio Home 02</a></li>
												<li><a href="/index-portfolio-3">Portfolio Home 03</a></li>
												<li><a href="/index-parallax">Parallax Home</a></li>
												<li><a href="/index-dark">Dark Home</a></li>
												<li><a href="/index-boxed">Boxed Home</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="/about">About Us 
												<div class="dropdown-btn"><span class="fa fa-angle-right"></span></div>
											</a>
											<ul style="display: block;">
												<li><a href="/about-2">About Two</a></li>
												<li><a href="/about-me">About Me</a></li>
												<li><a href="/mission">Our Mission</a></li>
												<li><a href="/history">Our History</a></li>
												<li class="dropdown">
													<a href="/team">Our Team <span>new</span>
														<div class="dropdown-btn"><span class="fa fa-angle-right"></span></div>
													</a>
													<ul style="display: block;">
														<li><a href="/team">Team 01</a></li>
														<li><a href="/team-2">Team 02</a></li>
														<li><a href="/team-3">Team 03 <span>new</span></a></li>
													</ul>
												</li>
												<li><a href="/process">Our Process <span>new</span></a></li>
												<li><a href="/partners">Our Partner <span>new</span></a></li>
											</ul>
										</li>
										<!-- Additional menu items omitted for brevity -->
									</ul>
								</div>
							</nav>
							<div class="mainmenu-eight__right">
								<div class="search-btn mainmenu-eight__search">
									<button type="button" class="theme-btn search-toggler">
										<span class="flaticon-magnifying-glass"></span>
									</button>
								</div>
								<a href="tel:+926668880000" class="mainmenu-eight__call">
									<span class="mainmenu-eight__call__icon"><i class="flaticon-phone"></i></span>
									<span class="mainmenu-eight__call__text">Have any questions? <br>Free: <strong>+ 92 666 888 0000</strong></span>
								</a>
							</div>
						</div>
					</div>
				</nav>
				<?php endwhile; else: endif; ?>
			</header>
			

		</header>
    
		
		<!-- #header end -->