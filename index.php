<?php

/*
Plugin Name: Slider CMSBlog
Short Name: cmsb_sliderpanel
Plugin URI: 
Description: Slider with panel for configuration
Version: 1.0.0
Author: Alessandro Magri
Author URI: https://www.cmsblog.it/
Translation: Morena Anzalone

Shortcode slider: <?php if(function_exists('cmsb_slider')) {echo cmsb_slider();} ?>
*/

    require_once osc_plugins_path() . osc_plugin_folder(__FILE__) . 'functions.php';
        
    osc_add_hook('init_admin', 'cmsb_sliderpanel_actions_admin');
 
    /* Install Plugin */
    function cmsb_sliderpanel_install() {
        osc_set_preference('cmsb_banner_number', '4');
        osc_set_preference('title_slider', 'Slider by Alessandro Magri | CMSblog.it');
        osc_set_preference('cmsb_banner_height_slider', '200');
        osc_set_preference('cmsb_banner_margin_image', '10');
        osc_set_preference('cmsb_banner_margin_bottom_image', '10');
        osc_set_preference('loop_slider', 'true');
        osc_set_preference('autoplay_slider', 'false');
        osc_set_preference('autoplay_timeout_slider', '5000');
        osc_set_preference('mouse_drag_image', 'true');
        osc_set_preference('touch_drag_image', 'true');
        osc_set_preference('navigation_arrow_slider', '1');
        osc_set_preference('navigation_dots_slider', '0');
        osc_set_preference('mobile_view', '2');
        osc_set_preference('tablet_view', '3');
        osc_set_preference('desktop_view', '4');
    }
    osc_register_plugin(osc_plugin_path(__FILE__), 'cmsb_sliderpanel_install');
 
    /* Unistall Plugin */
    function cmsb_sliderpanel_uninstall() {
    }
    osc_add_hook(osc_plugin_path(__FILE__) . '_uninstall', 'cmsb_sliderpanel_uninstall');
    
    /* Configure Plugin */
    function cmsb_sliderpanel_admin() {
            osc_admin_render_plugin('cmsb_sliderpanel/admin.php');
    }
    osc_add_hook(osc_plugin_path(__FILE__)."_configure", 'cmsb_sliderpanel_admin');
    
    /* Menu Plugin */
    function cmsb_sliderpanel_admin_menu() {
            osc_admin_menu_plugins(__('Slider panel CMSB', 'cmsb_sliderpanel'), osc_admin_render_plugin_url('cmsb_sliderpanel/admin.php'), 'cmsb_sliderpanel_submenu');
    }
    osc_add_hook('admin_menu_init', 'cmsb_sliderpanel_admin_menu');    
    
    osc_add_hook('header', 'style_slider');

?>