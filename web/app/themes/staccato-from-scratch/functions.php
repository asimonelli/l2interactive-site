<?php
    // Theme Support
    function adv_theme_support(){
        // Nav Menus
        register_nav_menus(array(
           'primary'    => __('Primary Menu'),
            'footer'    => __('Footer Menu')
        ));
        
        add_theme_support('post-thumbnails');
    }
    
    add_action('after_setup_theme', 'adv_theme_support');
    
    // Excerpt Length
    function adv_excerpt_length(){
        return 25;
    }
    
