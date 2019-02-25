<?php
// Create menu
  $title ='Slider panel by CMSblog.it';
  cmsb_libraries($title);
?>

<div class="mb-body">
    <!-- OPTION BANNERS -->
    <div class="mb-box">
        <div class="mb-head"><i class="fa fa-clone"></i> <?php _e('Slider Option', 'cmsb_sliderpanel'); ?></div>
        <div class="mb-inside">
                <div class="mb-points">
                    <div class="mb-row"><?php _e('Select and configure all parameters correctly for your custom slider', 'cmsb_sliderpanel'); ?></div> 
                </div>
            </div>
        <form action="<?php echo osc_admin_render_plugin_url('cmsb_sliderpanel/admin.php'); ?>" method="post">
            <input type="hidden" name="cmsb_banner_option" value="done" />
            <div class="mb-inside">
                <!-- IMAGE NUMBER -->
                <div class="mb-row">
                    <label><span><?php _e('Image number', 'cmsb_sliderpanel'); ?></span></label> 
                    <input size="10" name="cmsb_banner_number" type="number" value="<?php echo stripslashes( osc_get_preference('cmsb_banner_number') ); ?>" min="0" max="100">
                    
                    <div class="mb-explain"><?php _e('Number of visible banners', 'cmsb_sliderpanel'); ?></div>
                </div>
                
                <!-- TITLE SLIDER -->
                <div class="mb-row">
                    <label><span><?php _e('Slider title', 'cmsb_sliderpanel'); ?></span></label> 
                    <input type="text" class="mb-textarea mb-textarea-large" style="width: 35%;" id="title_slider" name="title_slider" placeholder="<?php _e('Insert the title of the slider Ads', 'cmsb_sliderpanel'); ?>" value="<?php echo stripslashes( osc_get_preference('title_slider') ); ?>">
                    <a class="delbutton" onclick="document.getElementById('title_slider').value = ''"><span><?php _e('Delete', 'cmsb_sliderpanel');?></span></a>
                    
                    <div class="mb-explain"><?php _e('The visible title for your slider ads', 'cmsb_sliderpanel'); ?></div>
                </div>
                
                <!-- MIN-HEIGHT IMAGE -->
                <div class="mb-row">
                    <label><span><?php _e('Min Height image', 'cmsb_sliderpanel'); ?></span></label>
                    <input size="10" name="cmsb_banner_height_slider" type="number" value="<?php if(osc_get_preference('cmsb_banner_height_slider') == ''){ echo '100'; } else { echo stripslashes( osc_get_preference('cmsb_banner_height_slider') );} ?>" min="100" max="800">
                    
                    <div class="mb-explain"><?php _e('Minimum height of the images of the ads slider', 'cmsb_sliderpanel'); ?></div>
                </div>
                
                <!-- MARGIN IMAGE -->
                <div class="mb-row">
                    <label><span><?php _e('Margin right image', 'cmsb_sliderpanel'); ?></span></label>
                    <input size="10" name="cmsb_banner_margin_image" type="number" value="<?php if(osc_get_preference('cmsb_banner_margin_image') == ''){ echo '0'; } else {echo stripslashes( osc_get_preference('cmsb_banner_margin_image') );} ?>" min="0" max="100">
                    <span style="line-height: 31px;float: left;">&nbsp;&nbsp;&nbsp;&nbsp;<?php _e('Margin bottom image', 'cmsb_sliderpanel'); ?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <input size="10" name="cmsb_banner_margin_bottom_image" type="number" value="<?php if(osc_get_preference('cmsb_banner_margin_bottom_image') == ''){ echo '0'; } else {echo stripslashes( osc_get_preference('cmsb_banner_margin_bottom_image') );} ?>" min="0" max="100">
                    
                    <div class="mb-explain"><?php _e('Margins of the image of the slider', 'cmsb_sliderpanel'); ?></div>
                </div>
                
                <!-- LOOP -->
                <div class="mb-row">
                   <label><span><?php _e('Loop slider', 'cmsb_sliderpanel'); ?></span></label>
                  <input name="loop_slider" id="loop_slider" class="element-slide" type="checkbox" <?php echo (osc_get_preference('loop_slider') == 'true' ? 'checked' : ''); ?> />

                  <div class="mb-explain"><?php _e('Infinity loop scrolling images for the slider ads', 'cmsb_sliderpanel'); ?></div>
                </div>
                
                <!-- AUTOPLAY -->
                <div class="mb-row">
                   <label><span><?php _e('Autoplay slider', 'cmsb_sliderpanel'); ?></span></label>
                  <input name="autoplay_slider" id="autoplay_slider" class="element-slide" type="checkbox" <?php echo (osc_get_preference('autoplay_slider') == 'true' ? 'checked' : ''); ?> />
                    
                  <div class="mb-explain"><?php _e('Autoplay of the slider', 'cmsb_sliderpanel'); ?></div>
                </div>
                
                <!-- TIMEOUT AUTOPLAY SLIDER -->
                <div class="mb-row">
                    <label><span><?php _e('Autoplay speed', 'cmsb_sliderpanel'); ?></span></label>
                    <input size="10" name="autoplay_timeout_slider" type="number" value="<?php if(osc_get_preference('autoplay_timeout_slider') == ''){ echo '5000'; } else {echo stripslashes( osc_get_preference('autoplay_timeout_slider') );} ?>" step="500" min="1000" max="10000">
                    
                    <div class="mb-explain"><?php _e('Scroll speed of slider images', 'cmsb_sliderpanel'); ?></div>
                </div>
                
                <!-- MOUSE DRAG IMAGE -->
                <div class="mb-row">
                   <label><span><?php _e('Mouse drag image', 'cmsb_sliderpanel'); ?></span></label>
                  <input name="mouse_drag_image" id="mouse_drag_image" class="element-slide" type="checkbox" <?php echo (osc_get_preference('mouse_drag_image') == 'true' ? 'checked' : ''); ?> />
                    
                  <div class="mb-explain"><?php _e('Dragging images with the mouse', 'cmsb_sliderpanel'); ?></div>
                </div>
                
                <!-- TOUCH DRAG IMAGE -->
                <div class="mb-row">
                   <label><span><?php _e('Touch drag image', 'cmsb_sliderpanel'); ?></span></label>
                  <input name="touch_drag_image" id="touch_drag_image" class="element-slide" type="checkbox" <?php echo (osc_get_preference('touch_drag_image') == 'true' ? 'checked' : ''); ?> />
                    
                  <div class="mb-explain"><?php _e('Dragging images with the touch', 'cmsb_sliderpanel'); ?></div>
                </div>
                
                <!-- ARROW NAVIGATION SLIDER -->
                <div class="mb-row">
                   <label><span><?php _e('Navigation arrows', 'cmsb_sliderpanel'); ?></span></label>
                  <input name="navigation_arrow_slider" id="navigation_arrow_slider" class="element-slide" type="checkbox" <?php echo (osc_get_preference('navigation_arrow_slider') == '1' ? 'checked' : ''); ?> />
                    
                  <div class="mb-explain"><?php _e('Show Next/Prev buttons for navigation slider', 'cmsb_sliderpanel'); ?></div>
                </div>
                
                <!-- DOTS NAVIGATION SLIDER -->
                <div class="mb-row">
                   <label><span><?php _e('Navigation dots', 'cmsb_sliderpanel'); ?></span></label>
                  <input name="navigation_dots_slider" id="navigation_dots_slider" class="element-slide" type="checkbox" <?php echo (osc_get_preference('navigation_dots_slider') == '1' ? 'checked' : ''); ?> />
                    
                  <div class="mb-explain"><?php _e('Show dots buttons for navigation slider', 'cmsb_sliderpanel'); ?></div>
                </div>
                
                <!-- ITEMS SCREEN -->
                <div class="mb-row">
                    <label><span><?php _e('Responsive', 'cmsb_sliderpanel'); ?></span></label>
                    <span style="line-height: 31px;float: left;"><?php _e('Mobile 0', 'cmsb_sliderpanel'); ?>&nbsp;</span>
                    <div style="float:left">
                        <select name="mobile_view" id="mobile_view">
                          <option value="1" <?php echo (osc_get_preference('mobile_view') == "1" ? 'selected' : ''); ?>>1</option>
                          <option value="2" <?php echo (osc_get_preference('mobile_view') == "2" ? 'selected' : ''); ?>>2</option>
                        </select>
                    </div>
                    <span style="line-height: 31px;float: left;">&nbsp;<?php _e('to Tablet 600', 'cmsb_sliderpanel'); ?> &nbsp;</span>
                    <div style="float:left">
                        <select name="tablet_view">
                          <option value="1" <?php echo (osc_get_preference('tablet_view') == "1" ? 'selected' : ''); ?>>1</option>
                          <option value="2" <?php echo (osc_get_preference('tablet_view') == "2" ? 'selected' : ''); ?>>2</option>
                          <option value="3" <?php echo (osc_get_preference('tablet_view') == "3" ? 'selected' : ''); ?>>3</option>
                          <option value="4" <?php echo (osc_get_preference('tablet_view') == "4" ? 'selected' : ''); ?>>4</option>
                        </select>
                    </div>
                    <span style="line-height: 31px;float: left;">&nbsp;<?php _e('to Desktop 1000', 'cmsb_sliderpanel'); ?>&nbsp;</span>
                    <div style="float:left">
                        <select name="desktop_view">
                          <option value="1" <?php echo (osc_get_preference('desktop_view') == "1" ? 'selected' : ''); ?>>1</option>
                          <option value="2" <?php echo (osc_get_preference('desktop_view') == "2" ? 'selected' : ''); ?>>2</option>
                          <option value="3" <?php echo (osc_get_preference('desktop_view') == "3" ? 'selected' : ''); ?>>3</option>
                          <option value="4" <?php echo (osc_get_preference('desktop_view') == "4" ? 'selected' : ''); ?>>4</option>
                          <option value="5" <?php echo (osc_get_preference('desktop_view') == "5" ? 'selected' : ''); ?>>5</option>
                          <option value="6" <?php echo (osc_get_preference('desktop_view') == "6" ? 'selected' : ''); ?>>6</option>
                        </select>
                    </div>
                    
                    <div class="mb-explain"><?php _e('The number of items you want to see on the screen', 'cmsb_sliderpanel'); ?></div>
                </div>
            </div>
            <div class="mb-foot">
                <button type="submit" class="mb-button"><?php _e('Save', 'cmsb_sliderpanel');?></button>
            </div>
        </form>
    </div>
    
    <!-- CARICA LOGO -->
    <div class="mb-box">
        <div class="mb-head"><i class="fa fa-upload"></i> <?php _e('Upload Image', 'cmsb_sliderpanel'); ?></div>
        <form action="<?php echo osc_admin_render_plugin_url('cmsb_sliderpanel/admin.php'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="upload_img" value="upload_pub" />
            <div class="mb-inside">
                <div class="mb-points">
                    <div class="mb-row">- <?php _e('When uploading a new image, do not forget to clear your browser cache (CTRL + R or CTRL + F5)', 'cmsb_sliderpanel'); ?></div>                    
                    
                    <div class="mb-row">- <?php _e('Supported formats: png, gif, jpg', 'cmsb_sliderpanel'); ?></div>       
                </div>
                <input type="file" name="pub" id="package" />
            </div>
            <div class="mb-foot">
                <button type="submit" class="mb-button"><?php _e('Upload', 'cmsb_sliderpanel');?></button>
            </div>
        </form>
    </div>
    
    <!-- CASELLE ADS BANNERS -->
    <div class="mb-box">
        <div class="mb-head"><i class="fa fa-clone"></i> <?php _e('Link Slider', 'cmsb_sliderpanel'); ?></div>
        <div class="mb-inside">
                <div class="mb-points">
                    <div class="mb-row"><?php _e('Insert the link generated with the upload of an image into the ads boxes', 'cmsb_sliderpanel'); ?>.</div> 
                </div>
            </div>
        <form action="<?php echo osc_admin_render_plugin_url('cmsb_sliderpanel/admin.php'); ?>" method="post">
            <input type="hidden" name="cmsb_banner" value="done" />
            <div class="mb-inside">
                <div class="mb-row">
                    <?php if(osc_get_preference('cmsb_banner_number') != 0) { 
                            for($i = 1; $i <= osc_get_preference('cmsb_banner_number'); $i++) { ?>
                    <div class="mb-row">
                    <label class="h29"><span><?php _e('Image', 'cmsb_sliderpanel');?> <?php echo $i; ?></span></label> 
                        <input type="text" id="link_ads_<?php echo $i; ?>" class="mb-textarea mb-textarea-large" style="width: 60%;" name="banner_cmsb_ads_<?php echo $i; ?>" placeholder="<?php _e('Insert the image link', 'cmsb_sliderpanel'); ?>" value="<?php echo stripslashes( osc_get_preference('banner_cmsb_ads_'.$i) ); ?>">
                        <a class="delbutton" onclick="document.getElementById('link_ads_<?php echo $i; ?>').value = ''">
                        
                        <span><?php _e('Delete', 'cmsb_sliderpanel');?></span></a>
                    </div>
                    <?php   } 
                    } else {
                        echo _e('You have not configured the number of boxes for the Ads slider', 'cmsb_sliderpanel').'.';
                    } ?>
                </div>
            </div>
            <div class="mb-foot">
                <button type="submit" class="mb-button"><?php _e('Save', 'cmsb_sliderpanel');?></button>
            </div>
        </form>
    </div>
    
    <!-- HELP INFORMATION -->
    <div class="mb-box">
        <div class="mb-head"><i class="fa fa-question-circle"></i> <?php _e('Help', 'cmsb_sliderpanel'); ?></div>
        <div class="mb-inside">
            <div class="mb-row mb-help">
                <span class="sup">(1)</span>
                <div class="h1">
                    <?php _e('Open the main.php file of the active template and insert the shortcode where you want the slider to be displayed.', 'cmsb_sliderpanel');?>
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php _e('Path:', 'cmsb_sliderpanel'); echo ' '.osc_base_path().'oc-content/themes/'.osc_current_web_theme().'/main.php'; ?>
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php _e('Shortcode: &lt;?php if(function_exists(\'cmsb_slider\')) {echo cmsb_slider();} ?&gt;', 'cmsb_sliderpanel');?>
                </div>
            </div>
            <div class="mb-row mb-help">
                <span class="sup">(2)</span>
                <div class="h1">
                    <?php _e('Use the options panel to configure your slider remembering to save at the end.', 'cmsb_sliderpanel');?>
                </div>
            </div>
            <div class="mb-row mb-help">
                <span class="sup">(3)</span>
                <div class="h1">
                    <?php _e('Use the Upload Image panel to upload and generate the link.', 'cmsb_sliderpanel');?>
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php _e('Remember: your uploaded images are saved to the path', 'cmsb_sliderpanel'); echo ': '.osc_base_path().'oc-content/themes/'.osc_current_web_theme().'/images/cmsbslider/';?>
                </div>
            </div>
            <div class="mb-row mb-help">
                <span class="sup">(4)</span>
                <div class="h1">
                    <?php _e('Use the Link Slider options panel to insert links to the images you want to show.', 'cmsb_sliderpanel');?>
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php _e('Remember: you can also use external links and not uploaded via the Upload Image panel.', 'cmsb_sliderpanel');?>
                </div>
            </div>
            <div class="mb-points">
                <div class="mb-row"><?php _e('For problems you can contact us at', 'cmsb_sliderpanel'); ?>  <a target="_blank" class="mb-last" href="mailto:info@cmsblog.it"><i class="fa fa-envelope"></i> <?php _e('info@cmsblog.it', 'cmsb_sliderpanel'); ?></a></div> 
            </div>
            <br/>
            <div class="mb-points">
                <div class="mb-row"><?php _e('Thank you for purchasing our plugin.', 'cmsb_sliderpanel'); ?></div> 
            </div>
        </div>
    </div>
        
</div>
