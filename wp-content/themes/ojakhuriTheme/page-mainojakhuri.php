<? get_header(); ?> <!--include header.php-->

<?php get_template_part('navigation'); ?>

<!----------HEADER------------>

<header>
	<video autoplay loop muted>
		<source src="<?php bloginfo('template_directory') ?>/vid/header_vid.mp4"> <!--video link-->
	</video>
	<div class="header-content">
		<div class="header-content-inner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="logo ojakhuri"/></a> <!--header img for mobile devices-->

			<h1>ГРУЗИНСКАЯ, РУССКАЯ И ЕВРОПЕЙСКАЯ КУХНИ</h1>
			<hr>
			<p>Мы приглашаем вас погрузится в атмосферу грузинского гостеприимства и щедрости, ведь “Оджахури” в
				переводе означает “как дома”.</p>
<!--			<a href="#about" class="btn btn-primary btn-xl page-scroll">Узнать больше</a>-->
		</div>
	</div>
</header>

<!-----------about------------>

<section class="bg-primary" id="about">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">ОДЖАХУРИ</h2>
				<hr class="light">
				<p>
					<?php
					$id = 1;
					$post = get_post($id);
					$content = $post->post_content;
					echo $content;
					?>
				</p>
				<a href="#" class="btn btn-default btn-xl"> перейти в меню</a>
			</div>
		</div>
</section>

<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">ДОБРО ПОЖАЛОВАТЬ!</h2>
				<hr class="primary">
			</div>
		</div>
	</div>

	<!---------services----------->

	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary"></i>

					<h3>Новости</h3>

					<p class="text-muted">Мы всегда стараемся Вас удивить.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".1s"></i>

					<h3>Новые блюда</h3>

					<p class="text-muted">Ищите что то новое и интересное?</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-diamond wow bounceIn text-primary" data-wow-delay=".2s"></i>

					<h3>Забронировать столик</h3>

					<p class="text-muted">С радостью забронируем лучший столик только для Вас.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".3s"></i>

					<h3>Доставка</h3>

					<p class="text-muted">Быстро доставим Ваш заказ!</p>
				</div>
			</div>
		</div>
	</div>
</section>


<!--------photo gallery------->

<section class="no-padding" id="portfolio">
	<div class="container-fluid">
		<div class="row no-gutter">
			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?php bloginfo('template_directory'); ?>/images/1.jpg" class="img-responsive" alt="">

					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Категория
							</div>
							<div class="project-name">
								название
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?php bloginfo('template_directory'); ?>/images/2.jpg" class="img-responsive" alt="">

					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Категория
							</div>
							<div class="project-name">
								название
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?php bloginfo('template_directory'); ?>/images/3.jpg" class="img-responsive" alt="">

					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Категория
							</div>
							<div class="project-name">
								нащвание
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?php bloginfo('template_directory'); ?>/images/4.jpg" class="img-responsive" alt="">

					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Категория
							</div>
							<div class="project-name">
								название
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?php bloginfo('template_directory'); ?>/images/5.jpg" class="img-responsive" alt="">

					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Категория
							</div>
							<div class="project-name">
								название
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?php bloginfo('template_directory'); ?>/images/6.jpg" class="img-responsive" alt="">

					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								категория
							</div>
							<div class="project-name">
								название
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>


<!--------social links-------->


<aside class="bg-dark">
	<div class="container text-center">
		<div class="call-to-action">
			<h2>Подпишитесь на наши новости!</h2>
			<a href="#" class="btn btn-default btn-xl wow tada">Facebook</a>
			<a href="#" class="btn btn-default btn-xl wow tada">Instagram</a>
			<a href="#" class="btn btn-default btn-xl wow tada">Vkontakte</a>
		</div>
	</div>
</aside>

<? get_footer(); ?> <!-- include footer.php-->
