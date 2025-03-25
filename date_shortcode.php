<?php

/*
Plugin Name: Date and Author Shortcodes
Plugin URI: 
Description: Date and Author shortcodes
Version: 1.2
Author: SearchEngineOp
Author URI: https://searchengineop.com/
License: GPLv2 or later
*/

function shortcode_post_published_date(){
 return get_the_date();
}
add_shortcode( 'post_published', 'shortcode_post_published_date' );

function author_name_shortcode(){
    global $post;
    $page_id = get_queried_object_id();
    $author = get_the_author($page_id);
    return $author;
}
add_shortcode('post_author','author_name_shortcode');