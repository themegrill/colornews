<?php
/**
 * Contains all the functions related to sidebar and widget.
 *
 * @package ThemeGrill
 * @subpackage ColorNews
 * @since ColorNews 1.0
 */

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function colornews_widgets_init() {
   // registering right sidebar
   register_sidebar( array(
      'name'          => esc_html__( 'Right Sidebar', 'colornews' ),
      'id'            => 'colornews_right_sidebar',
      'description'   => __( 'Shows widgets at the Right Sidebar.', 'colornews' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title"><span>',
      'after_title'   => '</span></span></h3>',
   ) );

   // registering left sidebar
   register_sidebar( array(
      'name'          => esc_html__( 'Left Sidebar', 'colornews' ),
      'id'            => 'colornews_left_sidebar',
      'description'   => __( 'Shows widgets at the Left Sidebar.', 'colornews' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title"><span>',
      'after_title'   => '</span></span></h3>',
   ) );

   // registering header sidebar
   register_sidebar( array(
      'name'          => esc_html__( 'Header Sidebar', 'colornews' ),
      'id'            => 'colornews_header_sidebar',
      'description'   => __( 'Shows widgets in the Header Section just above the main navigation menu.', 'colornews' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title"><span>',
      'after_title'   => '</span></span></h3>',
   ) );

   // registering contact page sidebar
   register_sidebar( array(
      'name'          => esc_html__( 'Contact Page Sidebar', 'colornews' ),
      'id'            => 'colornews_contact_page_sidebar',
      'description'   => __( 'Shows widgets in the Contact Page sidebar.', 'colornews' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title"><span>',
      'after_title'   => '</span></span></h3>',
   ) );

   // registering 404 page sidebar
   register_sidebar( array(
      'name'          => esc_html__( '404 Error Page Sidebar', 'colornews' ),
      'id'            => 'colornews_error_404_page_sidebar',
      'description'   => __( 'Shows widgets in the 404 Error Page sidebar.', 'colornews' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title"><span>',
      'after_title'   => '</span></span></h3>',
   ) );

   // registering front page slider area
   register_sidebar( array(
      'name'          => esc_html__( 'Front Page: Slider Area', 'colornews' ),
      'id'            => 'colornews_front_slider_area',
      'description'   => __( 'Shows widgets in the Front Page: Slider Area. Suitable for TG: Featured Posts (Style 1) widget.', 'colornews' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title"><span>',
      'after_title'   => '</span></span></h3>',
   ) );

   // registering front page content top section
   register_sidebar( array(
      'name'          => esc_html__( 'Front Page: Content Top Section', 'colornews' ),
      'id'            => 'colornews_front_content_top_section',
      'description'   => __( 'Shows widgets in the Front Page: Content Top Section.', 'colornews' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title"><span>',
      'after_title'   => '</span></span></h3>',
   ) );

   // registering front page content left section
   register_sidebar( array(
      'name'          => esc_html__( 'Front Page: Content Middle Left Section', 'colornews' ),
      'id'            => 'colornews_front_content_left_section',
      'description'   => __( 'Shows widgets in the Front Page: Content Middle Left Section.', 'colornews' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title"><span>',
      'after_title'   => '</span></span></h3>',
   ) );

   // registering front page content right section
   register_sidebar( array(
      'name'          => esc_html__( 'Front Page: Content Middle Right Section', 'colornews' ),
      'id'            => 'colornews_front_content_right_section',
      'description'   => __( 'Shows widgets in the Front Page: Content Middle Right Section.', 'colornews' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title"><span>',
      'after_title'   => '</span></span></h3>',
   ) );

   // registering front page content top section
   register_sidebar( array(
      'name'          => esc_html__( 'Front Page: Content Bottom Section', 'colornews' ),
      'id'            => 'colornews_front_content_bottom_section',
      'description'   => __( 'Shows widgets in the Front Page: Content Bottom Section.', 'colornews' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title"><span>',
      'after_title'   => '</span></span></h3>',
   ) );

   // registering footer advertisement area
   register_sidebar( array(
      'name'          => esc_html__( 'Advertisement Above Footer', 'colornews' ),
      'id'            => 'colornews_advertisement_above_footer',
      'description'   => __( 'Shows widgets just above the Footer Area.', 'colornews' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title"><span>',
      'after_title'   => '</span></span></h3>',
   ) );

   // registering footer advertisement area
   register_sidebar( array(
      'name'          => esc_html__( 'Footer Sidebar One', 'colornews' ),
      'id'            => 'colornews_footer_sidebar_one',
      'description'   => __( 'Shows widgets in the Footer Sidebar One.', 'colornews' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title"><span>',
      'after_title'   => '</span></span></h3>',
   ) );

   // registering footer advertisement area
   register_sidebar( array(
      'name'          => esc_html__( 'Footer Sidebar Two', 'colornews' ),
      'id'            => 'colornews_footer_sidebar_two',
      'description'   => __( 'Shows widgets in the Footer Sidebar Two.', 'colornews' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title"><span>',
      'after_title'   => '</span></span></h3>',
   ) );

   // registering footer advertisement area
   register_sidebar( array(
      'name'          => esc_html__( 'Footer Sidebar Three', 'colornews' ),
      'id'            => 'colornews_footer_sidebar_three',
      'description'   => __( 'Shows widgets in the Footer Sidebar Three.', 'colornews' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title"><span>',
      'after_title'   => '</span></span></h3>',
   ) );

   // our custom made widgets
   register_widget( "colornews_728x90_advertisement_widget" );
   register_widget( "colornews_300x250_advertisement_widget" );
   register_widget( "colornews_125x125_advertisement_widget" );
   // featured posts widgets
   register_widget( "colornews_featured_post_style_one_widget" );
   register_widget( "colornews_featured_post_style_two_widget" );
   register_widget( "colornews_featured_post_style_three_widget" );
   register_widget( "colornews_featured_post_style_four_widget" );
   register_widget( "colornews_random_posts_widget" );
   register_widget( "colornews_popular_posts_widget" );
   register_widget( "colornews_custom_tag_widget" );
}

add_action( 'widgets_init', 'colornews_widgets_init' );

/****************************************************************************************/

/**
 * 728x90 Advertisement Ads Widget
 */
class colornews_728x90_advertisement_widget extends WP_Widget {

   function __construct() {
      $widget_ops = array( 'classname' => 'widget_728x90_advertisement colornews_custom_widget', 'description' => __( 'Add your 728x90 Advertisement here', 'colornews') );
      $control_ops = array( 'width' => 200, 'height' =>250 );
      parent::__construct( false,$name= __( 'TG: 728x90 Advertisement', 'colornews' ),$widget_ops);
   }

   function form( $instance ) {
      $instance = wp_parse_args( (array) $instance, array( 'title' => '', '728x90_image_url' => '', '728x90_image_link' => '') );
      $title = esc_attr( $instance[ 'title' ] );

      $image_link = '728x90_image_link';
      $image_url = '728x90_image_url';

      $instance[ $image_link ] = esc_url( $instance[ $image_link ] );
      $instance[ $image_url ] = esc_url( $instance[ $image_url ] );

      ?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:', 'colornews' ); ?></label>
         <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
      <label><?php _e( 'Add your 728x90 Advertisement Image Here', 'colornews' ); ?></label>
      <p><label for="<?php echo $this->get_field_id( $image_link ); ?>"> <?php _e( '728x90 Advertisement Image Link:', 'colornews' ); ?></label>
         <input type="text" class="widefat" id="<?php echo $this->get_field_id( $image_link ); ?>" name="<?php echo $this->get_field_name( $image_link ); ?>" value="<?php echo $instance[$image_link]; ?>"/></p>
      <p>
         <label for="<?php echo $this->get_field_id( $image_url ); ?>"> <?php _e( '728x90 Advertisement Image:', 'colornews' ); ?></label>
         <?php
         if ( $instance[ $image_url ] != '' ) :
            echo '<img id="' . $this->get_field_id( $instance[ $image_url ] . 'preview') . '"src="' . $instance[ $image_url ] . '"style="max-width:250px;" /><br />';
         endif;
         ?>
         <input type="text" class="widefat custom_media_url" id="<?php echo $this->get_field_id( $image_url ); ?>" name="<?php echo $this->get_field_name( $image_url ); ?>" value="<?php echo $instance[$image_url]; ?>" style="margin-top:5px;"/>
         <input type="button" class="button button-primary custom_media_button" id="custom_media_button" name="<?php echo $this->get_field_name( $image_url ); ?>" value="<?php _e( 'Upload Image', 'colornews' ); ?>" style="margin-top:5px; margin-right: 30px;" onclick="imageWidget.uploader( '<?php echo $this->get_field_id( $image_url ); ?>' ); return false;"/>
      </p>
   <?php }

   function update( $new_instance, $old_instance ) {
      $instance = $old_instance;
      $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );

      $image_link = '728x90_image_link';
      $image_url = '728x90_image_url';

      $instance[ $image_link ] = esc_url_raw( $new_instance[ $image_link ] );
      $instance[ $image_url ] = esc_url_raw( $new_instance[ $image_url ] );

      return $instance;
   }

   function widget( $args, $instance ) {
      extract( $args );
      extract( $instance );

      $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
      $image_link = '728x90_image_link';
      $image_url = '728x90_image_url';

      $image_link = isset( $instance[ $image_link ] ) ? $instance[ $image_link ] : '';
      $image_url = isset( $instance[ $image_url ] ) ? $instance[ $image_url ] : '';

      echo $before_widget; ?>

      <div class="magazine-block-large-ad clearfix">
         <div class="tg-block-wrapper">
            <?php if ( !empty( $title ) ) {
               echo $before_title. esc_html( $title ) . $after_title;
            }
            $output = '';
            if ( !empty( $image_url ) ) {
               $output .= '<div class="ad-image">';
               if ( !empty( $image_link ) ) {
               $output .= '<a href="'.$image_link.'" target="_blank"><img src="'.$image_url.'" width="728" height="90" rel="nofollow"></a>';
               } else {
                  $output .= '<img src="'.$image_url.'" width="728" height="90" rel="nofollow">';
               }
               $output .= '</div>';
               echo $output;
            } ?>
         </div>
      </div>
      <?php
      echo $after_widget;
   }
}

/****************************************************************************************/

/**
 * 300x250 Advertisement Ads Widget
 */
class colornews_300x250_advertisement_widget extends WP_Widget {

   function __construct() {
      $widget_ops = array( 'classname' => 'widget_300x250_advertisement colornews_custom_widget', 'description' => __( 'Add your 300x250 Advertisement here', 'colornews') );
      $control_ops = array( 'width' => 200, 'height' =>250 );
      parent::__construct( false,$name= __( 'TG: 300x250 Advertisement', 'colornews' ),$widget_ops);
   }

   function form( $instance ) {
      $instance = wp_parse_args( (array) $instance, array( 'title' => '', '300x250_image_url' => '', '300x250_image_link' => '') );
      $title = esc_attr( $instance[ 'title' ] );

      $image_link = '300x250_image_link';
      $image_url = '300x250_image_url';

      $instance[ $image_link ] = esc_url( $instance[ $image_link ] );
      $instance[ $image_url ] = esc_url( $instance[ $image_url ] );
      ?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:', 'colornews' ); ?></label>
         <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
      <label><?php _e( 'Add your Advertisement 300x250 Image Here', 'colornews' ); ?></label>
      <p><label for="<?php echo $this->get_field_id( $image_link ); ?>"> <?php _e( '300x250 Advertisement Image Link:', 'colornews' ); ?></label>
         <input type="text" class="widefat" id="<?php echo $this->get_field_id( $image_link ); ?>" name="<?php echo $this->get_field_name( $image_link ); ?>" value="<?php echo $instance[$image_link]; ?>"/></p>
      <p>
         <label for="<?php echo $this->get_field_id( $image_url ); ?>"> <?php _e( '300x250 Advertisement Image:', 'colornews' ); ?></label>
         <?php
         if ( $instance[ $image_url ] != '' ) :
            echo '<img id="' . $this->get_field_id( $instance[ $image_url ] . 'preview') . '"src="' . $instance[ $image_url ] . '"style="max-width:250px;" /><br />';
         endif;
         ?>
         <input type="text" class="widefat custom_media_url" id="<?php echo $this->get_field_id( $image_url ); ?>" name="<?php echo $this->get_field_name( $image_url ); ?>" value="<?php echo $instance[$image_url]; ?>" style="margin-top:5px;"/>
         <input type="button" class="button button-primary custom_media_button" id="custom_media_button" name="<?php echo $this->get_field_name( $image_url ); ?>" value="<?php _e( 'Upload Image', 'colornews' ); ?>" style="margin-top:5px; margin-right: 30px;" onclick="imageWidget.uploader( '<?php echo $this->get_field_id( $image_url ); ?>' ); return false;"/>
      </p>

   <?php }
   function update( $new_instance, $old_instance ) {
      $instance = $old_instance;
      $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );

      $image_link = '300x250_image_link';
      $image_url = '300x250_image_url';

      $instance[ $image_link ] = esc_url_raw( $new_instance[ $image_link ] );
      $instance[ $image_url ] = esc_url_raw( $new_instance[ $image_url ] );

      return $instance;
   }

   function widget( $args, $instance ) {
      extract( $args );
      extract( $instance );

      $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
      $image_link = '300x250_image_link';
      $image_url = '300x250_image_url';

      $image_link = isset( $instance[ $image_link ] ) ? $instance[ $image_link ] : '';
      $image_url = isset( $instance[ $image_url ] ) ? $instance[ $image_url ] : '';

      echo $before_widget; ?>

      <div class="magazine-block-medium-ad clearfix">
         <div class="tg-block-wrapper">
            <?php if ( !empty( $title ) ) {
               echo $before_title. esc_html( $title ) . $after_title;
            }
            $output = '';
            if ( !empty( $image_url ) ) {
               $output .= '<div class="ad-image">';
               if ( !empty( $image_link ) ) {
               $output .= '<a href="'.$image_link.'" target="_blank"><img src="'.$image_url.'" width="300" height="250" rel="nofollow"></a>';
               } else {
                  $output .= '<img src="'.$image_url.'" width="300" height="250" rel="nofollow">';
               }
               $output .= '</div>';
               echo $output;
            } ?>
         </div>
      </div>
      <?php
      echo $after_widget;
   }
}

/****************************************************************************************/

/**
 * 125x125 Advertisement Ads Widget
 */
class colornews_125x125_advertisement_widget extends WP_Widget {

   function __construct() {
      $widget_ops = array( 'classname' => 'widget_125x125_advertisement colornews_custom_widget', 'description' => __( 'Add your 125x125 Advertisement here', 'colornews') );
      $control_ops = array( 'width' => 200, 'height' =>250 );
      parent::__construct( false,$name= __( 'TG: 125x125 Advertisement', 'colornews' ),$widget_ops);
   }

   function form( $instance ) {
      $instance = wp_parse_args( (array) $instance, array( 'title' => '', '125x125_image_url_1' => '', '125x125_image_url_2' => '', '125x125_image_url_3' => '', '125x125_image_url_4' => '', '125x125_image_url_5' => '', '125x125_image_url_6' => '', '125x125_image_link_1' => '', '125x125_image_link_2' => '', '125x125_image_link_3' => '', '125x125_image_link_4' => '', '125x125_image_link_5' => '', '125x125_image_link_6' => '') );
      $title = esc_attr( $instance[ 'title' ] );
      for ( $i = 1; $i < 7; $i++ ) {
         $image_link = '125x125_image_link_'.$i;
         $image_url = '125x125_image_url_'.$i;

         $instance[ $image_link ] = esc_url( $instance[ $image_link ] );
         $instance[ $image_url ] = esc_url( $instance[ $image_url ] );
      }
      ?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:', 'colornews' ); ?></label>
         <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
      <label><?php _e( 'Add your 125x125 Advertisement Images Here', 'colornews' ); ?></label>
      <?php
      for ( $i = 1; $i < 7 ; $i++ ) {
         $image_link = '125x125_image_link_'.$i;
         $image_url = '125x125_image_url_'.$i;
      ?>
      <p><label for="<?php echo $this->get_field_id( $image_link ); ?>"> <?php _e( '125x125 Advertisement Image Link ', 'colornews' ); echo $i; ?></label>
         <input type="text" class="widefat" id="<?php echo $this->get_field_id( $image_link ); ?>" name="<?php echo $this->get_field_name( $image_link ); ?>" value="<?php echo $instance[$image_link]; ?>"/></p>
      <p>
         <label for="<?php echo $this->get_field_id( $image_url ); ?>"> <?php _e( '125x125 Advertisement Image ', 'colornews' ); echo $i; ?></label>
         <?php
         if ( $instance[$image_url]  != '' ) :
            echo '<img id="' . $this->get_field_id( $instance[$image_url] . 'preview') . '"src="' . $instance[$image_url] . '"style="max-width:250px;" /><br />';
         endif;
         ?>
         <input type="text" class="widefat custom_media_url" id="<?php echo $this->get_field_id( $image_url ); ?>" name="<?php echo $this->get_field_name( $image_url ); ?>" value="<?php echo $instance[$image_url]; ?>" style="margin-top:5px;"/>
         <input type="button" class="button button-primary custom_media_button" id="custom_media_button" name="<?php echo $this->get_field_name( $image_url ); ?>" value="<?php _e( 'Upload Image', 'colornews' ); ?>" style="margin-top:5px; margin-right: 30px;" onclick="imageWidget.uploader( '<?php echo $this->get_field_id( $image_url ); ?>' ); return false;"/>
      </p>
      <?php } ?>

   <?php }
   function update( $new_instance, $old_instance ) {
      $instance = $old_instance;
      $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
      for ( $i = 1; $i < 7; $i++ ) {
         $image_link = '125x125_image_link_'.$i;
         $image_url = '125x125_image_url_'.$i;

         $instance[ $image_link ] = esc_url_raw( $new_instance[ $image_link ] );
         $instance[ $image_url ] = esc_url_raw( $new_instance[ $image_url ] );
      }

      return $instance;
   }

   function widget( $args, $instance ) {
      extract( $args );
      extract( $instance );

      $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
      $image_array = array();
      $link_array = array();

      for ( $i = 1; $i < 7; $i++ ) {
         $image_link = '125x125_image_link_'.$i;
         $image_url = '125x125_image_url_'.$i;

         $image_link = isset( $instance[ $image_link ] ) ? $instance[ $image_link ] : '';
         $image_url = isset( $instance[ $image_url ] ) ? $instance[ $image_url ] : '';
         if( !empty( $image_link ) ) array_push( $link_array, $image_link );
         if( !empty( $image_url ) ) array_push( $image_array, $image_url );
      }
      echo $before_widget; ?>

      <div class="magazine-block-small-ad clearfix">
         <div class="tg-block-wrapper">
            <?php if ( !empty( $title ) ) {
               echo $before_title. esc_html( $title ) . $after_title;
            }
            $output = '';
            if ( !empty( $image_array ) ) {
            $output .= '<div class="ad-image ad-image-small clearfix"><div class="tg-column-wrapper">';
            for ( $i = 1; $i < 7; $i++ ) {
               $j = $i - 1;
               if( !empty( $image_array[$j] ) ) {
                  if ( !empty( $link_array[$j] ) ) {
                     $output .= '<a href="'.$link_array[$j].'" target="_blank"><img src="'.$image_array[$j].'" width="125" height="125" rel="nofollow"></a>';
                  } else {
                     $output .= '<img src="'.$image_array[$j].'" width="125" height="125" rel="nofollow">';
                  }
               }
            }
            $output .= '</div></div>';
            echo $output;
            } ?>
         </div>
      </div>
      <?php
      echo $after_widget;
   }
}

/****************************************************************************************/

/**
 * Slider News Widget
 */
class colornews_featured_post_style_one_widget extends WP_Widget {

   function __construct() {
      $widget_ops = array( 'classname' => 'widget_featured_posts_style_one colornews_custom_widget', 'description' => __( 'Display latest posts or posts of specific category. Suitable for the Front Page: Slider Area.', 'colornews') );
      $control_ops = array( 'width' => 200, 'height' =>250 );
      parent::__construct( false,$name= __( 'TG: Featured Post (Style 1)', 'colornews' ),$widget_ops);
   }

   function form( $instance ) {
      $tg_defaults['number'] = 5;
      $tg_defaults['type'] = 'latest';
      $tg_defaults['category'] = '';
      $instance = wp_parse_args( (array) $instance, $tg_defaults );
      $number = $instance['number'];
      $type = $instance['type'];
      $category = $instance['category'];
      ?>
      <p><?php _e( 'Layout will be as below:', 'colornews' ) ?></p>
      <div style="text-align: center;"><img src="<?php echo get_template_directory_uri() . '/img/style-1.jpg'?>"></div>
      <p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e( 'Number of posts to display:', 'colornews' ); ?></label>
         <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>
      <p><input type="radio" <?php checked($type, 'latest') ?> id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" value="latest"/><?php _e( 'Show latest Posts', 'colornews' );?><br />
       <input type="radio" <?php checked($type,'category') ?> id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" value="category"/><?php _e( 'Show posts from a category', 'colornews' );?><br /></p>
      <p><label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e( 'Select category', 'colornews' ); ?>:</label>
         <?php wp_dropdown_categories( array( 'show_option_none' =>' ','name' => $this->get_field_name( 'category' ), 'selected' => $category ) ); ?></p>
      <?php }

   function update( $new_instance, $old_instance ) {
      $instance = $old_instance;
      $instance[ 'number' ] = absint( $new_instance[ 'number' ] );
      $instance[ 'type' ] = $new_instance[ 'type' ];
      $instance[ 'category' ] = $new_instance[ 'category' ];

      return $instance;
   }

   function widget( $args, $instance ) {
      extract( $args );
      extract( $instance );

      global $post;
      $number = empty( $instance[ 'number' ] ) ? 5 : $instance[ 'number' ];
      $type = isset( $instance[ 'type' ] ) ? $instance[ 'type' ] : 'latest' ;
      $category = isset( $instance[ 'category' ] ) ? $instance[ 'category' ] : '';

      if( $type == 'latest' ) {
         $get_featured_posts = new WP_Query( array(
            'posts_per_page'        => $number,
            'post_type'             => 'post',
            'ignore_sticky_posts'   => true
         ) );
      }
      else {
         $get_featured_posts = new WP_Query( array(
            'posts_per_page'        => $number,
            'post_type'             => 'post',
            'category__in'          => $category
         ) );
      }
      echo $before_widget;
      ?>
      <div class="tg-block-wrapper clearfix">
         <div class="home-slider">
            <?php
            $i=1;
            $big_image = '';
            $big_image_output = '';
            $thumbnail_image = '';
            $post_count = $get_featured_posts->post_count;
            while( $get_featured_posts->have_posts() ):$get_featured_posts->the_post();
               $j = $i-1;
               $title_attribute = get_the_title( $post->ID );
               if (has_post_thumbnail()) {
                  $big_image = '<a href="' . get_permalink( $post->ID ) . '">' . get_the_post_thumbnail( $post->ID, 'colornews-big-slider', array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ) ) ) . '</a>';
                  $thumbnail_image .= '<a data-slide-index="' . $j . '" href="">' . get_the_post_thumbnail( $post->ID, 'colornews-big-slider-thumb', array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ) ) ) . '</a>';
               } else {
                  $big_image = '<a href="' . get_permalink( $post->ID ) . '"><img src="' . get_template_directory_uri() . '/img/big-slider.png">' . '</a>';
                  $thumbnail_image .= '<a data-slide-index="' . $j . '" href=""><img src="' . get_template_directory_uri() . '/img/big-slider-thumb.png">' . '</a>';
               }
               $big_image_output .= '<li>'.$big_image.'<div class="caption-wrapper"><div class="caption-desc"><h3 class="caption-title"><a href="'.get_permalink().'" title="'.esc_attr($title_attribute).'">'.get_the_title().'</a></h3><div class="caption-content">'.get_the_excerpt().'</div></div><div class="slider-btn"><a href="'.get_permalink().'">'.__(' Read More <i class="fa fa-angle-double-right"></i>', 'colornews').'</a></div></div><div class="slider-category">'.colornews_colored_category_return(0).'</div></li>';
               if ( $i == $number || $i == $post_count ) {
                  ?>
                  <ul class="bxslider">
                     <?php echo $big_image_output; ?>
                  </ul>
                  <div class="bx-pager">
                     <?php echo $thumbnail_image; ?>
                  </div>
                  <?php
               }
               $i++;
            endwhile; ?>
            <?php
            // Reset Post Data
            wp_reset_query();
            ?>
         </div>
      </div>
      <?php echo $after_widget;
   }
}

/****************************************************************************************/

/**
 * Featured Posts widget
 */
class colornews_featured_post_style_two_widget extends WP_Widget {

   function __construct() {
      $widget_ops = array( 'classname' => 'widget_featured_posts_style_two colornews_custom_widget', 'description' =>__( 'Display latest posts or posts of specific category.' , 'colornews') );
      $control_ops = array( 'width' => 200, 'height' =>250 );
      parent::__construct( false,$name= __( 'TG: Featured Posts (Style 2)', 'colornews' ),$widget_ops);
   }

   function form( $instance ) {
      $tg_defaults['title'] = '';
      $tg_defaults['number'] = 4;
      $tg_defaults['type'] = 'latest';
      $tg_defaults['category'] = '';
      $instance = wp_parse_args( (array) $instance, $tg_defaults );
      $title = esc_attr( $instance[ 'title' ] );
      $number = $instance['number'];
      $type = $instance['type'];
      $category = $instance['category'];
      ?>
      <p><?php _e( 'Layout will be as below:', 'colornews' ) ?></p>
      <div style="text-align: center;"><img src="<?php echo get_template_directory_uri() . '/img/style-2.jpg'?>"></div>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:', 'colornews' ); ?></label>
         <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
      <p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e( 'Number of posts to display:', 'colornews' ); ?></label>
         <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>
      <p><input type="radio" <?php checked($type, 'latest') ?> id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" value="latest"/><?php _e( 'Show latest Posts', 'colornews' );?><br />
       <input type="radio" <?php checked($type,'category') ?> id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" value="category"/><?php _e( 'Show posts from a category', 'colornews' );?><br /></p>
      <p><label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e( 'Select category', 'colornews' ); ?>:</label>
         <?php wp_dropdown_categories( array( 'show_option_none' =>' ','name' => $this->get_field_name( 'category' ), 'selected' => $category ) ); ?></p>
      <?php
   }

   function update( $new_instance, $old_instance ) {
      $instance = $old_instance;
      $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
      $instance[ 'number' ] = absint( $new_instance[ 'number' ] );
      $instance[ 'type' ] = $new_instance[ 'type' ];
      $instance[ 'category' ] = $new_instance[ 'category' ];

      return $instance;
   }

   function widget( $args, $instance ) {
      extract( $args );
      extract( $instance );

      global $post;
      $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
      $number = empty( $instance[ 'number' ] ) ? 4 : $instance[ 'number' ];
      $type = isset( $instance[ 'type' ] ) ? $instance[ 'type' ] : 'latest' ;
      $category = isset( $instance[ 'category' ] ) ? $instance[ 'category' ] : '';

      if( $type == 'latest' ) {
         $get_featured_posts = new WP_Query( array(
            'posts_per_page'        => $number,
            'post_type'             => 'post',
            'ignore_sticky_posts'   => true
         ) );
      }
      else {
         $get_featured_posts = new WP_Query( array(
            'posts_per_page'        => $number,
            'post_type'             => 'post',
            'category__in'          => $category
         ) );
      }
      echo $before_widget;
      ?>
      <div class="magazine-block-1">
         <div class="tg-block-wrapper clearfix">
            <?php
               if ( $type != 'latest' ) {
                  $background_color = 'style="background-color:' . colornews_category_color($category) . ';"';
               } else {
                  $background_color = '';
               }
               if ( !empty( $title ) ) { echo '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title" ' . $background_color .'><span>'. esc_html( $title ) .'</span></span></h3>'; } ?>
               <div class="featured-post-wrapper clearfix">
                  <div class="tg-column-wrapper">
                  <?php
                  $i=1;
                  while( $get_featured_posts->have_posts() ):$get_featured_posts->the_post();
                     ?>
                     <?php if( $i == 1 ) { $featured = 'colornews-featured-post-medium'; } else { $featured = 'colornews-featured-post-small'; } ?>
                     <?php if( $i == 1 ) { echo '<div class="tg-column-2"><div class="first-post">'; } elseif ( $i == 2 ) { echo '<div class="tg-column-2"><div class="following-post">'; } ?>
                        <div class="single-article clearfix">
                           <?php
                           if( has_post_thumbnail() ) {
                              $image = '';
                              $title_attribute = get_the_title( $post->ID );
                              $image .= '<figure>';
                              $image .= '<a href="' . get_permalink() . '" title="'.the_title( '', '', false ).'">';
                              $image .= get_the_post_thumbnail( $post->ID, $featured, array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ) ) ).'</a>';
                              if ( $i == 1 ) {
                                 $image .= colornews_colored_category_return(0);
                              }
                              $image .= '</figure>';
                              echo $image;
                           }
                           ?>
                           <div class="article-content">
                              <h3 class="entry-title">
                                 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a>
                              </h3>
                              <?php $no_featured_image_extra_class = has_post_thumbnail() ? '' : 'featured-no-image'; ?>
                              <div class="below-entry-meta <?php echo $no_featured_image_extra_class; ?>">
                                 <?php
                                    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
                                    $time_string = sprintf( $time_string,
                                       esc_attr( get_the_date( 'c' ) ),
                                       esc_html( get_the_date() )
                                    );
                                    printf( __( '<span class="posted-on"><a href="%1$s" title="%2$s" rel="bookmark"><i class="fa fa-calendar-o"></i> %3$s</a></span>', 'colornews' ),
                                       esc_url( get_permalink() ),
                                       esc_attr( get_the_time() ),
                                       $time_string
                                    );
                                 ?>
                                 <span class="byline"><span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo get_the_author(); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span>
                                 <span class="comments"><i class="fa fa-comment"></i><?php comments_popup_link( '0', '1', '%' );?></span>
                              </div>
                              <?php if( $i == 1 ) { ?>
                              <div class="entry-content">
                                 <?php the_excerpt(); ?>
                              </div>
                              <div class="entry-btn">
                                 <a href="<?php the_permalink(); ?>"><?php _e('Read More <i class="fa fa-angle-double-right"></i>', 'colornews'); ?></a>
                              </div>
                              <?php } ?>
                           </div>
                        </div>
                     <?php if( $i == 1 ) { echo '</div></div><!-- first post end -->'; } ?>
                  <?php
                     $i++;
                  endwhile;
                  if ( $i > 2 ) { echo '</div></div><!-- following post end -->'; }
                  // Reset Post Data
                  wp_reset_query();
                  ?>
               </div>
            </div>
         </div>
      </div>
      <?php echo $after_widget;
   }
}

/****************************************************************************************/

/**
 * Featured Posts widget
 */
class colornews_featured_post_style_three_widget extends WP_Widget {

   function __construct() {
      $widget_ops = array( 'classname' => 'widget_featured_posts_style_three colornews_custom_widget', 'description' => __( 'Display latest posts or posts of specific category.', 'colornews') );
      $control_ops = array( 'width' => 200, 'height' =>250 );
      parent::__construct( false,$name= __( 'TG: Featured Posts (Style 3)', 'colornews' ),$widget_ops);
   }

   function form( $instance ) {
      $tg_defaults['title'] = '';
      $tg_defaults['number'] = 4;
      $tg_defaults['type'] = 'latest';
      $tg_defaults['category'] = '';
      $instance = wp_parse_args( (array) $instance, $tg_defaults );
      $title = esc_attr( $instance[ 'title' ] );
      $number = $instance['number'];
      $type = $instance['type'];
      $category = $instance['category'];
      ?>
      <p><?php _e( 'Layout will be as below:', 'colornews' ) ?></p>
      <div style="text-align: center;"><img src="<?php echo get_template_directory_uri() . '/img/style-3.jpg'?>"></div>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:', 'colornews' ); ?></label>
         <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
      <p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e( 'Number of posts to display:', 'colornews' ); ?></label>
         <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>
      <p><input type="radio" <?php checked($type, 'latest') ?> id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" value="latest"/><?php _e( 'Show latest Posts', 'colornews' );?><br />
       <input type="radio" <?php checked($type,'category') ?> id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" value="category"/><?php _e( 'Show posts from a category', 'colornews' );?><br /></p>
      <p><label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e( 'Select category', 'colornews' ); ?>:</label>
         <?php wp_dropdown_categories( array( 'show_option_none' =>' ','name' => $this->get_field_name( 'category' ), 'selected' => $category ) ); ?></p>
      <?php
   }

   function update( $new_instance, $old_instance ) {
      $instance = $old_instance;
      $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
      $instance[ 'number' ] = absint( $new_instance[ 'number' ] );
      $instance[ 'type' ] = $new_instance[ 'type' ];
      $instance[ 'category' ] = $new_instance[ 'category' ];

      return $instance;
   }

   function widget( $args, $instance ) {
      extract( $args );
      extract( $instance );

      global $post;
      $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
      $number = empty( $instance[ 'number' ] ) ? 4 : $instance[ 'number' ];
      $type = isset( $instance[ 'type' ] ) ? $instance[ 'type' ] : 'latest' ;
      $category = isset( $instance[ 'category' ] ) ? $instance[ 'category' ] : '';

      if( $type == 'latest' ) {
         $get_featured_posts = new WP_Query( array(
            'posts_per_page'        => $number,
            'post_type'             => 'post',
            'ignore_sticky_posts'   => true
         ) );
      }
      else {
         $get_featured_posts = new WP_Query( array(
            'posts_per_page'        => $number,
            'post_type'             => 'post',
            'category__in'          => $category
         ) );
      }
      echo $before_widget;
      ?>
      <div class="magazine-block-2">
         <div class="tg-block-wrapper clearfix">
            <?php
            if ( $type != 'latest' ) {
               $background_color = 'style="background-color:' . colornews_category_color($category) . ';"';
            } else {
               $background_color = '';
            }
            if ( !empty( $title ) ) { echo '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title" ' . $background_color .'><span>'. esc_html( $title ) .'</span></span></h3>'; } ?>
            <div class="featured-post-wrapper clearfix">
               <?php
               $i=1;
               while( $get_featured_posts->have_posts() ):$get_featured_posts->the_post();
                  ?>
                  <?php if( $i == 1 ) { $featured = 'colornews-featured-post-medium'; } else { $featured = 'colornews-featured-post-small'; } ?>
                  <?php if( $i == 1 ) { echo '<div class="first-post">'; } elseif ( $i == 2 ) { echo '<div class="following-post">'; } ?>
                     <div class="single-article clearfix">
                        <?php
                        if( has_post_thumbnail() ) {
                           $image = '';
                           $title_attribute = get_the_title( $post->ID );
                           $image .= '<figure>';
                           $image .= '<a href="' . get_permalink() . '" title="'.the_title( '', '', false ).'">';
                           $image .= get_the_post_thumbnail( $post->ID, $featured, array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ) ) ).'</a>';
                           if ( $i == 1 ) {
                              $image .= colornews_colored_category_return(0);
                           }
                           $image .= '</figure>';
                           echo $image;
                        }
                        ?>
                        <div class="article-content">
                           <h3 class="entry-title">
                              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a>
                           </h3>
                           <?php $no_featured_image_extra_class = has_post_thumbnail() ? '' : 'featured-no-image'; ?>
                           <div class="below-entry-meta <?php echo $no_featured_image_extra_class; ?>">
                              <?php
                                 $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
                                 $time_string = sprintf( $time_string,
                                    esc_attr( get_the_date( 'c' ) ),
                                    esc_html( get_the_date() )
                                 );
                                 printf( __( '<span class="posted-on"><a href="%1$s" title="%2$s" rel="bookmark"><i class="fa fa-calendar-o"></i> %3$s</a></span>', 'colornews' ),
                                    esc_url( get_permalink() ),
                                    esc_attr( get_the_time() ),
                                    $time_string
                                 );
                              ?>
                              <span class="byline"><span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo get_the_author(); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span>
                              <span class="comments"><i class="fa fa-comment"></i><?php comments_popup_link( '0', '1', '%' );?></span>
                           </div>
                           <?php if( $i == 1 ) { ?>
                           <div class="entry-content">
                              <?php the_excerpt(); ?>
                           </div>
                           <div class="entry-btn">
                              <a href="<?php the_permalink(); ?>"><?php _e('Read More <i class="fa fa-angle-double-right"></i>', 'colornews'); ?></a>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                  <?php if( $i == 1 ) { echo '</div>'; } ?>
               <?php
                  $i++;
               endwhile;
               if ( $i > 2 ) { echo '</div>'; }
               // Reset Post Data
               wp_reset_query();
            ?>
            </div>
         </div>
      </div>
      <?php echo $after_widget;
   }
}

/****************************************************************************************/

/**
 * Featured Posts
 */
class colornews_featured_post_style_four_widget extends WP_Widget {

   function __construct() {
      $widget_ops = array( 'classname' => 'widget_featured_posts_style_four colornews_custom_widget', 'description' => __( 'Display latest posts or posts of specific category.', 'colornews') );
      $control_ops = array( 'width' => 200, 'height' =>250 );
      parent::__construct( false,$name= __( 'TG: Featured Posts (Style 4)', 'colornews' ),$widget_ops);
   }

   function form( $instance ) {
      $tg_defaults['title'] = '';
      $tg_defaults['number'] = 5;
      $tg_defaults['type'] = 'latest';
      $tg_defaults['category'] = '';
      $instance = wp_parse_args( (array) $instance, $tg_defaults );
      $title = esc_attr( $instance[ 'title' ] );
      $number = $instance['number'];
      $type = $instance['type'];
      $category = $instance['category'];
      ?>
      <p><?php _e( 'Layout will be as below:', 'colornews' ) ?></p>
      <div style="text-align: center;"><img src="<?php echo get_template_directory_uri() . '/img/style-4.jpg'?>"></div>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:', 'colornews' ); ?></label>
         <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
      <p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e( 'Number of posts to display:', 'colornews' ); ?></label>
         <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>
      <p><input type="radio" <?php checked($type, 'latest') ?> id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" value="latest"/><?php _e( 'Show latest Posts', 'colornews' );?><br />
       <input type="radio" <?php checked($type,'category') ?> id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" value="category"/><?php _e( 'Show posts from a category', 'colornews' );?><br /></p>
      <p><label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e( 'Select category', 'colornews' ); ?>:</label>
         <?php wp_dropdown_categories( array( 'show_option_none' =>' ','name' => $this->get_field_name( 'category' ), 'selected' => $category ) ); ?></p>
      <?php
   }

   function update( $new_instance, $old_instance ) {
      $instance = $old_instance;
      $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
      $instance[ 'number' ] = absint( $new_instance[ 'number' ] );
      $instance[ 'type' ] = $new_instance[ 'type' ];
      $instance[ 'category' ] = $new_instance[ 'category' ];

      return $instance;
   }

   function widget( $args, $instance ) {
      extract( $args );
      extract( $instance );

      global $post;
      $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
      $number = empty( $instance[ 'number' ] ) ? 5 : $instance[ 'number' ];
      $type = isset( $instance[ 'type' ] ) ? $instance[ 'type' ] : 'latest' ;
      $category = isset( $instance[ 'category' ] ) ? $instance[ 'category' ] : '';

      if( $type == 'latest' ) {
         $get_featured_posts = new WP_Query( array(
            'posts_per_page'        => $number,
            'post_type'             => 'post',
            'ignore_sticky_posts'   => true
         ) );
      }
      else {
         $get_featured_posts = new WP_Query( array(
            'posts_per_page'        => $number,
            'post_type'             => 'post',
            'category__in'          => $category
         ) );
      }
      echo $before_widget;
      ?>
      <?php $featured = 'colornews-big-slider-thumb'; ?>
      <div class="tg-multiple-slider">
         <?php
         if ( empty( $title ) ) {
            $widget_class = 'widget-title-block';
         } else {
            $widget_class = '';
         }
         ?>
         <div class="tg-block-wrapper <?php echo $widget_class; ?> clearfix">
            <?php
            if ( $type != 'latest' ) {
               $background_color = 'style="background-color:' . colornews_category_color($category) . ';"';
            } else {
               $background_color = '';
            }
            if ( !empty( $title ) ) { echo '<h3 class="widget-title title-block-wrap clearfix"><span class="block-title" ' . $background_color .'><span>'. esc_html( $title ) .'</span></span></h3>'; } ?>
            <div class="carousel-slider-wrapper">
               <ul class="carousel-slider">
                  <?php
                  $i=1;
                  while( $get_featured_posts->have_posts() ):$get_featured_posts->the_post(); ?>
                     <li>
                        <a href="<?php the_permalink(); ?>">
                           <?php
                           if( has_post_thumbnail() ) {
                              $image = '';
                              $title_attribute = get_the_title( $post->ID );
                              $image .= '<figure>';
                              $image .= get_the_post_thumbnail( $post->ID, $featured, array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ) ) );
                              $image .= '</figure>';
                              $image .= '<h3 class="entry-title">';
                              $image .= get_the_title();
                              $image .= '</h3>';
                              echo $image;
                           }
                           ?>
                        </a>
                     </li>
                  <?php
                  $i++;
                  endwhile;
                  // Reset Post Data
                  wp_reset_query();
                  ?>
               </ul>
            </div>
         </div>
      </div>
      <?php echo $after_widget;
   }
}

/****************************************************************************************/

/**
 * Random Post widget
 */
class colornews_random_posts_widget extends WP_Widget {

   function __construct() {
      $widget_ops = array( 'classname' => 'colornews_random_post colornews_custom_widget', 'description' => __( 'Displays the random posts from your site. Suitable for the Right/Left sidebar.', 'colornews') );
      $control_ops = array( 'width' => 200, 'height' =>250 );
      parent::__construct( false,$name= __( 'TG: Random Posts Widget', 'colornews' ),$widget_ops);
   }

   function form( $instance ) {
      $tg_defaults['number'] = 6;
      $tg_defaults['title'] = '';
      $instance = wp_parse_args( (array) $instance, $tg_defaults );
      $number = $instance['number'];
      $title = esc_attr( $instance[ 'title' ] );
      ?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:', 'colornews' ); ?></label>
         <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
      <p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e( 'Number of random posts to display:', 'colornews' ); ?></label>
         <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>
      <?php
   }

   function update( $new_instance, $old_instance ) {
      $instance = $old_instance;
      $instance[ 'number' ] = absint( $new_instance[ 'number' ] );
      $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );

      return $instance;
   }

   function widget( $args, $instance ) {
      extract( $args );
      extract( $instance );
      $number = empty( $instance[ 'number' ] ) ? 6 : $instance[ 'number' ];
      $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';

      echo $before_widget;

       ?>

      <div class="magazine-block-3 clearfix">
         <div class="tg-block-wrapper clearfix">
            <?php
            global $post;

            $get_featured_posts = new WP_Query( array(
               'posts_per_page'        => $number,
               'post_type'             => 'post',
               'ignore_sticky_posts'   => true,
               'orderby'               => 'rand'
            ) );
            ?>
            <?php $featured = 'colornews-random-posts'; ?>
               <?php
               if ( !empty( $title ) ) { echo $before_title . esc_html( $title ) . $after_title; } ?>
               <div class="random-post-wrapper">
                  <div class="tg-column-wrapper clearfix">
                     <?php
                     $i=1;
                     $j=1;
                     while( $get_featured_posts->have_posts() ):$get_featured_posts->the_post();
                        if ( ( $j == $number ) || ( $j == $number - 1 ) || ( $j == $number - 2 ) ) {
                           $class = "";
                        } else {
                           $class = "tg-column-bottom-margin";
                        }
                        ?>
                        <div class="tg-column-3 random-post-block <?php echo $class; ?>">
                           <?php
                           if( has_post_thumbnail() ) {
                              $image = '';
                              $title_attribute = get_the_title( $post->ID );
                              $image .= get_the_post_thumbnail( $post->ID, $featured, array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ) ) );
                              $image .= colornews_colored_category_return(0);
                              echo $image;
                           } else { ?>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/random-placeholder.png">
                              <?php echo colornews_colored_category_return(0); ?>
                           <?php }
                           ?>
                           <div class="random-post-hover">
                              <h3 class="entry-title"><?php echo get_the_title(); ?></h3>
                              <?php
                              // image to display in popup
                              $image_popup_id = get_post_thumbnail_id();
                              $image_popup_url = wp_get_attachment_url( $image_popup_id );
                              ?>
                              <div class="random-hover-link">
                                 <a href="<?php echo $image_popup_url; ?>" class="image-popup"><i class="fa fa-search-plus"></i></a>
                                 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><i class="fa fa-link"></i></a>
                              </div>
                           </div>
                        </div>
                     <?php
                        $j++;
                        $i++;
                     endwhile;
                     // Reset Post Data
                     wp_reset_query();
                  ?>
               </div>
            </div>
         </div>
      </div>
      <?php echo $after_widget;
   }
}

/****************************************************************************************/

/**
 * Popular Posts widget
 */
class colornews_popular_posts_widget extends WP_Widget {

   function __construct() {
      $widget_ops = array( 'classname' => 'colornews_popular_post colornews_custom_widget', 'description' => __( 'Displays the popular posts. Suitable for the Right/Left sidebar.', 'colornews') );
      $control_ops = array( 'width' => 200, 'height' =>250 );
      parent::__construct( false,$name= __( 'TG: Popular Posts Widget', 'colornews' ),$widget_ops);
   }

   function form( $instance ) {
      $tg_defaults['number'] = 4;
      $tg_defaults['title'] = '';
      $instance = wp_parse_args( (array) $instance, $tg_defaults );
      $number = $instance['number'];
      $title = esc_attr( $instance[ 'title' ] );
      ?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:', 'colornews' ); ?></label>
         <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
      <p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e( 'Number of popular posts to display:', 'colornews' ); ?></label>
         <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>
      <?php
   }

   function update( $new_instance, $old_instance ) {
      $instance = $old_instance;
      $instance[ 'number' ] = absint( $new_instance[ 'number' ] );
      $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );

      return $instance;
   }

   function widget( $args, $instance ) {
      extract( $args );
      extract( $instance );
      $number = empty( $instance[ 'number' ] ) ? 4 : $instance[ 'number' ];
      $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';

      echo $before_widget;

      ?>
      <div class="magazine-block-3">
         <div class="tg-block-wrapper clearfix">
            <?php
            global $post;

            $get_featured_posts = new WP_Query( array(
               'posts_per_page'        => $number,
               'post_type'             => 'post',
               'ignore_sticky_posts'   => true,
               'orderby'               => 'comment_count'
            ) );
            ?>
            <?php $featured = 'colornews-featured-post-small'; ?>
            <?php
            if ( !empty( $title ) ) { echo $before_title . esc_html( $title ) . $after_title; } ?>
            <div class="following-post">
               <?php
               $i=1;
               while( $get_featured_posts->have_posts() ):$get_featured_posts->the_post();
                  ?>
                  <div class="single-article clearfix">
                     <?php
                     if( has_post_thumbnail() ) {
                        $image = '';
                        $title_attribute = get_the_title( $post->ID );
                        $image .= '<figure>';
                        $image .= '<a href="' . get_permalink() . '" title="'.the_title( '', '', false ).'">';
                        $image .= get_the_post_thumbnail( $post->ID, $featured, array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ) ) ).'</a>';
                        $image .= '</figure>';
                        echo $image;
                     }
                     ?>
                     <div class="article-content">
                        <h3 class="entry-title">
                           <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a>
                        </h3>
                        <?php $no_featured_image_extra_class = has_post_thumbnail() ? '' : 'featured-no-image'; ?>
                        <div class="below-entry-meta <?php echo $no_featured_image_extra_class; ?>">
                           <?php
                              $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
                              $time_string = sprintf( $time_string,
                                 esc_attr( get_the_date( 'c' ) ),
                                 esc_html( get_the_date() )
                              );
                              printf( __( '<span class="posted-on"><a href="%1$s" title="%2$s" rel="bookmark"><i class="fa fa-calendar-o"></i> %3$s</a></span>', 'colornews' ),
                                 esc_url( get_permalink() ),
                                 esc_attr( get_the_time() ),
                                 $time_string
                              );
                           ?>
                           <span class="byline"><span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo get_the_author(); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span>
                           <span class="comments"><i class="fa fa-comment"></i><?php comments_popup_link( '0', '1', '%' );?></span>
                        </div>
                     </div>
                  </div>
               <?php
                  $i++;
               endwhile;
               // Reset Post Data
               wp_reset_query();
               ?>
            </div>
         </div>
      </div>
      <?php echo $after_widget;
   }
}

/**************************************************************************************/

/**
 * Custom Tag Widget
 */
class colornews_custom_tag_widget extends WP_Widget {
   function __construct() {
      $widget_ops = array( 'classname' => 'colornews_tagcloud_widget colornews_custom_widget', 'description' => __( 'This widget will display the Custom Tags.', 'colornews' ) );
      $control_ops = array( 'width' => 200, 'height' => 250 );
      parent::__construct( false, $name = __( 'TG: Custom Tag Cloud', 'colornews' ) , $widget_ops, $control_ops );
   }

   function form($instance) {
      $instance = wp_parse_args( ( array ) $instance, array( 'title'=>'Tags' ) );
      $title = esc_attr( $instance[ 'title' ] );
      ?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:', 'colornews' ); ?></label>
      <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
   <?php
   }

   function update( $new_instance, $old_instance ) {
      $instance = $old_instance;
      $instance['title'] = strip_tags($new_instance['title']);

      return $instance;
   }

   function widget( $args, $instance ) {
      extract( $args );
      extract( $instance );
      $title = empty( $instance[ 'title' ] ) ? 'Tags' : $instance[ 'title' ];

      echo $before_widget;

      $args = array(
         'smallest'                  => 16,
         'largest'                   => 30,
         'unit'                      => 'px',
         'number'                    => 75,
      );
      ?>
      <div class="tg-block-wrapper clearfix">
         <?php
         if ( $title ):
            echo $before_title . esc_html( $title ) . $after_title;
         endif;
         ?>
         <div class="tag-cloud-wrap">
            <?php wp_tag_cloud( $args ); ?>
         </div>
      </div>
   <?php echo $after_widget;
   }
}