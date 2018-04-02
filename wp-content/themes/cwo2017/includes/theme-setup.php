<?php

    /**
     * Add stylesheet to theme
     */
    function theme_styles(){
        // Costum Styles
        wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css');

		//TODO: METZ: Remove Index before Launch
        // Add Backgrounds to Page-Bilder
        if(get_the_ID() === 15){
            $inlineStyle  = "@media screen and (min-width:768px){";
            for($index=0;$index<3;$index++){
                foreach(cwo_getGaleries() as $key => $galery){
                    $currentKey = ($key+1)+$index*3;
                    $inlineStyle .= ".single_gallery:nth-of-type($currentKey) .single_gallery_inner{";
                        $inlineStyle .= "background-image: url(".$galery['thumb'].")";
                    $inlineStyle .= "}";
                }
            }
            $inlineStyle .= "}";
            wp_add_inline_style('styles',$inlineStyle);
        }
    }
    add_action('wp_enqueue_scripts', 'theme_styles');


    /**
     * Add all minified scripts
     */
    function theme_scripts(){
        // Plugins
        wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/build/plugins.min.js',null,null,true);

        //Costum Script
        wp_register_script('scripts', get_template_directory_uri() . '/assets/js/build/scripts.min.js',null,null,true);
        wp_localize_script('scripts','defaults',array(
            'template_directory_uri' => get_template_directory_uri(),
            'template_directory'     => get_template_directory(),
            'home_url'               => home_url(),
            "ajax_url"               => admin_url( 'admin-ajax.php' ),

        ));
        wp_enqueue_script('scripts');
    }

    add_action('wp_enqueue_scripts', 'theme_scripts');

/*
@media screen and (min-width: 768px){
    .single_gallery:nth-of-type(<?=($key+1) + ($index*3);?>) .single_gallery_inner{
        background-image: url(<?=$galery['thumb'];?>);
    }
}*/
