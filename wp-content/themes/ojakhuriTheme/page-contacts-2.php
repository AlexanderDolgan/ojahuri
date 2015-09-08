<!--contact-2 page-->
<? get_header(); ?> <!--include header.php-->

<?php get_template_part('navigation'); ?>

<header class="main-header main-header-contacts">
    <div class="header-content">

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

<?php get_template_part('social-links')?>