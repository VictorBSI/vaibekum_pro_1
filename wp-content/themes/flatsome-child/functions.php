<?php
// Add custom Theme Functions here
require 'inc/widget.php';
require 'inc/cusFunctionsShortCode.php';
require 'inc/reg_sidebar.php';

/** UPDATE JQUERY VERSION */

function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js", array(), NULL );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

function setup_script_theme()
{
    wp_enqueue_style('app-js', get_stylesheet_directory_uri() . '/assets/js/main.js' , array(), NULL);
    wp_enqueue_style('app-css',  get_stylesheet_directory_uri() . '/assets/css/app.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), NULL);
    wp_enqueue_style('owl-carousel-default', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(), NULL);
    wp_enqueue_script('owl-carousel-script', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), NULL);
    wp_enqueue_style('awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css', array(), NULL);

}
add_action('wp_enqueue_scripts', 'setup_script_theme');




function vaibekum_load_theme_scripts() {
	wp_enqueue_script('vaibekum.js',get_stylesheet_directory_uri().'/js/vaibekum.js' , array(), wp_get_theme()->get('Version'));
}
add_action( 'wp_enqueue_scripts', 'vaibekum_load_theme_scripts', 30 );

function remove_price_product()
{
    remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
}
add_action('init', 'remove_price_product');

function pc_add_button_chat(){
    $mg = get_field('vbk_messenger_chat', 'option');
    echo '<a href="'.$mg.'" class="btn button primary">Chat với người bán</a>';
}

add_action('add_button_chat', 'pc_add_button_chat',11,1);

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

    acf_update_setting('google_api_key', 'AIzaSyBzB4oH-3da_7O2h67LyXCos6kjyqhGxvw');
}
add_action('acf/init', 'my_acf_init');

function create_short_code_add_breadcrumbs(){
    if(!is_front_page()){
        echo '<div class="row row-main">';
        echo '<div class="p-15">';
         if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p id="breadcrumbs">','</p>');
            }
        echo '</div></div>';
    }
}
add_shortcode('CUSTOMMER-YOAST-BREADCRUMB', 'create_short_code_add_breadcrumbs');

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

// // define the woocommerce_output_related_products_args callback
// function filter_woocommerce_output_related_products_args( $args ) {
//     // make filter magic happen here...
//     $args = array(
//         'posts_per_page' => 5,
//         'columns' => 8,
//         'orderby' => 'rand'
//    );
//     return $args;
// };

// add the filter
// add_filter( 'woocommerce_output_related_products_args', 'filter_woocommerce_output_related_products_args', 10, 1 );

/* THEME OPTIONS */
if(function_exists('acf_add_options_page')){
    acf_add_options_page(array(
        'page_title' 	=> 'Thiết lập giao diện',
		'menu_title'	=> 'Thiết lập giao diện',
        'menu_slug' 	=> 'theme-settings',
        'capability'	=> 'edit_posts',
		'redirect'	=> false,
    ));
};
if(function_exists('show_image_feedback')){
    $num_image = get_field('vbk_number_feedback', 'option');
    echo $num_image;
}


//custom display in stock
function woocommerce_get_custom_availability( $data, $product ) {
    $html = '<span class="stock-brand-title"><strong><i class="fas fa-check-square"></i> Tình trạng: </strong></span>';
    switch( $product->stock_status ) {
        case 'instock':
            $data = array( 'availability' => __( $html . 'Còn hàng', 'woocommerce' ), 'class' => 'in-stock' );
        break;
        case 'outofstock':
            $data = array( 'availability' => __( $html. 'Hết hàng', 'woocommerce' ), 'class' => 'out-of-stock' );
        break;
        case 'onrequest':
            $data = array( 'availability' => __( $html. 'Available to Order', 'woocommerce' ), 'class' => 'on-request' );
        break;
    }
    return $data;
}
add_action('woocommerce_get_availability', 'woocommerce_get_custom_availability', 10, 2);

/* THAY ĐỔI TIỀN VIỆT NAM ĐỒNG */
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
function change_existing_currency_symbol($currency_symbol, $currency) {
    switch ($currency) {
        case 'VND':
            $currency_symbol = ' đ';
            break;
    }
    return $currency_symbol;
}

/* THAY ĐỔI 0đ THÀNH LIÊN HỆ*/
function vbk_wc_custom_get_price_html( $price, $product ) {
    if ( $product->get_price() == 0 ) {
        if ( $product->is_on_sale() && $product->get_regular_price() ) {
            $regular_price = wc_get_price_to_display( $product, array( 'qty' => 1, 'price' => $product->get_regular_price() ) );

            $price = wc_format_price_range( $regular_price, __( 'Free!', 'woocommerce' ) );
        } else {
            $price = '<span class="amount">' . __( 'Liên hệ', 'woocommerce' ) . '</span>';
        }
    }
    return $price;
}
add_filter( 'woocommerce_get_price_html', 'vbk_wc_custom_get_price_html', 10, 2 );

/* DỊCH TỪ WOOCOMMERCE CHUNG */
function flatsome_mayphotocomvn_text_strings( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
        case '₫' :
            $translated_text = __( ' đ', 'woocommerce' );
            break;
        case 'Posts found' :
            $translated_text = __( 'Bài viết tìm thấy', 'woocommerce' );
            break;
        case 'View cart' :
            $translated_text = __( 'Xem giỏ hàng', 'woocommerce' );
            break;
        case 'Checkout' :
            $translated_text = __( 'Thanh toán', 'woocommerce' );
            break;
        case 'Search' :
            $translated_text = __( 'Tìm kiếm sản phẩm ...', 'woocommerce' );
            break;
        case 'Description' :
            $translated_text = __( 'Chi tiết', 'woocommerce' );
            break;
        case 'Be the first to review' :
            $translated_text = __( 'Hãy là người đầu tiên nhận xét', 'woocommerce' );
            break;
        case 'Cart' :
            $translated_text = __( 'Giỏ hàng', 'woocommerce' );
            break;
        case 'Subtotal' :
            $translated_text = __( 'Tổng cộng', 'woocommerce' );
            break;
        case 'Product' :
            $translated_text = __( 'Sản phẩm', 'woocommerce' );
            break;
        case 'Price' :
            $translated_text = __( 'Giá', 'woocommerce' );
            break;
        case 'Quantity' :
            $translated_text = __( 'Số lượng', 'woocommerce' );
            break;
        case 'Total' :
            $translated_text = __( 'Tổng cộng', 'woocommerce' );
            break;
        case 'Cart totals' :
            $translated_text = __( 'Tổng số lượng', 'woocommerce' );
            break;
        case 'Proceed to checkout' :
            $translated_text = __( 'Tiến hành thanh toán', 'woocommerce' );
            break;
        case 'Coupon' :
            $translated_text = __( 'Mã giảm giá', 'woocommerce' );
            break;
        case 'Coupon code' :
            $translated_text = __( 'Mã ưu đãi', 'woocommerce' );
            break;
        case 'Apply coupon' :
            $translated_text = __( 'Áp dụng mã ưu đãi', 'woocommerce' );
            break;
        case '← Continue shopping' :
            $translated_text = __( 'Tiếp tục xem sản phẩm', 'woocommerce' );
            break;
        case 'Update cart' :
            $translated_text = __( 'Cập nhật giỏ hàng', 'woocommerce' );
            break;
        case 'Checkout' :
            $translated_text = __( 'Thanh toán', 'woocommerce' );
            break;
        case 'Billing details' :
            $translated_text = __( 'Thông tin thanh toán', 'woocommerce' );
            break;
        case 'Additional information' :
            $translated_text = __( 'Thông tin bổ sung', 'woocommerce' );
            break;
        case 'Your order' :
            $translated_text = __( 'Đơn hàng của bạn', 'woocommerce' );
            break;
        case 'Place order' :
            $translated_text = __( 'Đặt hàng', 'woocommerce' );
            break;
        case 'Shopping Cart' :
            $translated_text = __( 'Giỏ hàng', 'woocommerce' );
            break;
        case 'Checkout details' :
            $translated_text = __( 'Thanh toán', 'woocommerce' );
            break;
        case 'Order Complete' :
            $translated_text = __( 'Hoàn thành', 'woocommerce' );
            break;
        case 'Return to shop' :
            $translated_text = __( 'Quay trở lại cửa hàng', 'woocommerce' );
            break;
        case 'Tiếp tục xem sản phẩm' :
            $translated_text = __( 'Quay lại xem SP', 'woocommerce' );
            break;
        case 'We look forward to fulfilling your order soon.' :
            $translated_text = __( '', 'woocommerce' );
            break;
        case 'Cảm ơn đã đặt hàng. Đơn hàng sẽ bị tạm giữ cho đến khi chúng tôi xác nhận thanh toán hoàn thành. Trong thời gian chờ đợi, đây là lời nhắc về những gì bạn đã đặt hàng:' :
            $translated_text = __( 'Cám ơn bạn đã đặt hàng, vui lòng xem lại thông tin bên dưới kỹ càng trước khi thanh toán.', 'woocommerce' );
            break;
        case 'Địa chỉ thanh toán' :
            $translated_text = __( 'Địa chỉ giao hàng', 'woocommerce' );
            break;
        case 'Send email price' :
            $translated_text = __( 'Gởi báo giá', 'woocommerce' );
            break;
        case 'Tìm kiếm' :
            $translated_text = __( 'Tìm kiếm sản phẩm ...', 'woocommerce' );
            break;
        case 'No products in the cart.' :
            $translated_text = __( 'Chưa có sản phẩm trong giỏ hàng.', 'woocommerce' );
            break;
        case 'Related products' :
            $translated_text = __('Sản phẩm cùng loại', 'woocommerce');
            break;
        case 'No products were found matching your selection.' :
            $translated_text = __('Không có sản phẩm nào trong danh mục này.', 'woocommerce');
            break;
        case 'Out of stock' :
            $translated_text = __('Hết hàng', 'woocommerce');
            break;
    }
    return $translated_text;
}
add_filter( 'gettext', 'flatsome_mayphotocomvn_text_strings', 20, 3 );

/* DỊCH TỪ WOOCOMMERCE KHÔNG DỊCH ĐƯỢC */
function ra_change_translate_text_multiple( $translated ) {
    $text = array(
        'Subtotal' => 'Tổng cộng',
        'Tổng' => 'Thành tiền',
        'Thành tiền cộng' => 'Tổng cộng',
        'Thành tiền số phụ:' => 'Tổng cộng :',
        'Tổng cộng:' => 'Thành tiền :',
        'Cám ơn!' => '',
        'Cảm ơn đã đọc.' => '',
        'Thuế VAT:' => 'thuế VAT :',
        'Lưu ý:' => 'Lưu ý :',
        'Note:' => 'Lưu ý :',
    );
    $translated = str_ireplace( array_keys($text), $text, $translated );
    return $translated;
}
add_filter( 'gettext', 'ra_change_translate_text_multiple', 20 );

/* SỬ DỤNG STMP GMAIL */
add_action( 'phpmailer_init', function( $phpmailer ) {
    $contentText = get_field('vbk_from_name_text_gmail','option');
    $userName = get_field('vbk_username_gmail','option');
    $passWord = get_field('vbk_password_app_gmail','option');
    if ( !is_object( $phpmailer ) )
    $phpmailer = (object) $phpmailer;
    $phpmailer->Mailer     = 'smtp';
    $phpmailer->Host       = 'smtp.gmail.com';
    $phpmailer->SMTPAuth   = 1;
    $phpmailer->Port       = 587;
    $phpmailer->Username   = ''.$userName.'';
    $phpmailer->Password   = ''.$passWord.'';
    $phpmailer->SMTPSecure = 'TLS';
    $phpmailer->From       = ''.$userName.'';
    $phpmailer->FromName   = ''.$contentText.'';
});
