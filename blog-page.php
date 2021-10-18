<?php
/*
Template Name: Blog
*/
get_header();
?>
<html>
    <body>
    <section class="sect_blogs">
        <div class="blogs_title">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://sun9-8.userapi.com/impg/C5hRlKhGL2zbMaerXLZo_nXUJqgY8FZ3ieQAyg/rdUSOk-y0gs.jpg?size=1280x853&quality=96&sign=02f4fe31c1ddd5dd77b85876910daf29&type=album" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://sun9-58.userapi.com/impg/CozHP62LXV3148DZlO0qyazC0hacJT74-cZQng/wjND179UVws.jpg?size=1280x853&quality=96&sign=adc35bd91d5d420caa5e8bbba44373d5&type=album" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://sun9-62.userapi.com/impg/91WDf2NLe17CwtBDl7YU61x98uOZQU6B9Raf1Q/8sVS_hZm7vQ.jpg?size=1280x853&quality=96&sign=5eaa1854e3d689b97a32c6dc5de5a80a&type=album" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>
        </div>
        <div class="blog_short">
            <?php echo do_shortcode( '[display-posts include_title="true" image_size="thumbnail" include_excerpt="true"]' ); ?>
        </div>
    </section>

    <?php get_footer(); ?>
    </body>
</html>