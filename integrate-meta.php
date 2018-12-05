<?php
/*
Plugin Name: JMA Integrate Meta Slider into Header
Description: This plugin intrages the meta sillder plugin with jma child theme header
Version: 1.2
Author: John Antonacci
Author URI: http://cleansupersites.com
License: GPL2
*/
function jma_meta_files()
{
    wp_enqueue_style('jma_meta_css', plugins_url('/jma_meta_css.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'jma_meta_files');

function meta_slider_array_filter($slider_selections)
{
    $sliders = '';
    $posts = get_posts(array(
        'post_type' => 'ml-slider',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'ASC',
        'posts_per_page' => -1
    ));
    if (count($posts)) {
        foreach ($posts as $post) {
            $sliders[$post->ID] = $post->post_title;
        }
    }

    if (is_array($sliders)) {
        $slider_selections['meta-slider'] = $sliders;
    }

    return $slider_selections;
}
function jma_base_meta_slider_array_filter($html)
{
    return str_replace(array('class="nivo-prevNav">', 'class="nivo-nextNav">'), array('class="nivo-prevNav"><i class="sf-sub-indicator fas fa-angle-left"></i>', 'class="nivo-nextNav"><i class="sf-sub-indicator fas fa-angle-right"></i>'), $html);
}
//add_filter('metaslider_image_nivo_slider_markup', 'jma_base_meta_slider_array_filter', 1);

function jma_meta_slider_filter($return, $type_id)
{
    $slider_array = explode('|', $type_id);
    if ($slider_array[0] == 'meta-slider') {
        $return = do_shortcode("[metaslider id=" . $slider_array[1] . "]");
    }
    return $return;
}

function jma_integrate_meta()
{
    add_filter('slider_array_filter', 'meta_slider_array_filter');
    add_filter('return_display_header_slider', 'jma_meta_slider_filter', 10, 2);
}
add_action('after_setup_theme', 'jma_integrate_meta');

/* add format tab */

function jma_int_meta_nivo_slider_image_attributes($x, $slide)
{
    $jma_caption_position = $jma_class = '';
    $slide_id = $slide['id'];
    if (get_post_meta($slide_id, '_meta_slider_jma_caption_position', true)) {
        $jma_caption_position = get_post_meta($slide_id, '_meta_slider_jma_caption_position', true);
    }

    if (get_post_meta($slide_id, '_meta_slider_jma_class', true)) {
        $jma_class = esc_attr(get_post_meta($slide_id, '_meta_slider_jma_class', true));
    }
    $current = $x['data-caption'];
    $x['data-caption'] = '<div class="jma-wrapper ' . $jma_class .' ' . $jma_caption_position .'">' . $current . '</div>';
    return $x;
}
add_filter('metaslider_nivo_slider_image_attributes', 'jma_int_meta_nivo_slider_image_attributes', 10, 2);

function jma_int_meta_image_slide_tabs($tabs, $slide, $slider, $settings)
{
    $slide_id = $slide->ID;
    $jma_caption_position = get_post_meta($slide_id, '_meta_slider_jma_caption_position', true);
    if (!$jma_caption_position) {
        $jma_caption_position = 'center-center';
    }

    $jma_class = esc_attr(get_post_meta($slide_id, '_meta_slider_jma_class', true));
    // Adds schedule tab
    ob_start();
    include 'tabs/format.php';
    $format_tab = ob_get_contents();
    ob_end_clean();

    $tabs['format'] = array(
            'title' => __('Format', 'ml-slider'),
            'content' => $format_tab
        );
    return $tabs;
}
add_filter('metaslider_image_slide_tabs', 'jma_int_meta_image_slide_tabs', 20, 5);

function jma_int_meta_save_settings($slide_id, $slider_id, $fields)
{
    update_post_meta($slide_id, '_meta_slider_jma_caption_position', $fields['jma_caption_position']);
    update_post_meta($slide_id, '_meta_slider_jma_class', $fields['jma_class']);
}
add_action('metaslider_save_image_slide', 'jma_int_meta_save_settings', 10, 3);
