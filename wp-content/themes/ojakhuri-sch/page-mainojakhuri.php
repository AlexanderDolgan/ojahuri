<? get_header(); ?> <!--include header.php-->

<?php get_template_part('navigation'); ?>

    <!--HEADER-->

    <header class="main-header animatedParent" data-sequence='500'>
        <div class="container-fluid">
            <div class="row">
                <!--<video autoplay loop muted poster="-->
                <?php //bloginfo('template_directory') ?><!--/images/header.jpg">-->
                <!--<source src="--><?php //bloginfo('template_directory') ?><!--/vid/header_vid.mp4">-->
                <!--</video>-->
                <div class="header-content">
                    <div class="header-content-inner">
                        <a class="animated bounceInDown" data-id="1"
                           href="<?php echo esc_url(home_url('/')); ?>"><?php get_template_part('images/inline', 'logo.svg'); ?></a>

                        <!--header img for mobile devices-->
                        <h1 class="header-h1 animated fadeIn" data-id="2"><?php echo get_the_title(990); ?> </h1>
                        <hr class="animated fadeIn" data-id="3">
                        <p class="animated bounceInUp" data-id="4"><?php show_the_content_by_id(990); ?></p>

                        <!--<a href="#about" class="btn btn-primary btn-xl page-scroll">Узнать больше</a>-->
                    </div>
                </div>
            </div>
        </div>
    </header>

<? get_footer(); ?>