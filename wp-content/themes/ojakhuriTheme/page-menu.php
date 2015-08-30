<? get_header(); ?> <!--include header.php-->

<?php get_template_part('navigation'); ?>


<header class="header-vacancies">
	<div class="header-content">
		<h1>ВАКАНСИИ</h1>
		<hr>
	</div>
	</div>
</header>
<div>

</div>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8" >

				<?php
				$args = array(
					'child_of' => get_top_ancestor_id(),
					'title_li' => ''
				);
				?>

				<?php wp_list_pages($args)?>

<!--				--><?php //echo do_shortcode( '[erm_menu id=217]' ); ?>

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
