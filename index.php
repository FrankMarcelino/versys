
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="slider-eight">
	<div class="swiper swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events thm-swiper__slider">
		<div class="swiper-wrapper" style="transition-duration: 0ms;"></div>
		<div class="swiper-wrapper" style="transition-duration: 0ms;">
			<div class="swiper-slide swiper-slide-next swiper-slide-prev" style="width: 1905px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
				<div class="image-layer" src="<?php echo get_stylesheet_directory_uri(); ?>/images/files/bg/navio.avif" alt="" >
		
				</div>
				<div class="auto-container">
					<div class="slider-eight__content">
						<p class="slider-eight__text"><span>Helping businesses since 1987</span></p>
						<h2 class="slider-eight__title">Reach the Limits with Consulting Agency.</h2>
						<div class="slider-eight__btns">
							<a href="#" class="slider-eight__btn thm-btn__eight">Case Studies</a>
							<a href="#" class="slider-eight__btn slider-eight__btn--two thm-btn__eight">Contact Now</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- Slider -->
<section id="banner">
	<div id="home" class="banner-parallax" data-scroll-index="0">
		<div class="banner-slider">
			<ul class="owl-carousel slider-img-bg">
				<li>
					<div class="overlay-colored" data-bg-color="#000" data-bg-color-opacity="0.50"></div>
					<div class="overlay-pattern" data-bg-color="#000" data-bg-color-opacity="0"></div>
					<div class="slide">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/files/bg/navio.avif" alt="">
						<div class="slide-content">
							<div class="container">
								<div class="row">
									<div class="col-md-8 col-md-offset-2">
										<div class="banner-center-box text-center">
											<h1>Especialistas em<br><span class="colored">segurança portuaria</span></h1>
											<div class="description">
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
											</div>
											<a class="btn colorful large hover-dark" href="#">Explore More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<!-- Additional slides omitted for brevity -->
			</ul>
		</div>
	</div>
</section>

<!-- Content -->
<section id="content">
	<div id="content-wrap">
		<!-- === Our Services === -->
		<div id="our-services" class="flat-section our-services" data-scroll-index="1">
			<div class="section-title">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2>Our great services</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section-content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="os-tabs">
								<li class="active"><i class="fa fa-plane"></i>Airline Tickets</li>
								<li><i class="fa fa-globe"></i>Worldwide Tours</li>
								<li><i class="fa fa-bank"></i>Hotel Reservation</li>
								<li><i class="fa fa-heartbeat"></i>Medical Tours</li>
							</ul>
							<div class="row">
								<ul class="os-tabs-content">
									<li class="active">
										<div class="col-md-7">
											<h4>Airline Tickets</h4>
											<p>Duis ac adipiscing risus. Fusce posuere hendrerit velit sit amet scelerisque...</p>
											<ul class="list check-square">
												<li>Nam sit amet eros vel nunc pharetra imperdiet.</li>
												<li>Nulla mattis lacus pharetra aliquet porttitor.</li>
												<li>Phasellus sodales ligula in odio facilisis...</li>
											</ul>
										</div>
										<div class="col-md-5">
											<div class="img-preview">
												<img src="http://placehold.it/430x320" alt="">
											</div>
										</div>
									</li>
									<!-- Additional tabs omitted for brevity -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Additional sections omitted for brevity -->
	</div>
</section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>