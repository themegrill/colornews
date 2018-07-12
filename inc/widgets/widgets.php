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

   // Our custom made widgets.
   register_widget( 'colornews_728x90_advertisement_widget' );
   register_widget( 'colornews_300x250_advertisement_widget' );
   register_widget( 'colornews_125x125_advertisement_widget' );
   // featured posts widgets
   register_widget( 'colornews_featured_post_style_one_widget' );
   register_widget( 'colornews_featured_post_style_two_widget' );
   register_widget( 'colornews_featured_post_style_three_widget' );
   register_widget( 'colornews_featured_post_style_four_widget' );
   register_widget( 'colornews_random_posts_widget' );
   register_widget( 'colornews_popular_posts_widget' );
   register_widget( 'colornews_custom_tag_widget' );
}

add_action( 'widgets_init', 'colornews_widgets_init' );

// Require for TG: 728x90 Advertisement.
require COLORNEWS_WIDGETS_DIR . '/colornews-728x90-advertisement-widget.php';

// Require for TG: 300x250 Advertisement.
require COLORNEWS_WIDGETS_DIR . '/colornews-300x250-advertisement-widget.php';

// Require for TG: 125x125 Advertisement.
require COLORNEWS_WIDGETS_DIR . '/colornews-125x125-advertisement-widget.php';

// Require for TG: Featured Post (Style 1).
require COLORNEWS_WIDGETS_DIR . '/colornews-featured-post-style-one-widget.php';

// Require for TG: Featured Post (Style 2).
require COLORNEWS_WIDGETS_DIR . '/colornews-featured-post-style-two-widget.php';

// Require for TG: Featured Post (Style 3).
require COLORNEWS_WIDGETS_DIR . '/colornews-featured-post-style-three-widget.php';

// Require for TG: Featured Post (Style 4).
require COLORNEWS_WIDGETS_DIR . '/colornews-featured-post-style-four-widget.php';

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
