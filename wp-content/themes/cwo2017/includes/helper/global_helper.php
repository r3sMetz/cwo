<?php

//Get Image Path from Theme Director
function cwo_theImagePath( $image ) {
	echo get_template_directory_uri().'/assets/img/'.$image;
}

//Get ACF Image
function cwo_theACFImage($id,$field,$size='url'){
	$the_image = get_field($field,$id);
	if($the_image){
		if($size != 'url'){
			if($the_image['sizes'][$size])
				echo $the_image['sizes'][$size];
			else $the_image['url'];

		}

		else
			echo $the_image['url'];
	}
}


//PosttypeQuery
function r3_query($post_type,$orderBy='title',$order='ASC',$postsPerPage = -1) {

    $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => $postsPerPage,
        'orderby'        => $orderBy,
        //'meta_key'       => $orderBy,
        'order'          => $order
    );

    $query = new WP_query($args);

    if($query->have_posts()){
        $return = array();
        while($query->have_posts()){
            $query->the_post();
            $args = null;
            if(function_exists('pll__')){
                $args = pll_get_post(get_the_ID(),pll_current_language());
            }
            $return[] = get_post($args);
        }
        wp_reset_postdata();
        return $return;
    }

    else
        return array();
}

//PosttypeQueryWithMetaKey
function r3_query_meta($post_type,$orderBy='title',$order='ASC',$postsPerPage = -1) {

    $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => $postsPerPage,
        'orderby'        => 'meta_value',
        'meta_key'       => $orderBy,
        'order'          => $order
    );

    $query = new WP_query($args);

    if($query->have_posts()){
        $return = array();
        while($query->have_posts()){
            $query->the_post();
            $args = null;
            if(function_exists('pll__')){
                $args = pll_get_post(get_the_ID(),pll_current_language());
            }
            $return[] = get_post($args);
        }
        wp_reset_postdata();
        return $return;
    }

    else
        return array();
}