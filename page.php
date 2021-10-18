<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Matrix
 */

get_header();
?>

	<main id="primary" class="site-main">
	<section class="page_bord">
		<div class="content_bord">
			<div class="box4">
				<a href="#">
					<img src="https://sun9-30.userapi.com/impg/ahk3MQgmJfAOE8lqru082eSNywDW5jmdv3FqUQ/P85JcDfUTj4.jpg?size=1280x795&quality=96&sign=c1e666a3953ec7cc67cd82fefccd2c6c&type=album" alt="" srcset="">
					<h1>PlayStation Dualshock 4 Magma Red<br><span>-НОВИНКА</span></h1>
				</a>
			</div>
			<div class="box1">
				<a href="#">
					<img src="https://sun9-62.userapi.com/impg/91WDf2NLe17CwtBDl7YU61x98uOZQU6B9Raf1Q/8sVS_hZm7vQ.jpg?size=1280x853&quality=96&sign=5eaa1854e3d689b97a32c6dc5de5a80a&type=album" alt="" srcset="">
					<h1>Apple Watch Series SE<br><span>-НОВИНКА</span></h1>
				</a>
			</div>
   			<div class="box2">
				<a href="#">
					<img src="https://sun9-26.userapi.com/impg/bw13E2-zlDEzcfMuNBSP1EfqZmvS5bq3R3uh-Q/FUnx5sgtnHU.jpg?size=1280x853&quality=96&sign=7a565ee841c9aa3c9b72929c260276ac&type=album" alt="" srcset="">
					<h1 style="color: #111;">ZET GAMING Blade PRO<br><span style="color: #111;">-НОВИНКА</span></h1>
				</a>
			</div>
   			<div class="box3">
			   <a href="#">
				   <img src="https://sun9-8.userapi.com/impg/C5hRlKhGL2zbMaerXLZo_nXUJqgY8FZ3ieQAyg/rdUSOk-y0gs.jpg?size=1280x853&quality=96&sign=02f4fe31c1ddd5dd77b85876910daf29&type=album" alt="" srcset="">
				   <h1>TWS Xiaomi Mi True Wireless Earphones Air 2 Pro<br><span>-НОВИНКА</span></h1>
				</a>
				</div>
		</div>
	</section>
	<section class="popular_product">
		<div class="pop_text">
			<h1>Популярные продукты</h1>
			<div class="pop_boot"></div>
		</div>
		<div class="pop_slaider">
			<div class="owl-carousel owl-theme">
    			<div class="item"><?php echo do_shortcode( '[products skus="1"]' ); ?></div>
    			<div class="item"><?php echo do_shortcode( '[products skus="120"]' ); ?></div>
    			<div class="item"><?php echo do_shortcode( '[products skus="3"]' ); ?></div>
    			<div class="item"><?php echo do_shortcode( '[products skus="119"]' ); ?></div>
    			<div class="item"><?php echo do_shortcode( '[products skus="5"]' ); ?></div>
    			<div class="item"><?php echo do_shortcode( '[products skus="116"]' ); ?></div>
    			<div class="item"><?php echo do_shortcode( '[products skus="2"]' ); ?></div>
    			<div class="item"><?php echo do_shortcode( '[products skus="115"]' ); ?></div>
    			<div class="item"><?php echo do_shortcode( '[products skus="4"]' ); ?></div>
    			<div class="item"><?php echo do_shortcode( '[products skus="5"]' ); ?></div>
    			<div class="item"><?php echo do_shortcode( '[products skus="4"]' ); ?></div>
    			<div class="item"><?php echo do_shortcode( '[products skus="2"]' ); ?></div>
			</div>
		</div>
	</section>
	<section class="popular_product">
		<div class="pop_text">
			<h1>Категории товаров</h1>
			<div class="pop_boot"></div>
		</div>
		<div class="pop_slaider">
			<?php echo do_shortcode( '[product_categories]' ); ?>
		</div>
	</section>
	<section class="popular_product">
		<div class="pop_text">
			<h1>Наш блог</h1>
			<div class="pop_boot"></div>
		</div>
		<div class="pop_slaider">
			<?php echo do_shortcode( '[display-posts include_title="true" posts_per_page="4" image_size="thumbnail" include_excerpt="true"]' ); ?>
		</div>
	</section>
	</main><!-- <?php echo do_shortcode( '[products skus="1"]' ); ?> #main -->

<?php
get_footer();





/** <?php
		*while ( have_posts() ) :
			*the_post();

			*get_template_part( 'template-parts/content', 'page' );

			
			*if ( comments_open() || get_comments_number() ) :
				*comments_template();
			*endif;

		*endwhile; // End of the loop.
		*?> */