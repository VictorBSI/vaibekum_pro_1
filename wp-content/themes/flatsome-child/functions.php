<?php
// Add custom Theme Functions here
require 'inc/widget.php';
function setup_script_theme()
{
    wp_enqueue_style('app',  get_stylesheet_directory_uri() . '/assets/css/app.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css', array(), NULL);
}
add_action('wp_enqueue_scripts', 'setup_script_theme');

function remove_price_product()
{
    remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
}
add_action('init', 'remove_price_product');

function pc_add_button_chat(){
    echo '<a href="https://m.me/vaibekum.vn" class="btn button primary">Chat với người bán</a>';
}

add_action('add_button_chat', 'pc_add_button_chat',11,1);

function remove_text_add_to_cart(){
    global $product;
    echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
        sprintf( '<div class="box-hover hidden-sm hidden-xs hidden-md">
                    <div class="wrap_add_cart"> 
                    <a href="%s" data-product_id="%s" class="%s" %s><i class="fas fa-shopping-cart"></i></a>
                    </div>
                </div>',
            esc_url( $product->add_to_cart_url() ),
            esc_attr($product->id) ,
            esc_attr('ajax_add_to_cart add_to_cart_button product_type_simple primary btn_add_cart' ),
            isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
        ),
    $product, $args );
}
add_action('add_button_chat', 'remove_text_add_to_cart', 12);

function edit_format_current_dong($price,$product){
    if(is_single()){
        $price = '<span class="product-price-single">'.number_format($product->price,0,'','.').'₫</span>';
    }else{
        $price = '<span class="product-price-catogory">'.number_format($product->price,0,'','.').'₫</span>';
    }
    return $price;
}
add_filter( 'woocommerce_get_price_html', 'edit_format_current_dong', 100, 2 );

function remove_rating_single_product(){
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
}
add_action('init', 'remove_rating_single_product');

function gift_product(){
    $content_gift = 'content';
    if(have_rows($content_gift)){
        echo '<div class="note-promo">';
        while(have_rows($content_gift)): the_row();
            echo sprintf('<a href="%s" target="%s">%s </a>', 
                get_sub_field('link')['url'],
                get_sub_field('link')['target'],
                get_sub_field('link')['title']
            );
        endwhile;
        echo '</div>';
    }
        
}
add_action('woocommerce_single_product_summary', 'gift_product', 25,0);

//add key google map api

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyBhadVHNoXvEt-h6HGNOhgc8MPMVvrlHHc');
}

add_action('acf/init', 'my_acf_init');

function add_breakcrumb(){
    if(!is_front_page()){
        echo '<div class="row row-main">';
        echo '<div class="p-15">';
         if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p id="breadcrumbs">','</p>');
            } 
        echo '</div></div>';
    }
}
add_action('pc_after_header', 'add_breakcrumb');

add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
    function wcs_woo_remove_reviews_tab($tabs) {
    unset($tabs['reviews']);
    return $tabs;
}
/**
 * Rename product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = 'Mô tả';	// Rename the description tab
	
	return $tabs;

}
