<?php

    /**
     * Add stylesheet to theme
     */
    function theme_styles(){
        //Costum Styles
        wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css');
    }
    add_action('wp_enqueue_scripts', 'theme_styles');


    /**
     * Add all minified scripts
     */
    function theme_scripts(){
        //Plugins
        wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/build/plugins.min.js');

        //Costum Script
        wp_register_script('scripts', get_template_directory_uri() . '/assets/js/build/scripts.min.js');
        wp_localize_script('scripts','defaults',array(
            'template_directory_uri' => get_template_directory_uri(),
            'template_directory' => get_template_directory()
        ));
        wp_enqueue_script('scripts');
    }

    add_action('wp_enqueue_scripts', 'theme_scripts');