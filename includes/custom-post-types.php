<?php
function create_post_types () {
	/*register_post_type('sample_name', array(
		'labels' => array(
			'name' => 'sample_name',
			'singular_name' => 'sample_name'
		),
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail')
	));*/
}
add_action( 'init', 'create_post_types' );