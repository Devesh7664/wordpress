<?php
/*
 Plugin Name: Color Articles Red
 Description: A plugin that colors articles (a, an, the) red.
 Version: 1.0
 Author: Your Name
*/

function color_articles_red($content) {
    $content = preg_replace('/\b(a|an|the)\b/i', '<span style="color:red;">$1</span>', $content);
    return $content;
}
add_filter('the_content', 'color_articles_red');