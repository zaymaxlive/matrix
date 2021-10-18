<?php
/*
Template Name: About
*/
get_header();
?>
<html>
    <body>

    <section class="sect_about">
        <div class="about_pref">
            <div class="poloska"></div>
            <div class="pref_info">
                <h1>MATRIX</h1>
                <h2>Электронный интернет-магазин MATRIX - это возможность полностью и с удовольствием погрузиться в мир высоких технологий с нашей продукцией.</h2>
                <h2>Мы молодая и прогрессивная компания. С каждым днем мы становимся все лучше и лучше. Станьте более продвинутыми вместе с нами.</h2>
                <button onclick="window.location.href = 'http://matrix.local/sample-page/contact/';">Связаться</button>
            </div>
            <div class="pref_img">
                <img src="<?php echo get_template_directory_uri();?>/img/about/1.jpg" alt="" srcset="">
            </div>
        </div>
        <div class="about_comp">
            <div class="copm_text">
                <h1>Компания</h1>
                <h3 style="padding-right: 60px;">Наша команда состоит только из проверенных профессионалов. Мы следим за качеством каждого выпущенного продукта, а также любим свою работу, поэтому у нас все получается!</h3>
            </div>
            <div class="comp_img">
                <img src="https://images.pexels.com/photos/7375/startup-photos.jpg?auto=compress&cs=tinysrgb&h=650&w=940" alt="" srcset="">
            </div>
        </div>
        <div class="about_comp">
            <div class="comp_img">
                <img src="https://images.unsplash.com/photo-1573164713712-03790a178651?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwzNzU1NXwwfDF8c2VhcmNofDh8fHxlbnwwfHx8&ixlib=rb-1.2.1&q=80&w=1080" alt="" srcset="">
            </div>
            <div class="copm_text">
                <h3 style="text-align: end;padding-left: 60px;">Вы являетесь частью нашей компании. Мы стараемся удовлетворить всех наших клиентов в любых вопросах, связанных с покупкой товаров. Мы даем вам технологии, а вы внедряете их в жизнь.</h3>
                <h1 style="transform: rotate(90deg);">Клиенты</h1>
            </div>
        </div>
        <div class="about_comp">
            <div class="copm_text">
                <h1>Товары</h1>
                <h3 style="padding-right: 60px;">Наша продукция производится исключительно в соответствии со стандартами качества и является стандартом в области технологий. За нами качество, надежность и преимущества!</h3>
            </div>
            <div class="comp_img">
                <img src="https://sun9-58.userapi.com/impg/CozHP62LXV3148DZlO0qyazC0hacJT74-cZQng/wjND179UVws.jpg?size=1280x853&quality=96&sign=adc35bd91d5d420caa5e8bbba44373d5&type=album" alt="" srcset="">
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
    </body>
</html>
