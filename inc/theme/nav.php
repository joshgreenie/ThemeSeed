<?php

function firetoss_nav_setup() {
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'firetoss_seed' ),
    ) );
}
add_action( 'after_setup_theme', 'firetoss_seed_setup' );

