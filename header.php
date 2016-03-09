<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package components
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'components' ); ?></a>


	<?php if ( is_front_page() ) { ?>
		<div class="top-robot-container">
			<?php echo file_get_contents( get_template_directory() . '/assets/img/robot-plain.svg' ); ?>
		</div>

		<header id="masthead" class="site-header" role="banner">
			<?php
			/* Commenting out the menu, since it's not gonna be used in initial version of the site.

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'components' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			*/
			?>

			<div class="wrap">
				<div class="stretchy-pipe stretchy-pipe-left"></div>
				<div class="stretchy-pipe stretchy-pipe-center"></div>
				<div class="stretchy-pipe stretchy-pipe-right"></div>
				<?php echo file_get_contents( get_template_directory() . '/assets/img/pipe-main-left.svg' ); ?>
				<?php echo file_get_contents( get_template_directory() . '/assets/img/pipe-main-right.svg' ); ?>
				<?php echo file_get_contents( get_template_directory() . '/assets/img/tap.svg' ); ?>
				<?php echo file_get_contents( get_template_directory() . '/assets/img/tap-2.svg' ); ?>
				<div class="content-wrapper">
					<div class="intro-content">
						<div class="site-branding">
							<!-- Logo acts as an image -->
							<?php echo file_get_contents( get_template_directory() . '/assets/img/components.svg' ); ?>
							<!-- Hidden h1 for screen readers -->
							<h1 class="site-title screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
							<?php $description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<h2 class="site-description"><?php echo $description; ?></h2>
							<?php endif; ?>
						</div><!-- .site-branding -->
						<div id="intro">
							<p>Components is a library of <strong>shareable, reusable patterns</strong> for WordPress themes. Instead of starting from scratch, mix and match from a collection of pre-made components to build your own <strong>custom starter theme</strong>.</p>
							<p>If you&rsquo;re just starting out, it&rsquo;ll get you <strong>booted up</strong> without needing to reinvent the wheel or write a lot of custom code. If you&rsquo;re an experienced theme developer, you&rsquo;ll find <strong>well-organized, easy-to use code</strong> that you can remix to your heart&rsquo;s delight!</p>
						</div><!-- #intro -->
					</div><!-- .intro-content -->
				</div><!-- .content-wrapper -->
			</div><!-- .wrap -->
		</header><!-- #masthead -->
	<?php } ?>

	<div id="content" class="site-content">
