ob_start
========

Ord&amp;Bilds starttema för WordPress.

## Sköna funktioner

````php
<?php
echo asset( 'img/logo.png' ); // example.com/wp-content/themes/tema/assets/img/logo.png
?>
````

````php
<?php
// Används i wp_enqueue_script/style.
cache_bust( 'css/style.css' );
?>
````

````php
<?php
echo facebook_share_link( $url = null );
echo twitter_share_link( $url = null );
echo email_share_link( $url = null );
?>
````

````php
<?php
echo get_permalink_by_path( 'om-oss/kontakt' );
?>
````

````php
<?php
echo get_thumbnail_url( $post_id, $size = null );
?>
````



