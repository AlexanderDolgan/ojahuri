<? get_header(); ?> <!--include header.php-->

<?php get_template_part( 'navigation' ); ?>

<header class="main-header main-header-vacancies">
	<div class="header-content">
		<a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo"><img
				src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="logo ojakhuri"/></a>
		<h1>ВАКАНСИИ</h1>
		<hr>
		<h3>С мастерством люди не родятся, но добытым мастерством гордятся.</h3>
	</div>

</header>

<!-----------вакансии------------>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 text-center">
				<i class="fa fa-4x fa-users wow bounceIn text-primary"></i>

				<h1 class="vacanciec-header">Повар</h1>

				<p class="vacancies-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, qui?</p>

				<h1 class="vacanciec-header">Менеджер</h1>

				<p class="vacancies-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, qui?</p>

				<h1 class="vacanciec-header">Официант</h1>

				<p class="vacancies-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, qui?</p>

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
