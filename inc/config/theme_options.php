<?php

function plugin_admin_add_page() {
    //add_menu_page('Theme Options', 'Theme Options', 'manage_options', 'manage_options', 'theme_front_page_settings');
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title' 	=> 'General',
            'menu_title'	=> 'Theme Options',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Banner Settings',
            'menu_title'	=> 'Banner',
            'parent_slug'	=> 'theme-general-settings',
        ));

	    acf_add_options_sub_page(array(
		    'page_title' 	=> 'Header Settings',
		    'menu_title'	=> 'Header',
		    'parent_slug'	=> 'theme-general-settings',
	    ));

	    acf_add_options_sub_page(array(
		    'page_title' 	=> 'Products Settings',
		    'menu_title'	=> 'Products',
		    'parent_slug'	=> 'theme-general-settings',
	    ));
    }
}

add_action('admin_menu', 'plugin_admin_add_page');
