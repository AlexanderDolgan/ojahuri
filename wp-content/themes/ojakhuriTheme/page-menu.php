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
<section class="menu-page">
	<div class="container">
		<div class="row">

			<div class="col-md-3">
				<ul class="nav-menu">
					<?php
					$args = array(
						'child_of' => get_top_ancestor_id(),
						'title_li' => ''
					);
					?>
					<?php wp_list_pages( $args ) ?>
				</ul>
			</div>

			<div class="col-md-8">

				<?php if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				endif; ?>

			</div>
			<style>
				.erm_menu {
					border-color: #AD9D88;

				}
				.erm_menu .erm_title {
					font-family: 'Lobster';
					font-size: 4.5rem;
					color: #474747;
				}
				.erm_menu_content > li {

					padding:10px;
					background-color: #FFF;
					box-shadow: 1px 1px 10px rgba(0,0,0,.1);
				}
				.erm_menu p span {
					font-family: 'Helvetica Neue', Arial, sans-serif;
				}
				.erm_product_title {
					font-size: 1.4rem;
					font-family: 'Lobster';
				}
				.erm_menu .erm_section_title {
					font-size: 3rem;
					font-family: 'Lobster';
					border-top: 4px solid #AD9D88;
					border-bottom: 4px solid #AD9D88;
				}
			</style>
	</div>
</section>

<? get_footer(); ?> <!-- include footer.php-->

<?php get_template_part('social-links')?>
