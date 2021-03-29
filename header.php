<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site mt-3">
	<header id="masthead" class="site-header container">
		<div class="site-branding">
		<!-- remove this icon, it's just for fun! -->
		<div class="mb-5 is-flex is-justify-content-center">
			<div class="has-text-centered tag is-black "><i class="fas fa-football-ball"></i>&nbsp;Let's kicking off this theme!</div>
		</div>
		
		<!-- -->
			<?php
			
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$_s_description = get_bloginfo( 'description', 'display' );
			if ( $_s_description || is_customize_preview() ) :
				?>
				<p class="site-descriptionis-family-secondary is-size-6"><?php echo $_s_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav class="navbar container" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
				<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="primary-menu">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</a>
			</div>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'depth'             => 0,
				'container'         => false,
				'menu_class'        => 'navbar-menu',
				'menu_id'           => 'primary-menu',
				'after'             => "</div>",
				'walker'            => new Navwalker())
			);
			?>
		</nav>
	</header><!-- #masthead -->