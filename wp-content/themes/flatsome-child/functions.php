<?php
// Add custom Theme Functions here

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
