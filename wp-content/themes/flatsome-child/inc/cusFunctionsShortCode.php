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
if (!function_exists('create_shortcode_title')) {
	function create_shortcode_title()
	{
		$xhtml = '';
		$xhtml .= '<div class="container section-head">
						<span class="group-icon">
							<i class="fab fa-dashcube" aria-hidden="true"></i>
						</span>
						<h2>Vải may áo dài</h2>
						<div class="read-more"><span>Xem thêm</span></div>
				 </div>';
		return $xhtml;
	}
	add_shortcode('CONTENT-TITLE-1', 'create_shortcode_title');
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

/* CREATE SHORT CODE BLOG NEWS */
if (!function_exists('create_short_code_blog_news')) {
    function create_short_code_blog_news() {
        $titleNews = get_field('vbk_title_content_news', 'option');
        $xhtml = '';
        $xhtml.= '<div class="body-container-wrapper">
                    <div class="body-container container-fluid">
                        <div class="row-fluid-wrapper row-depth-1 row-number-1">
                            <div class="row-fluid ">
                                <div class="span12 widget-span widget-type-cell page-center content-wrapper container" style="" data-widget-type="cell" data-x="0" data-w="12">
                                    <h1>'.$titleNews.'</h1>
                                    <div class="row-fluid-wrapper row-depth-1 row-number-2">
                                        <div class="row-fluid ">
                                            <div class="span12 widget-span widget-type-cell blog-content" style="" data-widget-type="cell" data-x="0" data-w="8">
                                                <div class="row-fluid-wrapper row-depth-1 row-number-4">
                                                    <div class="row-fluid ">
                                                        <div class="span12 widget-span widget-type-cell " style="" data-widget-type="cell" data-x="0" data-w="12">
                                                            <div class="row-fluid-wrapper row-depth-1 row-number-5">
                                                                <div class="row-fluid ">
                                                                    <div class="span12 widget-span widget-type-custom_widget " style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                                                        <div id="hs_cos_wrapper_module_1540731714361596" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-blog_content" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">';
        $xhtml.=                                                            do_shortcode('[SHOW-CATEGORY]');
        $xhtml.=                                                        '</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        return $xhtml;
    }

    add_shortcode( 'BLOG-NEWS', 'create_short_code_blog_news');
}

/* CREATE SHORTCODE SHOW TAGS */

if(!function_exists('create_shortcode_show_tags')) {
    function create_shortcode_show_tags() {
        $post_tags = get_the_tags();
        if (!empty($post_tags)) {
            $output .= '<div class="title-name-tags">Tags: ';
            foreach ($post_tags as $tag) {
                $output .= '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
            }
            $output .= '</div>';
            return trim($output);
        }
    }
    add_shortcode('SHOW-TAGS', 'create_shortcode_show_tags');
}

/* CREATE SHORTCODE BÀI VIẾT LIÊN QUAN CHI TIẾT BÀI BIẾT */
if(!function_exists('create_shortcode_post_single_blog')) {
    function create_shortcode_post_single_blog() {
        $titleRelated = get_field('vbk_title_related_news','option');
        $numberPostRelated = get_field('vbk_count_post_related','option');
        $categories = get_the_category(get_the_ID());
        if ($categories){
            echo '<div class="mi-related-cat">';
            $category_ids = array();
            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
            $args=array(
                'category__in' => $category_ids,
                'post__not_in' => array(get_the_ID()),
                'posts_per_page' => $numberPostRelated,
            );
            $my_query = new wp_query($args);
            if( $my_query->have_posts() ):
                echo '<h2 class="mi-title-related">'.$titleRelated.'</h2><ul>';
                while ($my_query->have_posts()):$my_query->the_post();
                    ?>
                    <li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
                    <?php
                endwhile;
                echo '</ul>';
            endif; wp_reset_query();
            echo '</div>';
        }
    }
    add_shortcode('POST-LIEN-QUAN', 'create_shortcode_post_single_blog');
}
