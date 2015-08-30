<!----------contacts---------->


<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">Нас легко найти!</h2>
				<hr class="primary">
				<p>
					<?php
					$id      = 116;
					$post    = get_post( $id );
					$content = $post->post_content;
					echo $content;
					?>
				</p>
			</div>
			<div class="col-lg-4 col-lg-offset-2 text-center">
				<a href="tel:+74957931477"><i class="fa fa-phone fa-3x wow bounceIn"></i></a>

				<p><a href="tel:+74957931477">+7 (495) 793-14-77</a></p>

			</div>
			<div class="col-lg-4 text-center">
				<a href="mailto:ojakhuri.khimki@gmail.com"><i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i></a>

				<p><a href="mailto:ojakhuri.khimki@gmail.com">ojakhuri.khimki@gmail.com</a></p>
			</div>
		</div>
	</div>
</section>

<?php wp_footer(); ?>

</body>
</html>