<?php

/**
 * Wrappar YouTube-embeds med div.embed.
 */
function wrap_embed_with_div($html, $url, $attr)
{
    return '<div class="embed">' . $html . '</div>';
}
add_filter('embed_oembed_html', 'wrap_embed_with_div', 10, 3);

/**
 * Lägg till extra classer på body
 */
function add_body_classes( $classes ) {
    return $classes;
}
add_filter( 'body_class', 'add_body_classes' );