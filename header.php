<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="site-header" class="site-header" role="banner" style="<?php echo dt_header_image(); ?>">
	<div class="container">
		<?php if ( has_nav_menu( 'primary-menu' ) ) { ?>
		<button class="dt-nav-toggle" type="button" data-toggle="collapse" data-target="#primary-nav">
			<i class="fa fa-bars"></i>
		</button>
		<?php } ?>
		<div class="site-logo-wrap">
			<?php if ( get_theme_mod( 'logo', false ) ) : ?>
				<div class='site-logo'>
					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'logo', false ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
				</div>
			<?php else : ?>
				<?php
				$desc = get_bloginfo( 'description', 'display' );
				$class = '';
				if (!$desc) {
					$class = 'site-title-no-desc';
				}
				?>
				<hgroup>
					<h1 class='site-title <?php echo $class; ?>'>
						<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
					</h1>
					<h2 class="site-description">
						<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( $desc ); ?>' rel='home'><?php echo $desc; ?></a>
					</h2>
				</hgroup>
			<?php endif; ?>
		</div>
		<?php if ( has_nav_menu( 'primary-menu' ) ) { ?>
		<nav id="primary-nav" class="primary-nav" role="navigation">
			<?php
				wp_nav_menu( array(
					'container'      => false,
					'theme_location' => 'primary-menu',
				) );
			?>
		</nav>
		<?php } ?>
	</div>
</header>