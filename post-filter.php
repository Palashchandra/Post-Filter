$current_locale = get_locale();

if ($current_locale === 'en_US') {
    function custom_post_query( $query ) {
    	if ( ! is_admin() && $query->is_main_query() && is_home() ) {
            $meta_query = array(
    			array(
    				'key' => 'language',
    				'value' => 'english',
    			)
    		);
    		$query->set( 'post_type', 'post' );
    		$query->set( 'meta_query', $meta_query );
        }
    }
    add_action( 'pre_get_posts', 'custom_post_query' );
} else {
    function custom_post_query( $query ) {
    	if ( ! is_admin() && $query->is_main_query() && is_home() ) {
            $meta_query = array(
    			array(
    				'key' => 'language',
    				'value' => 'japanese',
    			)
    		);
    		$query->set( 'post_type', 'post' );
    		$query->set( 'meta_query', $meta_query );
        }
    }
    add_action( 'pre_get_posts', 'custom_post_query' );
}
