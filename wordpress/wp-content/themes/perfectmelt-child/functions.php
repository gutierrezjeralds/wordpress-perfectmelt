<?php
/**
 * Created by PhpStorm.
 * User: Jerald
 * Date: 6/28/2018
 * Time: 10:37 AM
 */

function perfectmelt_style_enqueue() {
    wp_enqueue_style("family-Roboto", "https://fonts.googleapis.com/css?family=Roboto", array(), "" , "");
    wp_enqueue_style("bootstrap-css", get_template_directory_uri() . "-child/public/bootstrap/css/bootstrap.css", array(), "4.1.0" , "all");
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), "4.7.0" , "");
    wp_enqueue_style("screen", get_template_directory_uri() . "-child/public/css/stylesheets/sass/screen.css", array(), "1.0.0" , "all");
}

add_action("wp_enqueue_scripts", "perfectmelt_style_enqueue");

function perfectmelt_script_enqueue() {
    wp_enqueue_script("bootstrap-js", get_template_directory_uri()."-child/public/js/jquery-3.3.1.min.js", array(), "3.3.1" , true);
    wp_enqueue_script("bootstrap-js", "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js", array(), "1.14.0" , true);
    wp_enqueue_script("js", get_template_directory_uri()."-child/public/bootstrap/js/bootstrap.js", array(), "4.1.0" , true);

    wp_enqueue_script("isotope", "http://cdn.jsdelivr.net/isotope/1.5.25/jquery.isotope.min.js", array(), "4.1.0" , true);

    wp_enqueue_script("common-js", get_template_directory_uri()."-child/public/js/components/common-compiled.js", array(), "4.1.0" , true);
}

add_action("wp_enqueue_scripts", "perfectmelt_script_enqueue");

function perfectmelt_theme_setup() {
    add_theme_support("menus");

    register_nav_menu("primary", "Primary Header Navigation");

    register_nav_menu("social", "Social Navigation");
}

add_action("init", "perfectmelt_theme_setup");

/* For Static */
function perfectmelt_theme_img_path() {
    if( !defined(theme_img_path)){
        define( 'theme_img_path', get_template_directory_uri() . '-child/public/img' );
    }
}

add_action("init", "perfectmelt_theme_img_path");

/* For Static */
function perfectmelt_upload_path() {
    if( !defined(upload_path)){
        define( 'upload_path', get_home_url() . '/wp-content/uploads' );
    }
}

add_action("init", "perfectmelt_upload_path");

/* For Static */
function perfectmelt_nav_url_path() {
    if( !defined(nav_url_path)){
        define( 'nav_url_path', get_template_directory_uri() . '/' );
    }
}

add_action("init", "perfectmelt_nav_url_path");
