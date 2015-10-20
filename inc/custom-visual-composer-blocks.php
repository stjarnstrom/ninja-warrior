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
add_action( 'vc_before_init', 'page_header_integrationWithVC' );

function page_header_integrationWithVC() {
   vc_map( array(
      "name" => __( "Page Header", "my-text-domain" ),
      "base" => "page_header",
      "class" => "nw-page-header",
      "category" => __( "Epic", "my-text-domain"),
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

function tab_content_shortcode( $atts, $content = null ) {
 
    /* These arguments are going to function like variables, allowing us to set new values in the front-end editor */
    $a = shortcode_atts( array(
        'tab_heading' => 'Tab Heading',
    ), $atts );

    /* This is going to be our output */
    return "<section class='nw-tab-content' data-tabheading='{$a['tab_heading']}'>
        <h3 class='tab-heading'>{$a['tab_heading']}</h3>
       " . $content . "
     </section>";
}
add_shortcode( 'nw_tab_content', 'tab_content_shortcode' );
add_action( 'vc_before_init', 'tab_content_integrationWithVC' );

function tab_content_integrationWithVC() {
   vc_map( array(
      "name" => __( "Tab Content", "my-text-domain" ),
      "base" => "nw_tab_content",
      "class" => "nw-tab-content",
      //"icon" => get_template_directory_uri() . "/vc_extend/my_shortcode_icon.png",
      "category" => __( "Epic", "my-text-domain"),
      //'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      //'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
         array(
             'type' => 'textfield',
             'holder' => 'div',
             'class' => '',
             'heading' => __( 'Tab Heading' ),
             'param_name' => 'tab_heading',
             'value' => __( 'Tab Heading' ),
             'description' => __( 'Enter tab heading here' )
             ),
         array(
             'type' => 'textarea_html',
             'holder' => 'div',
             'class' => '',
             'heading' => __( 'Tab content', 'my-text-domain' ),
             'param_name' => 'content',
             'value' => __( '<p>Html content</p>', 'my-text-domain' ),
             'description' => __( 'Html tab content goes here', 'my-text-domain' )
             )
          )
       ) 
    );
}
