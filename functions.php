function change_posts_per_page( $query ) {
	if ( is_admin() || ! $query->is_main_query() ){
		return;
	}
 
	if ( $query->is_archive() ) {
		$query->set( 'posts_per_page', '5' );
	}
}
add_action( 'pre_get_posts', 'change_posts_per_page' );
