<?php

// ADMIN MENU
function cmsb_libraries($title) {
    //Stylesheet
    echo '<link href="' . osc_base_url() . 'oc-content/plugins/cmsb_sliderpanel/css/admin.css?v=' . date('YmdHis') . '" rel="stylesheet" type="text/css" />';
    echo '<link href="' . osc_base_url() . 'oc-content/plugins/cmsb_sliderpanel/css/bootstrap-switch.css" rel="stylesheet" type="text/css" />';
    echo '<link href="' . osc_base_url() . 'oc-content/plugins/cmsb_sliderpanel/css/tipped.css" rel="stylesheet" type="text/css" />';
    echo '<link href="//fonts.googleapis.com/css?family=Open+Sans:300,600&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css" />';
    echo '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />';
    //Javascript
    echo '<script src="' . osc_base_url() . 'oc-content/plugins/cmsb_sliderpanel/js/admin.js?v=' . date('YmdHis') . '"></script>';
    echo '<script src="' . osc_base_url() . 'oc-content/plugins/cmsb_sliderpanel/js/tipped.js"></script>';
    echo '<script src="' . osc_base_url() . 'oc-content/plugins/cmsb_sliderpanel/js/bootstrap-switch.js"></script>';


    $text  = '<div class="mb-head">';
    $text .= '<div class="mb-head-left">';
    $text .= '<h1>' . $title . '</h1>';
    $text .= '<h2>'.__('Slider carousel control panel CMSblog', 'cmsb_sliderpanel').'</h2>';
    $text .= '</div>';
    $text .= '</div>';

    echo $text;
}

//STYLESHEET SLIDER
function style_slider() {
    echo '
    <!--Stylesheet Carousel CMSblog.it-->
    <link href="' . osc_base_url() . 'oc-content/plugins/cmsb_sliderpanel/css/style_slide_cms.css?v='.date('YmdHis') . '" rel="stylesheet" type="text/css" />
    <link href="' . osc_base_url() . 'oc-content/plugins/cmsb_sliderpanel/css/owl.carousel.min.css?v=' . date('YmdHis') . '" rel="stylesheet" type="text/css" />
    <link href="' . osc_base_url() . 'oc-content/plugins/cmsb_sliderpanel/css/owl.theme.default.min.css?v=' . date('YmdHis') . '" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>var $newjQuery = jQuery.noConflict();</script>
    <script src="' . osc_base_url() . 'oc-content/plugins/cmsb_sliderpanel/js/owl.carousel.min.js?v='.date('YmdHis').'"></script>
    ';
}

function cmsb_slider() {
    $html = '';
    if(osc_get_preference('cmsb_banner_number') != 0) {
        $html .= '
            <!-- Author: Alessandro Magri | www.cmsblog.it -->
            <h1 class="slider-cmsb-title">'.osc_get_preference('title_slider').'</h1>
            <div id="latest" class="slider-cmsb">
                <div class="owl-carousel owl-theme" style="margin-bottom: 20px;">';
                    for($i = 1; $i <= osc_get_preference('cmsb_banner_number'); $i++) {
                        $html .= '<div class="slider-cmsb-card" style="min-height:'.osc_get_preference('cmsb_banner_height_slider').'px; margin-bottom:'.osc_get_preference('cmsb_banner_margin_bottom_image').'px;">
                            <div>
                                <img src='.osc_get_preference('banner_cmsb_ads_'.$i).' style="height:'.osc_get_preference('cmsb_banner_height_slider').'px;">     
                            </div>
                        </div>';
                    }
                    $html .= '</div>
                        <div class="inner" '.(osc_get_preference('navigation_arrow_slider') == "0" ? 'style="display: none;"' : '').'>
                            <div class="owl-nav">
                                <button type="button" class="customNextBtnOne" style="float: right;background: #e3e3e3;color: black;border-color: #e5e5e5;max-width: 5px !important;padding: 0px 14px;text-align: center;    font-size: 12px;line-height: 28px;margin-left: 2px;">
                                <span aria-label="Next">›</span></button>
                                <button type="button" class="customPrevBtnOne" style="float: right;background: #e3e3e3;color: black;border-color: #e5e5e5;max-width: 5px !important;padding: 0px 14px;text-align: center;    font-size: 12px;line-height: 28px;margin-left: 2px;">
                                <span aria-label="Previous">‹</span></button>                    
                            </div>
                        </div>
                    </div>
                    <script>
                        $newjQuery(document).ready(function(){
                            var owl = $newjQuery(\'.owl-carousel\');
                            owl.owlCarousel({
                                loop:'.osc_get_preference('loop_slider').',
                                autoplay:'.osc_get_preference('autoplay_slider').',
                                autoplayTimeout:'.osc_get_preference('autoplay_timeout_slider').',
                                margin:'.osc_get_preference('cmsb_banner_margin_image').',
                                mouseDrag:'.osc_get_preference('mouse_drag_image').',
                                touchDrag:'.osc_get_preference('touch_drag_image').',
                                nav:false,
                                dots:'.osc_get_preference('navigation_dots_slider').',
                                responsive:{
                                0:{
                                items:'.osc_get_preference('mobile_view').'
                                },
                                600:{
                                items:'.osc_get_preference('tablet_view').'
                                },
                                1000:{
                                items:'.osc_get_preference('desktop_view').'
                                }
                                }
                                });
                            $newjQuery(\'.customNextBtnOne\').click(function() {
                            owl.trigger(\'next.owl.carousel\');
                            });
                            
                            $newjQuery(\'.customPrevBtnOne\').click(function() {
                            owl.trigger(\'prev.owl.carousel\', [300]);
                            });
                        });  
                    </script>';
    }
    return $html;
}

function cmsb_sliderpanel_actions_admin() {
    if( Params::getParam('file') != 'cmsb_sliderpanel/admin.php' ) {
        return '';
    }

    //IMAGE NUMBER
    if( Params::getParam('cmsb_banner_option') == 'done' ) {
        $ads_number = Params::getParam('cmsb_banner_number');
        $slider_title = Params::getParam('title_slider');
        $loop_slider = Params::getParam('loop_slider');
        $height_slider = Params::getParam('cmsb_banner_height_slider');
        $margin_slider = Params::getParam('cmsb_banner_margin_image');
        $margin_slider_bottom = Params::getParam('cmsb_banner_margin_bottom_image');
        $autoplay_slider = Params::getParam('autoplay_slider');
        $autoplay_speed_slider = Params::getParam('autoplay_timeout_slider');
        $mouse_drag = Params::getParam('mouse_drag_image');
        $touch_drag = Params::getParam('touch_drag_image');
        $nav_slider = Params::getParam('navigation_arrow_slider');
        $nav_dots_slider = Params::getParam('navigation_dots_slider');

        osc_set_preference('cmsb_banner_number', $ads_number);
        osc_set_preference('title_slider', $slider_title);
        osc_set_preference('loop_slider', ($loop_slider ? 'true' : 'false'));
        osc_set_preference('mobile_view', Params::getParam('mobile_view'));
        osc_set_preference('tablet_view', Params::getParam('tablet_view'));
        osc_set_preference('desktop_view', Params::getParam('desktop_view'));
        osc_set_preference('cmsb_banner_height_slider', $height_slider);
        osc_set_preference('cmsb_banner_margin_image', $margin_slider);
        osc_set_preference('cmsb_banner_margin_bottom_image', $margin_slider_bottom);
        osc_set_preference('autoplay_slider', ($autoplay_slider ? 'true' : 'false'));
        osc_set_preference('autoplay_timeout_slider', $autoplay_speed_slider);
        osc_set_preference('mouse_drag_image', ($mouse_drag ? 'true' : 'false'));
        osc_set_preference('touch_drag_image', ($touch_drag ? 'true' : 'false'));
        osc_set_preference('navigation_arrow_slider', ($nav_slider ? '1' : '0'));
        osc_set_preference('navigation_dots_slider', ($nav_dots_slider ? '1' : '0'));

        //Message
        osc_add_flash_ok_message(__('Parameters set correctly', 'cmsb_sliderpanel'), 'admin');
        header('Location: ' . osc_admin_render_plugin_url('cmsb_sliderpanel/admin.php')); exit;
    }

    //LINK IMAGE
    if( Params::getParam('cmsb_banner') == 'done' ) {
        if(osc_get_preference('cmsb_banner_number') != 0) { 
            for($i = 1; $i <= osc_get_preference('cmsb_banner_number'); $i++) {
                osc_set_preference('banner_cmsb_ads_'.$i, stripslashes(Params::getParam('banner_cmsb_ads_'.$i, false, false)));
            }
        }
        
        //Message
        osc_add_flash_ok_message(__('Links set correctly', 'cmsb_sliderpanel'), 'admin');
        header('Location: ' . osc_admin_render_plugin_url('cmsb_sliderpanel/admin.php')); exit;
    }

    //LOGO
    switch( Params::getParam('upload_img') ) {
        case('upload_pub'):
            $package = Params::getFiles('pub');
            if( $package['error'] == UPLOAD_ERR_OK ) {
                $name = basename($_FILES["pub"]["name"]);
                $folder = "../oc-content/themes/".osc_current_web_theme ()."/images/cmsbslider";
                if(!is_dir($folder)) {
                    mkdir("../oc-content/themes/".osc_current_web_theme ()."/images/cmsbslider", 0777, true);
                }
                if( move_uploaded_file($package['tmp_name'], WebThemes::newInstance()->getCurrentThemePath() . "images/cmsbslider/".$name) ) {
    
                //Message
                osc_add_flash_ok_message(__('Image uploaded successfully', 'cmsb_sliderpanel'), 'admin');
                osc_add_flash_ok_message('URL: '.osc_base_url().'oc-content/themes/'.osc_current_web_theme ().'/images/cmsbslider/'.$name, 'admin');
                } else {
                    //Message
                    osc_add_flash_error_message(__("An error has occurred, please try again", 'cmsb_sliderpanel'), 'admin');
                }
            } else {
                //Message
                osc_add_flash_error_message(__("An error has occurred, please try again", 'cmsb_sliderpanel'), 'admin');
            }
            
            header('Location: ' . osc_admin_render_plugin_url('cmsb_sliderpanel/admin.php')); exit;
        break;
    }
}

?>