<?php
/**
 * Plugin Name: jlurd Company Counsel Crud
 * Description: My First Wordpress Plugin
 * Author: Jeylourd T. Alcontin
 * Author URI: https://alcontinj.blissweb.info
 * Version: 1.0.0 
 * Text Domain: Company-Counsel-Crud
 * 
 * */  

 if( !defined('ABSPATH') ){
    echo 'Something is not normal here';
    exit;
 }

 class CounselForm{
    public function __construct(){
        //create custom counsel post type
        add_action('init',array($this,'create_custom_counsel_profile'));

        //add assets (js,css,etc)
        add_action('wp_enqueue_scripts',array($this,'load_assets'));

        //add shortcode
        add_shortcode('counsel-form',array($this,'load_shortcode'));
    }
    public function create_custom_counsel_profile(){ //methods
       $args = array(
            'public' => true,
            'has_archive' => true,
            'supports' => array('title'),
            'exclude_from_search' => true,
            'publicly_queryable' => false,
            'capability' => 'manage_options',
            'labels' => array(
                            'name'=>'Create New Counsel Form',
                            'singular_name' => 'Create New Counsel Form Entry'
                         ),
            'menu_icon' =>'dashicons-media-text',
       );
       register_post_type('CounselForm',$args);
    }
    public function load_assets(){ //methods
        wp_enqueue_style(
            'jlurd_custom',
            plugin_dir_url( __FILE__ ) . 'css/jlurd_custom.css',
            array(),
            1,
            'all'
        );

        wp_enqueue_script(
            'jlurd_scripts',
            plugin_dir_url( __FILE__ ) . 'js/jlurd_scripts.js',
            array('jquery'),
            1,
            true
        );

    }
    public function load_shortcode(){//methods
            return 'hello shortcode is working';
    }
 }

 new CounselForm;