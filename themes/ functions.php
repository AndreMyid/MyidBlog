

/**
* Function remove ico logo admin.
*
* @return Response
*/
add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );
function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
} /**/

/**
* Function remove notices dashboard admin.
*
* @return Response
*/ /*
function wphidenag() {
	remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action('admin_menu','wphidenag');/**/

/**
* Function remove widgets dashboard admin.
*
* @return Response
*/
// Create the function to use in the action hook
function remove_dashboard_widgets() {
	// Globalize the metaboxes array, this holds all the widgets for wp-admin
	global $wp_meta_boxes;
	// Remove the right now widget
//	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	// Remove the recent comments widget
//	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	// Remove the incoming links widget
//	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	// Remove the plugins widget
//	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	// Remove the quickpress widget
//	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	// Remove the recent drafts widget
//	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	// Remove the primary feed widget
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	// Remove the secondary feed widget
//	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}	// Hoook into the 'wp_dashboard_setup' action to register our function
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' ); /**/

/**
* Function remove help tab dashboard admin.
*
* @return Response
*/ /*
function hide_help() {
	echo '<style type="text/css">
            #contextual-help-link-wrap { display: none !important; }
    </style>';
}
add_action('admin_head', 'hide_help'); /**/

/**
* Function creating custom "Welcome" admin
*
* @return Response
*/ /*
function set_welcome_panel() {
	echo
	'<div class="welcome-panel-content">'
	.'<h3>Selamat Datang di Panel Admin!</h3>'
	.'<p class="about-description">Kami sudah siapkan beberapa tautan untuk membantu Anda mulai:</p>'
	.'<div class="welcome-panel-column-container">'
	
	.'</div>'
	.'</div>';
}
remove_action('welcome_panel','wp_welcome_panel');
add_action('welcome_panel','set_welcome_panel'); /**/
