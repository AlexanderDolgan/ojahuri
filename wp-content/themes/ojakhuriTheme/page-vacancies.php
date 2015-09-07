<? get_header(); ?> <!--include header.php-->

<?php get_template_part( 'navigation' ); ?>

<header class="main-header main-header-vacancies">
	<div class="header-content">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img
				src="<?php bloginfo( 'template_directory' ) ?>/images/logo.png" alt="logo ojakhuri"/></a>

		<h1>ВАКАНСИИ</h1>
		<hr>
		<h3>С мастерством люди не родятся, но добытым мастерством гордятся.</h3>
	</div>

</header>

<!-----------вакансии------------>

<section class="vacancies">
	<div class="container vacancies-block">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 text-center bg-content wow bounceInUp center animated">
				<i class="fa fa-4x fa-users wow bounceIn text-primary"></i>
				<h1>Повар</h1>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, qui Lorem ipsum dolor sit amet.</p>

				<h1>Менеджер</h1>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, qui Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, qui Lorem ipsum dolor sit amet.</p>

				<h1>Официант</h1>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, qui Lorem ipsum dolor sit amet.</p>

			</div>
		</div>
	</div>
</section>

<? get_footer(); ?> <!-- include footer.php-->

<!--------social links-------->

<aside class="contacts-page-social">
	<div class="container text-center">
		<div class="call-to-action">
			<a href="#"><i class="fa fa-1x fa-facebook wow bounceIn"></i></a>
			<a href="#"><i class="fa fa-1x fa-instagram wow bounceIn"
			               data-wow-delay=".3s"></i></a>
			<a href="#"><i class="fa fa-1x fa-vk wow bounceIn" data-wow-delay=".6s"></i></a>
		</div>
	</div>
</aside>

