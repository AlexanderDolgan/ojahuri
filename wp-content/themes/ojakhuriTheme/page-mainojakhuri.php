<? get_header(); ?> <!--include header.php-->

<?php get_template_part('navigation'); ?>

<!----------HEADER------------>

<header class="main-header">
	<video autoplay loop muted>
		<source src="<?php bloginfo('template_directory') ?>/vid/header_vid.mp4">
	</video>
	<div class="header-content">
		<div class="header-content-inner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="logo ojakhuri"/></a> <!--header img for mobile devices-->

			<h1 class="header-h1">ГРУЗИНСКАЯ, РУССКАЯ И ЕВРОПЕЙСКАЯ КУХНИ</h1>
			<hr>
			<p>Мы приглашаем вас погрузится в атмосферу грузинского гостеприимства и щедрости, ведь “Оджахури” в
				переводе означает “как дома”.</p>
<!--			<a href="#about" class="btn btn-primary btn-xl page-scroll">Узнать больше</a>-->
		</div>
	</div>
</header>

<!-----------about------------>

<section class="color-section">
	<div class="row">
		<div>
			<h1>ОДЖАХУРИ</h1>
			<hr class="light">
			<p>Пьянящий аромат поджаренного мяса... Приятно смешивающийся запах кавказских специй, лука и картофеля, обжаренного до золотистого цвета и тончайшей хрустящей корочки, семейная атмосфера и домашняя кухня... Вот что такое “Оджахури”. В “Оджахури”, как и принято в Грузии, готовят исключительно из свежих продуктов, еще не подвергшихся термической обработке. Но готовят не просто, а с любовью, так же, как вы готовите для своих близких. Ведь для любого грузина гости - это святое.</p>
		</div>
	</div>
</section>

<!--------photo gallery------->

<section class="no-padding" id="portfolio">
	<div class="container-fluid">
		<div class="row no-gutter">
			<div class="col-lg-4 col-sm-6 no-padding">
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
			<div class="col-lg-4 col-sm-6   no-padding">
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
			<div class="col-lg-4 col-sm-6  no-padding">
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
			<div class="col-lg-4 col-sm-6  no-padding">
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
			<div class="col-lg-4 col-sm-6  no-padding">
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
			<div class="col-lg-4 col-sm-6  no-padding">
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

<!--service-boxes-->
<section class="white-section">
	<div class="container">
		<div class="row">
			<div>
				<h1 class="section-heading">ДОБРО ПОЖАЛОВАТЬ!</h1>
				<hr>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="service-box">
					<i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary"></i>

					<h3>Новости</h3>

					<p class="text-muted">Мы всегда стараемся Вас удивить. Почитайте о наших акциях и мероприятиях.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="service-box">
					<i class="fa fa-4x fa-flag-o wow bounceIn text-primary" data-wow-delay=".1s"></i>

					<h3>Забронировать столик?</h3>

					<p class="text-muted">Вы всегда можете забронировать у нас столик. Связашись с нашим администратором по телефону.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="service-box">
					<i class="fa fa-4x fa-rocket wow bounceIn text-primary" data-wow-delay=".2s"></i>

					<h3>Доставка</h3>

					<p class="text-muted">Быстро доставим Ваш заказ. Вы можете заказать доставку по телефону.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--------social links-------->


<aside class="color-section">
	<div class="container">
		<div class="call-to-action">
			<h1>Подпишитесь на наши новости</h1>
			<hr/>
			<a href="https://www.facebook.com/ojakhuri?fref=ts" ><i class="fa fa-3x fa-facebook wow bounceIn"></i></a>
			<a href="#" ><i class="fa fa-3x fa-vk wow bounceIn" data-wow-delay=".3s"></i></a>
			<a href="#" ><i class="fa fa-3x fa-instagram wow bounceIn" data-wow-delay=".6s"></i></a>
		</div>
	</div>
</aside>

<? get_footer(); ?> <!-- include footer.php-->
