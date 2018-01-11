<?php
/**
 * Firetoss Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Firetoss_Theme
 */

include 'util.php';

include_dir('inc/theme');
include_dir('inc/config');
//include_dir('inc/settings');
include_dir('inc/functions');
include_dir('inc/services');
include_dir('inc/filters');
include_dir('inc/actions');
include_dir('inc/extras');
include_dir('inc/shortcodes');
include_dir('inc/woocommerce');


//
//$post_type = new CustomPostType();
//
//$post_type->update((object)array(
//    'slug' => 'video',
//    'label_singular' => 'Video',
//    'label_plural'  => 'Videos',
//    'taxonomies' => array('video-tag')
//));
//
//$post_type->register();
//
//$tax = new CustomTaxonomy();
//
//$tax->update((object)array(
//    'slug' => 'video-tag',
//    'label_singular' => 'Video Tag',
//    'label_plural'  => 'Video Tags',
//    'post_types' => array('video')
//));
//
//$tax->register();
