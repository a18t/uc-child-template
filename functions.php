<?php

if ( function_exists('register_sidebar') ) { // TODO: change the markup of these widgets? maybe...
    
	register_sidebar(array(
		'name' => 'Sitewide',
        'description' => 'This is the sidebar content that is displayed throughout the site.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
	register_sidebar(array(
		'name' => 'Programs',
        'description' => 'This is the additional sidebar content that is displayed only on the "Programs" page and it\'s ancestors.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
    register_sidebar(array(
        'name' => 'Foot',
        'description' => 'This is content that will displayed in the foot of every page, above the UConn standard footer content.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}

// from WP Codex...
function is_tree( $pid ) {      // $pid = The ID of the page we're looking for pages underneath
    global $post;               // load details about this page

    if ( is_page($pid) )
        return true;            // we're at the page or at a sub page

    $anc = get_post_ancestors( $post->ID );
    foreach ( $anc as $ancestor ) {
        if( is_page() && $ancestor == $pid ) {
            return true;
        }
    }

    return false;               // we aren't at the page, and the page is not an ancestor
};

?>