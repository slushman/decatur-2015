<?php
/**
 * The sidebar for the City Admin Sidebar
 *
 * @package Decatur_2015
 */

if ( ! is_active_sidebar( 'sidebar-cityadmin' ) ) { return; }

?><div id="secondary" class="widget-area sidebar-cityadmin sidebar-content" role="complementary"><?php

	do_action( 'tha_sidebar_top' );

	dynamic_sidebar( 'sidebar-cityadmin' );

	do_action( 'tha_sidebar_bottom' );

?></div><!-- #secondary -->