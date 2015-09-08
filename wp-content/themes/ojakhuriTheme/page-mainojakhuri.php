<? get_header(); ?> <!--include header.php-->

<?php get_template_part( 'navigation' ); ?>

<!----------HEADER------------>

<header class="main-header animatedParent" data-sequence='500'>
	<div class="container-fluid">
		<div class="row">
			<video autoplay loop muted poster="<?php bloginfo( 'template_directory' ) ?>/images/header.jpg">
				<source src="<?php bloginfo( 'template_directory' ) ?>/vid/header_vid.mp4">
			</video>
			<div class="header-content">
				<div class="header-content-inner">
					<a class="animated bounceInDown" data-id="1" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img
							src="<?php bloginfo( 'template_directory' ) ?>/images/logo.png" alt="logo ojakhuri"/></a>
					<!--header img for mobile devices-->

					<h1 class="header-h1 animated fadeIn" data-id="2">ГРУЗИНСКАЯ, РУССКАЯ И ЕВРОПЕЙСКАЯ КУХНИ</h1>
					<hr class="animated fadeIn" data-id="3">
					<p class="animated bounceInUp" data-id="4">Мы приглашаем вас погрузится в атмосферу грузинского гостеприимства
						и щедрости, ведь “Оджахури” в
						переводе означает “как дома”.</p>
					<!--			<a href="#about" class="btn btn-primary btn-xl page-scroll">Узнать больше</a>-->
				</div>
			</div>
		</div>
	</div>
</header>

<!-----------about------------>

<section class="color-section">
	<div class="row">
		<div class="section-content-container col-md-8 col-md-offset-2 animatedParent">
			<h1 class="animated fadeIn">ОДЖАХУРИ</h1>
			<hr>
			<p class="animated fadeInUpShort">Пьянящий аромат поджаренного мяса... Приятно смешивающийся запах кавказских
				специй, лука и картофеля,
				обжаренного до золотистого цвета и тончайшей хрустящей корочки, семейная атмосфера и домашняя кухня...
				Вот что такое “Оджахури”. В “Оджахури”, как и принято в Грузии, готовят исключительно из свежих
				продуктов, еще не подвергшихся термической обработке. Но готовят не просто, а с любовью, так же, как вы
				готовите для своих близких. Ведь для любого грузина гости - это святое.</p>
		</div>
	</div>
</section>

<!--<!--------photo gallery------->
<!---->
<!--<section class="no-padding" id="portfolio">-->
<!--	<div class="container-fluid">-->
<!--		<div class="row no-gutter">-->
<!--			<div class="col-lg-4 col-sm-6 no-padding">-->
<!--				<a href="#" class="portfolio-box">-->
<!--					<img src="--><?php //bloginfo( 'template_directory' ); ?><!--/images/1.jpg" class="img-responsive" alt="">-->
<!---->
<!--					<div class="portfolio-box-caption">-->
<!--						<div class="portfolio-box-caption-content">-->
<!--							<div class="project-category text-faded">-->
<!--								Категория-->
<!--							</div>-->
<!--							<div class="project-name">-->
<!--								название-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</a>-->
<!--			</div>-->
<!--			<div class="col-lg-4 col-sm-6   no-padding">-->
<!--				<a href="#" class="portfolio-box">-->
<!--					<img src="--><?php //bloginfo( 'template_directory' ); ?><!--/images/2.jpg" class="img-responsive" alt="">-->
<!---->
<!--					<div class="portfolio-box-caption">-->
<!--						<div class="portfolio-box-caption-content">-->
<!--							<div class="project-category text-faded">-->
<!--								Категория-->
<!--							</div>-->
<!--							<div class="project-name">-->
<!--								название-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</a>-->
<!--			</div>-->
<!--			<div class="col-lg-4 col-sm-6  no-padding">-->
<!--				<a href="#" class="portfolio-box">-->
<!--					<img src="--><?php //bloginfo( 'template_directory' ); ?><!--/images/3.jpg" class="img-responsive" alt="">-->
<!---->
<!--					<div class="portfolio-box-caption">-->
<!--						<div class="portfolio-box-caption-content">-->
<!--							<div class="project-category text-faded">-->
<!--								Категория-->
<!--							</div>-->
<!--							<div class="project-name">-->
<!--								нащвание-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</a>-->
<!--			</div>-->
<!--			<div class="col-lg-4 col-sm-6  no-padding">-->
<!--				<a href="#" class="portfolio-box">-->
<!--					<img src="--><?php //bloginfo( 'template_directory' ); ?><!--/images/4.jpg" class="img-responsive" alt="">-->
<!---->
<!--					<div class="portfolio-box-caption">-->
<!--						<div class="portfolio-box-caption-content">-->
<!--							<div class="project-category text-faded">-->
<!--								Категория-->
<!--							</div>-->
<!--							<div class="project-name">-->
<!--								название-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</a>-->
<!--			</div>-->
<!--			<div class="col-lg-4 col-sm-6  no-padding">-->
<!--				<a href="#" class="portfolio-box">-->
<!--					<img src="--><?php //bloginfo( 'template_directory' ); ?><!--/images/5.jpg" class="img-responsive" alt="">-->
<!---->
<!--					<div class="portfolio-box-caption">-->
<!--						<div class="portfolio-box-caption-content">-->
<!--							<div class="project-category text-faded">-->
<!--								Категория-->
<!--							</div>-->
<!--							<div class="project-name">-->
<!--								название-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</a>-->
<!--			</div>-->
<!--			<div class="col-lg-4 col-sm-6  no-padding">-->
<!--				<a href="#" class="portfolio-box">-->
<!--					<img src="--><?php //bloginfo( 'template_directory' ); ?><!--/images/6.jpg" class="img-responsive" alt="">-->
<!---->
<!--					<div class="portfolio-box-caption">-->
<!--						<div class="portfolio-box-caption-content">-->
<!--							<div class="project-category text-faded">-->
<!--								категория-->
<!--							</div>-->
<!--							<div class="project-name">-->
<!--								название-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</a>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->
<section>
	<div class="container-fluid">
		<div class="row">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/mainpagegallery/interior1.jpg" alt="interior1">
				<div class="carousel-caption">
					<h3>НАЗВАНИЕ1</h3>
					<p>Описание 1 Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/mainpagegallery/interior2.jpg" alt="interior2">
				<div class="carousel-caption">
					<h3>НАЗВАНИЕ1</h3>
					<p>Описание 1 Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/mainpagegallery/interior3.jpg" alt="interior3">
				<div class="carousel-caption">
					<h3>НАЗВАНИЕ1</h3>
					<p>Описание 1 Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/mainpagegallery/interior4.jpg" alt="interior4">
				<div class="carousel-caption">
					<h3>НАЗВАНИЕ1</h3>
					<p>Описание 1 Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/mainpagegallery/interior5.jpg" alt="interior5">
				<div class="carousel-caption">
					<h3>НАЗВАНИЕ1</h3>
					<p>Описание 1 Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
		</div>
	</div>
</section>

<!--service-boxes-->
<section class="white-section welcome animatedParent">
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
			<div class="col-lg-4 col-md-4 animated fadeInLeft">
				<div class="service-box">
					<i class="fa fa-4x fa-newspaper-o text-primary"></i>

					<h3>Новости</h3>

					<p class="text-muted">Мы всегда стараемся Вас удивить. Почитайте о наших акциях и мероприятиях.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 animated fadeInDown ">
				<div class="service-box">
					<i class="fa fa-4x fa-flag-o text-primary"></i>

					<h3>Забронировать столик?</h3>

					<p class="text-muted">Вы всегда можете забронировать у нас столик. Связашись с нашим администратором
						по телефону.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 animated fadeInRight ">
				<div class="service-box">
					<i class="fa fa-4x fa-rocket text-primary"></i>

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
		<div class="section-content-container col-md-8 col-md-offset-2 animatedParent" data-sequence='500'>
			<div class="call-to-action">
				<h1 class="animated fadeInUpShort" data-id='1'>Подпишитесь на наши новости</h1>
				<hr/>
				<a href="https://www.facebook.com/ojakhuri?fref=ts"><i
						class="fa fa-3x fa-facebook animated tada" data-id='2'></i></a>
				<a href="#"><i class="fa fa-3x fa-vk animated tada" data-id='3'></i></a>
				<a href="#"><i class="fa fa-3x fa-instagram animated tada" data-id='4'></i></a>
			</div>
		</div>
	</div>
</aside>

<!---------new courses----------->
<section class="new-courses animatedParent animateOnce" data-sequence="500" data-appear-top-offset='-850'>
	<div class="container">
		<h1>Новые блюда</h1>

		<div class="courses-block">

			<div class="grid animated fadeInRightShort" data-id="1">
				<figure class="effect-sarah">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/4.jpg" alt="img13"/>
					<figcaption>
						<h2>Цыцыла «Чкмерули»</h2>

						<p>Домашний цыпленок, запеченный с соусом</p>
					</figcaption>
				</figure>
			</div>

			<div class="grid animated fadeInRightShort" data-id="2">
				<figure class="effect-sarah">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/4.jpg" alt="img13"/>
					<figcaption>
						<h2>Цыцыла «Чкмерули»</h2>

						<p>Домашний цыпленок, запеченный с соусом</p>
					</figcaption>
				</figure>
			</div>

			<div class="grid animated fadeInRightShort" data-id="3">
				<figure class="effect-sarah">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/4.jpg" alt="img13"/>
					<figcaption>
						<h2>Цыцыла «Чкмерули»</h2>

						<p>Домашний цыпленок, запеченный с соусом</p>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>
</section>
<? get_footer(); ?> <!-- include footer.php-->
