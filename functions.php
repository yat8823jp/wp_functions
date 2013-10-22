function change_posts_per_page( $query ) {
	//メインクエリでなければ
	if ( is_admin() || ! $query->is_main_query() ){
		return;
	}
 
	if ( $query->is_archive() ) {
		$query->set( 'posts_per_page', '12' );
	}
}
add_action( 'pre_get_posts', 'change_posts_per_page' );
test
