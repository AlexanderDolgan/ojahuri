<? get_header(); ?> <!--include header.php-->

<?php get_template_part('navigation'); ?>

<header class="header-vacancies">
	<div class="header-content">
			<h1>ВАКАНСИИ</h1>
			<hr>
		</div>
	</div>
</header>

<!-----------вакагсии------------>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 text-center" >
				<i class="fa fa-4x fa-users wow bounceIn text-primary"></i>

				<?php
					$id = 37;// post-vacancies
					$post = get_post($id);
					$content = $post->post_content;
					echo $content;
				?>

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
