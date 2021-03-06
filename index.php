<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Decatur_2015
 */

get_header();

?><div class="wrap wrap-content sidebar-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"><?php

		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) {

				?><header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header><?php

			}

			do_action( 'tha_content_while_before' );

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				do_action( 'tha_entry_before' );

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'excerpt' );

				do_action( 'tha_entry_after' );

			endwhile;

			do_action( 'tha_content_while_after' );

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;

		?></main><!-- #main -->
	</div><!-- #primary -->
	<div class="sidebars"><?php

		do_action( 'tha_sidebars_before' );

		get_sidebar();

		do_action( 'tha_sidebars_after' );

	?></div><?php

get_footer();