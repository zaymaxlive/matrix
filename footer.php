<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Matrix
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="foot">
			<div class="foot_soc">
					<a href="#"><i class="bi bi-telegram"></i></a>
					<a href="#"><i class="bi bi-instagram"></i></a>
					<a href="#"><i class="bi bi-twitter"></i></a>
					<a href="#"><i class="bi bi-envelope-fill"></i></a>
			</div>
			<div class="logo_foot">MATRIX
			<div class="foot_page">
			<a href="http://matrix.local/">Главная</a>
			<a href="http://matrix.local/sample-page/about/">О нас</a>
			<a href="http://matrix.local/sample-page/shopnew/">Магазин</a>
			<a href="http://matrix.local/sample-page/contact/">Контакты</a>
		</div>
			</div>
			<div class="foot_visa">
				<img src="https://img.icons8.com/fluency/48/000000/paypal.png"/>
				<img src="https://img.icons8.com/color/100/000000/visa.png"/>
			</div>
		</div>
		<div class="foot_line_spons">
			<a href="https://www.nvidia.com/ru-ru/"><img src="https://img.icons8.com/fluency/48/000000/nvidia.png"/>Nvidia</a>
			<a href="https://www.apple.com/ru/"><img src="https://img.icons8.com/office/40/000000/mac-os.png"/>Apple</a>
			<a href="https://dexp.club/">DEXP</a>
			<a href="https://www.hp.com/ru-ru/home.html"><img src="https://img.icons8.com/color/48/000000/hp.png"/>HP</a>
			<a href="https://www.lenovo.com/ru/ru/">Lenovo</a>
			<a href="https://ru.msi.com/"><img src="https://img.icons8.com/color/48/000000/msi.png"/>MSI</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri();?>/js/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

<script src="<?php echo get_template_directory_uri();?>/js/slider.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri();?>/js/search.js" defer></script>
<script src="<?php echo get_template_directory_uri();?>/js/fm.revealator.jquery.min.js"></script>
</body>
</html>
