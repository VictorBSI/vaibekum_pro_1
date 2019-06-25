<?php 
add_action( 'widgets_init', 'create_map_widget' );
function create_map_widget() {
        register_widget('Google_map_widget');
}
add_action( 'widgets_init', 'create_ho_tro_online' );
function create_ho_tro_online() {
        register_widget('Ho_tro_online_widget');
}
/**
 * Tạo class Thachpham_Widget
 */
class Google_map_widget extends WP_Widget {
 
    /**
     * Thiết lập widget: đặt tên, base ID
     */
    function __construct() {
        parent::__construct (
            'google_map_widget', // id của widget
            'Google Map', // tên của widget
       
            array(
                'description' => 'Thêm bản đồ vào website' // mô tả
            )
        );
    }

    /**
     * Tạo form option cho widget
     */
    function form( $instance ) {
    }

    /**
     * save widget form
     */

    function update( $new_instance, $old_instance ) {

    }

    /**
     * Show widget
     */

    function widget( $args, $instance ) {
        extract($args);
        $title = get_field('title', 'widget_' . $widget_id);
        $location = get_field('local', 'widget_' . $widget_id);
        if(!empty($location)){
            echo $before_widget;
        
            //In tiêu đề widget
            echo $before_title.$title.$after_title;
            
            // Nội dung trong widget
        ?>
            <div class="acf-map">
                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
            </div>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzB4oH-3da_7O2h67LyXCos6kjyqhGxvw"></script>   
            <script type="text/javascript">
                (function($) {

                /*
                *  new_map
                *
                *  This function will render a Google Map onto the selected jQuery element
                *
                *  @type	function
                *  @date	8/11/2013
                *  @since	4.3.0
                *
                *  @param	$el (jQuery element)
                *  @return	n/a
                */

                function new_map( $el ) {
                    
                    // var
                    var $markers = $el.find('.marker');
                    
                    
                    // vars
                    var args = {
                        zoom		: 16,
                        center		: new google.maps.LatLng(0, 0),
                        mapTypeId	: google.maps.MapTypeId.ROADMAP
                    };
                    
                    
                    // create map	        	
                    var map = new google.maps.Map( $el[0], args);
                    
                    
                    // add a markers reference
                    map.markers = [];
                    
                    
                    // add markers
                    $markers.each(function(){
                        
                        add_marker( $(this), map );
                        
                    });
                    
                    
                    // center map
                    center_map( map );
                    
                    
                    // return
                    return map;
                    
                }

                /*
                *  add_marker
                *
                *  This function will add a marker to the selected Google Map
                *
                *  @type	function
                *  @date	8/11/2013
                *  @since	4.3.0
                *
                *  @param	$marker (jQuery element)
                *  @param	map (Google Map object)
                *  @return	n/a
                */

                function add_marker( $marker, map ) {

                    // var
                    var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

                    // create marker
                    var marker = new google.maps.Marker({
                        position	: latlng,
                        map			: map
                    });

                    // add to array
                    map.markers.push( marker );

                    // if marker contains HTML, add it to an infoWindow
                    if( $marker.html() )
                    {
                        // create info window
                        var infowindow = new google.maps.InfoWindow({
                            content		: $marker.html()
                        });

                        // show info window when marker is clicked
                        google.maps.event.addListener(marker, 'click', function() {

                            infowindow.open( map, marker );

                        });
                    }

                }

                /*
                *  center_map
                *
                *  This function will center the map, showing all markers attached to this map
                *
                *  @type	function
                *  @date	8/11/2013
                *  @since	4.3.0
                *
                *  @param	map (Google Map object)
                *  @return	n/a
                */

                function center_map( map ) {

                    // vars
                    var bounds = new google.maps.LatLngBounds();

                    // loop through all markers and create bounds
                    $.each( map.markers, function( i, marker ){

                        var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

                        bounds.extend( latlng );

                    });

                    // only 1 marker?
                    if( map.markers.length == 1 )
                    {
                        // set center of map
                        map.setCenter( bounds.getCenter() );
                        map.setZoom( 16 );
                    }
                    else
                    {
                        // fit to bounds
                        map.fitBounds( bounds );
                    }

                }

                /*
                *  document ready
                *
                *  This function will render each map when the document is ready (page has loaded)
                *
                *  @type	function
                *  @date	8/11/2013
                *  @since	5.0.0
                *
                *  @param	n/a
                *  @return	n/a
                */
                // global var
                var map = null;

                $(document).ready(function(){

                    $('.acf-map').each(function(){

                        // create map
                        map = new_map( $(this) );

                    });

                });

            })(jQuery);
            </script>
        <?php
            // Kết thúc nội dung trong widget
            echo $after_widget;
        }
        
        
    }

}

class Ho_tro_online_widget extends WP_Widget {
 
    /**
     * Thiết lập widget: đặt tên, base ID
     */
    function __construct() {
        parent::__construct (
            'ho_tro_online_widget', // id của widget
            'Hỗ trợ online widget', // tên của widget
       
            array(
                'description' => 'Thêm thông tin hỗ trợ inline vào website' // mô tả
            )
        );
    }

    /**
     * Tạo form option cho widget
     */
    function form( $instance ) {
    }

    /**
     * save widget form
     */

    function update( $new_instance, $old_instance ) {

    }

    /**
     * Show widget
     */

    function widget( $args, $instance ) {
        extract($args);
        $title = get_field('title', 'widget_' . $widget_id);
        $address = get_field('address', 'widget_' . $widget_id);
        $phone_wid = get_field('phone', 'widget_' . $widget_id);
        $phone_suppport = get_field('phone_support', 'widget_' . $widget_id);
        $time_work = get_field('time_work', 'widget_' . $widget_id);

        echo '<div class="support-content">';
            echo $before_widget;

            //In tiêu đề widget
            echo $before_title.$title.$after_title;
            echo '<div class="support_content">';
            // Nội dung trong widget
            echo '<p class="sub-showroom"><a target="_blank" href="https://maps.google.com/?ll='.$address['lat'].','.$address['lng'].'"><i class="fas fa-map-marker-alt"></i>'.$address['address'].'</a></p>';
            echo '<span class="color-support">Kinh Doanh:</span>';
           
            if(!empty( $phone_wid )){
                foreach($phone_wid as $key => $value){
                    echo '<i class="fas fa-phone phone">  '.$value['dien_thoai'].'</i>';
                }
            }
            echo '<span class="color-support">Kỹ Thuật:</span>';
            echo '<i class="fas fa-phone phone">  '.$phone_suppport.'</i>';
            echo '<span class="color-support-time-work">Thời gian làm việc : '. $time_work.'</span>';  
            // Kết thúc nội dung trong widget
            echo $after_widget;
        echo '</div>';
        
        
    }

}
?>