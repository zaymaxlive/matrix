<?php
/*
Template Name: ShopNew
*/
get_header();
?>
        <section class="shop_search">
            <?php aws_get_search_form( true ); ?>
        </section>
        <section class="page_bord">
            <?php echo do_shortcode( '[products columns="4" visibility="visible"]' ); ?>
        </section>
<?php get_footer(); ?>