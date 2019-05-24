<?php


function trial_setup()
{
    register_nav_menu('primary', __('Primary menu', 'scaffold'));
}

add_action( 'after_setup_theme', 'trial_setup');