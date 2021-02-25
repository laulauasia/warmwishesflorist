<?php

add_action('wp_enqueue_scripts', 'porto_child_css', 1001);
 
// Load CSS
function porto_child_css() {
    // porto child theme styles
    wp_deregister_style( 'styles-child' );
    wp_register_style( 'styles-child', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'styles-child' );

    if (is_rtl()) {
        wp_deregister_style( 'styles-child-rtl' );
        wp_register_style( 'styles-child-rtl', get_stylesheet_directory_uri() . '/style_rtl.css' );
        wp_enqueue_style( 'styles-child-rtl' );
    }
}

//State
// Only one state e.g. PA in US

add_filter( 'woocommerce_states', 'custom_woocommerce_states' );
function custom_woocommerce_states( $states ) {
$states['MY'] = array(
'SGR' => __( 'Selangor', 'woocommerce' ),
'KUL' => __( 'W.P. Kuala Lumpur', 'woocommerce' ),
'PJY' => __( 'W.P. Putrajaya', 'woocommerce' )
);
return $states;
}

//add_action( 'woocommerce_after_order_notes', 'wc_delivery_notice_text', 9 );
//function wc_delivery_notice_text() {
//    echo '<hr /><em>All Orders requires 2 day in advanced. Sorry for the inconvinience.</em>';
//}

add_filter( 'woocommerce_admin_disabled', '__return_true' );
//remove stupid warning


function lw_gpf_exclude_product($excluded, $product_id, $feed_format) {
    // Return TRUE to exclude a product, FALSE to include it, $excluded to use the default behaviour.
    $cats = wp_get_post_terms( $product_id, 'product_cat', array( 'fields' => 'ids' ) );
    if ( in_array( 235, $cats ) ) {
        return TRUE;
    }
    return $excluded;
}
add_filter( 'woocommerce_gpf_exclude_product', 'lw_gpf_exclude_product', 11, 3);