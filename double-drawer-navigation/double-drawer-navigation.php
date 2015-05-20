/**
 * This markup would be found in our themes header.php
 */

<body <?php body_class(); ?>>
<div id="page" class="hfeed site page">

	/* left panel - this div is used when the panel is open so we can click outside the panel and it will close */
	<div class="close-toggle-search"></div>
	/* right panel - this div is used when the panel is open so we can click outside the panel and it will close */
	<div class="close-toggle-menu"></div>

	/* #utility becomes the left panel set off-canvas */
	<section id="utility">
		<div class="utility-inner">
			<?php boston_chefs_dine_search(); ?>
			<div class="social">
				<a href="https://www.facebook.com/BostonChefs" target="_blank"><span class="social-facebook-icon"></span></a>
				<a href="https://twitter.com/BostonChefsNews" target="_blank"><span class="social-twitter-icon"></span></a>
				<a href="https://instagram.com/bostonchefsnews/" target="_blank"><span class="social-instagram-icon"></span></a>
			</div>
		</div>
	</section>
	<header id="masthead" class="site-header" role="banner">
		<div class="masthead-inner">

			/* .js-button-search-activates is used to "activate" the left panel */
			<div class="button-search-activate js-button-search-activate">Activate Search Panel</div>
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>
			/* .js-button-menu-activates is used to "activate" the right panel */
			<div class="button-menu-activate js-button-menu-activate">Activate Menu Panel</div>

			/* #site-navigation becomes the right panel set off-canvas */
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="screen-reader-text skip-link">
					<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'boston_chefs' ); ?>"><?php _e( 'Skip to content', 'boston_chefs' ); ?></a>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'walker' => new Boston_Chefs_Walker() ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .masthead-inner -->
	</header><!-- #masthead -->

	<div id="content" class="site-content content">