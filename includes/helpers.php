<?php
/**
 * Länk till asset-mappen
 * @param  string $path T.ex. 'img/logo.png'
 * @return string
 */ 
function asset( $path ) {
    return get_bloginfo( 'template_directory' ) . '/assets/' . $path;
}

/**
 * Returnerar dela-länkar
 * @param  string $url Valfri URL eller den nuvarande sidans
 * @return string
 */
function facebook_share_link( $url = null ) {
    return 'https://www.facebook.com/sharer/sharer.php?u=' . ( ( $url ) ? $url : get_permalink() );
}
function twitter_share_link( $url = null ) {
    return 'https://twitter.com/home?status=' . ( ( $url ) ? $url : get_permalink() );
}
function email_share_link( $url = null ) {
    return 'mailto:?&body=' . ( ( $url ) ? $url : get_permalink() );
}

/**
 * Hjälpfunktion för att skriva ut
 * permalänk baserat på en sidas namn.
 * T.ex. 'om-oss/kontakt'
 *
 * @param $path
 * @return false|string
 */
function get_permalink_by_path ( $path ) {
    return get_permalink( get_page_by_path( $path ) );
}