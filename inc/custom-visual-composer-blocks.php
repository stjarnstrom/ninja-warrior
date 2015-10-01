<?php
/**
 * Custom blocks for Visual Composer.
 *
 * @package Ninja Warrior
 */

function page_header_shortcode( $atts ) {
 
/* These arguments are going to function like variables, allowing us to set new values in the front-end editor */
        $a = shortcode_atts( array(
 'image_id' => 'Image',
 'text_heading' => 'This is the default heading text',
 'text_sub_heading' => 'This is the default sub-heading text',
 ), $atts );
 
/* Visual Composer will return an image ID when you use image blocks. One approach to getting the URL for the image using the image ID is querying the database for a matching image ID. This will return an image object, so we'll be able to work with it easily */
 $raw_image = new WP_Query( array( 'post_type' => 'attachment', 'attachment_id' => $a['image_id'] ));
 
/* Let's get the URL from that image */
 $image_url = $raw_image->posts[0]->guid;
 /* This is going to be our output */
 return "<div class='nw-page-header' style='background-image: url( $image_url );'>
 <div class='b-page-header_inner'>
 <h2>{$a['text_heading']}</h2>
 <h3>{$a['text_sub_heading']}</h3>
 </div>
 </div>";
}
 
add_shortcode( 'page_header', 'page_header_shortcode' );

/* VC map */ 

add_action( 'vc_before_init', 'your_name_integrateWithVC' );
 
function your_name_integrateWithVC() {
   vc_map( array(
      "name" => __( "Page Header", "my-text-domain" ),
      "base" => "page_header",
      "class" => "nw-page-header",
      "category" => __( "Epic", "my-text-domain"),
      // 'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      // 'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
         array(
             'type' => 'textfield',
             'holder' => 'div',
             'class' => '',
             'heading' => __( 'Text Heading' ),
             'param_name' => 'text_heading',
             'value' => __( 'Default Heading Text' ),
             'description' => __( 'Enter heading text here' )
             ),
             array(
             'type' => 'textfield',
             'holder' => 'div',
             'class' => '',
             'heading' => __( 'Sub-heading' ),
             'param_name' => 'text_sub_heading',
             'value' => __( 'Default sub-heading text' ),
             'description' => __( 'Enter sub-heading text here' )
             ),
             array(
             'type' => 'attach_image',
             'holder' => 'div',
             'class' => 'page-header-container',
             'heading' => __( 'Background Image' ),
             'param_name' => 'image_id',
             'value' => __( 'Default' ),
             'description' => __( 'Choose a background image' )
             )
          )
       ) 
    );
}