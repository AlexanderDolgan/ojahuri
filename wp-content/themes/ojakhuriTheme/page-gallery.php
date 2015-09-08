<? get_header(); ?> <!--include header.php-->

<?php get_template_part( 'navigation' ); ?>

<header class="main-header main-header-gallery">
	<div class="header-content">

		<h1>ГАЛЕРЕЯ</h1>
		<hr>
		<h3>55 способов приятно провести время</h3>
	</div>

</header>

<section class="gallery-section animatedParent">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<h3>ИНТЕРЬЕР</h3>
					<hr/>
					<div>
						<?php if ( have_posts() ) :
							while ( have_posts() ) : the_post();
								the_content();
							endwhile;
						endif; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<h3>НАШЕ МЕНЮ</h3>
					<hr/>
					<div>
						<?php if ( have_posts() ) :
							while ( have_posts() ) : the_post();
								the_content();
							endwhile;
						endif; ?>
					</div>
				</div>
			</div>
		</div>
	<style>
		#bwg_container1_0 #bwg_container2_0 .bwg_title_spun2_0, #bwg_container1_1 #bwg_container2_1 .bwg_title_spun2_1 {
			font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
			color: #FFF;
			font-size: 2rem;
			font-weight: 500;
		}

	</style>
</section>

<? get_footer(); ?> <!-- include footer.php-->
<?php get_template_part( 'social-links' ) ?>
