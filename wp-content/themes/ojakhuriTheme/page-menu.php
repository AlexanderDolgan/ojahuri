<? get_header(); ?> <!--include header.php-->

<?php get_template_part( 'navigation' ); ?>


<header class="main-header main-header-menu">
	<div class="header-content">
		<h1>МЕНЮ</h1>
		<hr>
		<h3>Нет любви более искренней, чем любовь к еде.</h3>
	</div>
</header>
<div>

</div>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<ul>
					<?php
					$args = array(
						'child_of' => get_top_ancestor_id(),
						'title_li' => ''
					);
					?>
					<?php wp_list_pages( $args ) ?>
				</ul>
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
