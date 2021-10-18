<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Matrix
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="wp-content/themes/matrix/js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="wp-content/themes/matrix/js/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="wp-content/themes/matrix/css/fm.revealator.jquery.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'matrix' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="hd-site-new">
			<div class="hd-site">
				<div class="hd-logo-name">MATRIX</div>
				<div class="hd-li-name">
					<nav id="site-navigation" class="main-navigation">
					<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'matrix' ); ?></button>-->
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								)
							);
						?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="search_hd">
					<?php aws_get_search_form( true ); ?>
				</div>
				<div class="hd-icons">
					<ul>
						<li><i class="bi bi-search"></i><i class="bi bi-x-octagon-fill"></i></li>
						<li><a href="http://matrix.local/my-account/"><i class="bi bi-person-circle"></i></a></li>
						<li>
							<!--show-cart-contents-total-->
						<a href="<?php echo wc_get_cart_url(); ?>"><i class="bi bi-cart2"></i></a>
						<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></a>
						</li>
						<li>
							<i class="bi bi-list"></i>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->
