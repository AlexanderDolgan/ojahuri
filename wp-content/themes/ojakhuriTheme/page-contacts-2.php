<!--contact-2 page-->
<? get_header(); ?> <!--include header.php-->

<?php get_template_part('navigation'); ?>

<header class="main-header main-header-contacts">
    <div class="header-content">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo"><img
                src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="logo ojakhuri"/></a>
        <h1>КОНТАКТЫ</h1>
        <hr>
        <h3>Добро пожаловать</h3>
    </div>
</header>


<? get_footer(); ?> <!-- include footer.php-->

<div class="yandex-map">
    <!--	Яндекс карта без использования API-->
    <?php
    $id = 75;// post-yandex map
    $post = get_post($id);
    $content = $post->post_content;
    echo $content;
    ?>
</div>

<!--	контактная форма - плагин ContactForm 7-->
<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Напишите нам</h1>
                <?php echo do_shortcode('[contact-form-7 id="93" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</section>
<!--------social links-------->

<aside class="contacts-page-social">
    <div class="container text-center">
        <div class="call-to-action">
            <a href="#" ><i class="fa fa-1x fa-facebook wow bounceIn"></i></a>
            <a href="#" ><i class="fa fa-1x fa-instagram wow bounceIn"
                                                       data-wow-delay=".3s"></i></a>
            <a href="#" ><i class="fa fa-1x fa-vk wow bounceIn" data-wow-delay=".6s"></i></a>
        </div>
    </div>
</aside>