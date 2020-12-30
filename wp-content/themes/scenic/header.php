<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Scenic
 */

?>


<?php
/**  The header from template Scenic */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<body>

<!-- PRE LOADER -->
<div class="preloader">
    <div class="spinner">
        <span class="sk-inner-circle"></span>
    </div>
</div>


<!-- MENU -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <!-- NAVBAR HEADER -->
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <!-- lOGO  bloginfo(): get name of site from admin panel Site Identity-->
            <a href="<?php echo home_url("/")?>" class="navbar-brand"><?php bloginfo('name');?></a>
        </div>

        <!-- MENU LINKS -->
        <!-- <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#about" class="smoothScroll">Studio</a></li>
                <li><a href="#team" class="smoothScroll">Our People</a></li>
                <li><a href="#contact" class="smoothScroll">Let's talk</a></li>
            </ul>
        </div>
        -->
        <!-- get menu from admin panel -->
        <?php
        wp_nav_menu( array(
            'theme_location' => 'header',
            'menu_id'        => '',
            'menu_class'     => 'nav navbar-nav navbar-right',
            'container_class'     => 'collapse navbar-collapse',
        ) );
        ?>

    </div>
</div>


<!-- HOME -->
<section id="home" class="parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-sm-12">
                <!--
                <div class="home-text">
                    <h1>Your Website has a video background!</h1>
                    <p>Feel free to download and use HTML templates from</p>
                    <ul class="section-btn">
                        <a href="#about" class="smoothScroll"><span data-hover="Discover More">Discover More</span></a>
                    </ul>
                </div>
                -->
            </div>

        </div>
    </div>

    <!-- Video -->
    <video controls="" autoplay="" loop="" muted>
        <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</section>






<!-- Old

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'scenic' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
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
			$scenic_description = get_bloginfo( 'description', 'display' );
			if ( $scenic_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $scenic_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'scenic' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</header>

	<div id="content" class="site-content">
-->