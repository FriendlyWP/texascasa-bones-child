<?php
add_action('wpmu_new_blog','my_default_pages');

function my_default_pages(){
    $default_pages = array('About','Home','Volunteer','Support CASA');
    $existing_pages = get_pages();

    foreach($existing_pages as $page){
        $temp[] = $page->post_title;
        }


    $pages_to_create = array_diff($default_pages,$temp);

    foreach($pages_to_create as $new_page_title){

            // Create post object
            $my_post = array();
            $my_post['post_title'] = $new_page_title;
            $my_post['post_content'] = 'This is my '.$new_page_title.' page.';
            $my_post['post_status'] = 'publish';
            $my_post['post_type'] = 'page';


            // Insert the post into the database
            $result = wp_insert_post( $my_post );

        }
}

// HIDE ACF CUSTOM FIELDS MENU ITEM
if ( !is_super_admin() ) {
    add_filter('acf/settings/show_admin', '__return_false');
}


//**************** ACF *********************//
//include_once('add-ons/advanced-custom-fields/acf.php' );
// Add-ons 
//include_once('add-ons/acf-repeater/acf-repeater.php');
// include_once('add-ons/acf-gallery/acf-gallery.php');
// include_once('add-ons/acf-flexible-content/acf-flexible-content.php');
// include_once( 'add-ons/acf-options-page/acf-options-page.php' );

//define( 'ACF_LITE' , true );
/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 */
/*
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_footer-copyright-and-address',
        'title' => 'Footer Copyright and Address',
        'fields' => array (
            array (
                'key' => 'field_52137264c187a',
                'label' => 'Copyright & Address',
                'name' => 'footer_copyright',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array (
        'id' => 'acf_home-content',
        'title' => 'Home Content',
        'fields' => array (
            array (
                'key' => 'field_51f1940ed76f7',
                'label' => 'Slides',
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_51f19430d76f8',
                'label' => 'Frames',
                'name' => 'frames',
                'type' => 'repeater',
                'instructions' => 'testtesttest',
                'sub_fields' => array (
                    array (
                        'key' => 'field_51f1950dd76ff',
                        'label' => 'Slide Image',
                        'name' => 'slide_image',
                        'type' => 'image',
                        'column_width' => '',
                        'save_format' => 'id',
                        'preview_size' => 'home-frame',
                        'library' => 'all',
                    ),
                    array (
                        'key' => 'field_51f1944dd76f9',
                        'label' => 'Full Width?',
                        'name' => 'full_width',
                        'type' => 'true_false',
                        'instructions' => 'Check this box if the sliding image will be full-width.',
                        'column_width' => '',
                        'message' => '',
                        'default_value' => 0,
                    ),
                    array (
                        'key' => 'field_51f1947cd76fa',
                        'label' => 'Overlay Color',
                        'name' => 'overlay_color',
                        'type' => 'radio',
                        'column_width' => '',
                        'choices' => array (
                            'white' => 'White',
                            'light-blue' => 'Light Blue',
                            'medium-blue' => 'Medium Blue',
                            'dark-blue' => 'Dark Blue',
                            'taupe' => 'Taupe',
                        ),
                        'other_choice' => 0,
                        'save_other_choice' => 0,
                        'default_value' => '',
                        'layout' => 'vertical',
                    ),
                    array (
                        'key' => 'field_51f194ddd76fb',
                        'label' => 'Overlay Heading Text',
                        'name' => 'overlay_heading_text',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'html',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_51f194e9d76fc',
                        'label' => 'Overlay Smaller Text',
                        'name' => 'overlay_smaller_text',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'html',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_51f194f9d76fd',
                        'label' => 'Button Text',
                        'name' => 'button_text',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'html',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_51f19503d76fe',
                        'label' => 'Button Destination',
                        'name' => 'button_destination',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'html',
                        'maxlength' => '',
                    ),
                ),
                'row_min' => 0,
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Row',
            ),
            array (
                'key' => 'field_51f19535d7700',
                'label' => 'Main Content Area',
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_51f19543d7701',
                'label' => 'Home Content Area (left column)',
                'name' => 'home_content_area',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'tmpl-home.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
                0 => 'the_content',
                1 => 'excerpt',
                2 => 'custom_fields',
                3 => 'discussion',
                4 => 'comments',
                5 => 'author',
                6 => 'format',
                7 => 'featured_image',
                8 => 'categories',
                9 => 'tags',
                10 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
}
*/