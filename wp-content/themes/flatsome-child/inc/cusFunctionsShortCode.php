<?php
/* CREATE SHORT CODE HỖ TRỢ ONLINE */
if (!function_exists('create_short_code_support_online')) {
	function create_short_code_support_online()
	{
		$address = get_field('vbk_address', 'option');
		$phone = get_field('vbk_phone', 'option');
		$emailHotline = get_field('vbk_email_hotline', 'option');
		$timeWork = get_field('vbk_time_work', 'option');
		$xhtml = '';
		$xhtml .= '<div class="vbk-support">
        					<div class="support" id="support" data-api="smartsupp" data-operation="open">
        						<i class="fa fa-phone"></i>
        						<div class="container-dot-hotline">
        							<div class="animation animation1">
        								<span class="help dot-help-hotline"></span> Hỗ trợ online
        							</div>
        						</div>
        					</div>
        					<div id="contact-infomation-store-load" class="contact-show-info">
        						<i class="icon-bottom"></i>
        						<div class="hotline">Hotline: ' . $phone . '</div>
        						<div><strong>Email:</strong>&nbsp;<strong><a href="mailto:">' . $emailHotline . '</a></strong></div>
        						<div class="support-content">
        							<h4>Vải bé kum</h4>
        							<div class="add-item showroom-item">
        								<div><i class="fa fa-map-marker" title="' . $address . '"></i>' . $address . '</div>
        								<span>Thời gian làm việc: ' . $timeWork . '</span>
        							</div>
        						</div>
        					</div>
        				</div>';
		return $xhtml;
	}
	add_shortcode('SUPPORT-ONLINE', 'create_short_code_support_online');
}

/* CREATE SHORTCODE TITLE */
/** ROW ONE */
if (!function_exists('create_shortcode_title')) {
	function create_shortcode_title()
	{
		$xhtml = '';
		$choose = get_field('vbk_choose_row_one', 'option');
		if($choose == 'Chọn tự nhập'){
			$xhtml .= 	'<div class="container section-head">
							<span class="group-icon">
								<i class="fab fa-dashcube" aria-hidden="true"></i>
							</span>
							<h2>'.get_field('vbk_content_title_row_one', 'option').'</h2>
						</div>';
		}else{
			$category_id = get_field('vbk_choosen_category_one', 'option');
			if(!empty($category_id)){
				$term = get_term_by( 'id', absint( $category_id ), 'product_cat' ); //get category obj
				$name = $term->name;
				$category_link = get_term_link( $category_id, 'product_cat' );
				$xhtml .= '<div class="container section-head">
									<span class="group-icon">
										<i class="fab fa-dashcube" aria-hidden="true"></i>
									</span>
									<h2>'.$name.'</h2>
									<div class="read-more"><a href="'.$category_link.'"><span>Xem thêm</span></a></div>
						</div>';
			}
			
		}
		
		
		return $xhtml;
	}
	add_shortcode('CONTENT-TITLE-1', 'create_shortcode_title');
}
/** ROW TWO */
if (!function_exists('create_shortcode_title_2')) {
	function create_shortcode_title_2()
	{
		$xhtml = '';
		$choose = get_field('vbk_choose_row_two', 'option');
		if($choose == 'Chọn tự nhập'){
			$xhtml .= 	'<div class="container section-head">
							<span class="group-icon">
								<i class="fab fa-dashcube" aria-hidden="true"></i>
							</span>
							<h2>'.get_field('vbk_content_title_row_two', 'option').'</h2>
						</div>';
		}else{
			$category_id = get_field('vbk_choosen_category_two', 'option');
			if(!empty($category_id)){
				$term = get_term_by( 'id', absint( $category_id ), 'product_cat' ); //get category obj
				$name = $term->name;
				$category_link = get_term_link( $category_id, 'product_cat' );
				$xhtml .= '<div class="container section-head">
									<span class="group-icon">
										<i class="fab fa-dashcube" aria-hidden="true"></i>
									</span>
									<h2>'.$name.'</h2>
									<div class="read-more"><a href="'.$category_link.'"><span>Xem thêm</span></a></div>
						</div>';
			}
			
		}
		
		
		return $xhtml;
	}
	add_shortcode('CONTENT-TITLE-2', 'create_shortcode_title_2');
}
/** ROW THREE */
if (!function_exists('create_shortcode_title_3')) {
	function create_shortcode_title_3()
	{
		$xhtml = '';
		$choose = get_field('vbk_choose_row_three', 'option');
		if($choose == 'Chọn tự nhập'){
			$xhtml .= 	'<div class="container section-head">
							<span class="group-icon">
								<i class="fab fa-dashcube" aria-hidden="true"></i>
							</span>
							<h2>'.get_field('vbk_content_title_row_three', 'option').'</h2>
						</div>';
		}else{
			$category_id = get_field('vbk_choosen_category_three', 'option');
			if(!empty($category_id)){
				$term = get_term_by( 'id', absint( $category_id ), 'product_cat' ); //get category obj
				$name = $term->name;
				$category_link = get_term_link( $category_id, 'product_cat' );
				$xhtml .= '<div class="container section-head">
									<span class="group-icon">
										<i class="fab fa-dashcube" aria-hidden="true"></i>
									</span>
									<h2>'.$name.'</h2>
									<div class="read-more"><a href="'.$category_link.'"><span>Xem thêm</span></a></div>
						</div>';
			}
			
		}
		
		
		return $xhtml;
	}
	add_shortcode('CONTENT-TITLE-3', 'create_shortcode_title_3');
}
/** ROW FOUR */
if (!function_exists('create_shortcode_title_4')) {
	function create_shortcode_title_4()
	{
		$xhtml = '';
		$choose = get_field('vbk_choose_row_four', 'option');
		if($choose == 'Chọn tự nhập'){
			$xhtml .= 	'<div class="container section-head">
							<span class="group-icon">
								<i class="fab fa-dashcube" aria-hidden="true"></i>
							</span>
							<h2>'.get_field('vbk_content_title_row_four', 'option').'</h2>
						</div>';
		}else{
			$category_id = get_field('vbk_choosen_category_four', 'option');
			if(!empty($category_id)){
				$term = get_term_by( 'id', absint( $category_id ), 'product_cat' ); //get category obj
				$name = $term->name;
				$category_link = get_term_link( $category_id, 'product_cat' );
				$xhtml .= '<div class="container section-head">
									<span class="group-icon">
										<i class="fab fa-dashcube" aria-hidden="true"></i>
									</span>
									<h2>'.$name.'</h2>
									<div class="read-more"><a href="'.$category_link.'"><span>Xem thêm</span></a></div>
						</div>';
			}
			
		}
		
		
		return $xhtml;
	}
	add_shortcode('CONTENT-TITLE-4', 'create_shortcode_title_4');
}
/** ROW FIVE */
if (!function_exists('create_shortcode_title_5')) {
	function create_shortcode_title_5()
	{
		$xhtml = '';
		$choose = get_field('vbk_choose_row_five', 'option');
		if($choose == 'Chọn tự nhập'){
			$xhtml .= 	'<div class="container section-head">
							<span class="group-icon">
								<i class="fab fa-dashcube" aria-hidden="true"></i>
							</span>
							<h2>'.get_field('vbk_content_title_row_five', 'option').'</h2>
						</div>';
		}else{
			$category_id = get_field('vbk_choosen_category_five', 'option');
			if(!empty($category_id)){
				$term = get_term_by( 'id', absint( $category_id ), 'product_cat' ); //get category obj
				$name = $term->name;
				$category_link = get_term_link( $category_id, 'product_cat' );
				$xhtml .= '<div class="container section-head">
									<span class="group-icon">
										<i class="fab fa-dashcube" aria-hidden="true"></i>
									</span>
									<h2>'.$name.'</h2>
									<div class="read-more"><a href="'.$category_link.'"><span>Xem thêm</span></a></div>
						</div>';
			}
			
		}
		
		
		return $xhtml;
	}
	add_shortcode('CONTENT-TITLE-5', 'create_shortcode_title_5');
}
/* CREATE SHORTCODE ADD TO CART */

function pc_create_add_to_cart()
{
	global $product;
	$pid = $product->get_id();	?>
	<div class="wrap_add_cart" title="Cho vào giỏ hàng"><a href="<?php echo do_shortcode('[add_to_cart_url id=' . $pid . ']') ?>"  data-product_id="<?php echo $pid; ?>"
    class="ajax_add_to_cart add_to_cart_button product_type_simple"><i class="fas fa-shopping-cart"></i></a></div>
<?php
}
add_shortcode('ADD_CART_PC', 'pc_create_add_to_cart');
