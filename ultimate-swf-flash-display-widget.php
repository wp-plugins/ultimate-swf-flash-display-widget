<?php
/**
 * @package ultimate-swf-flash-display-widget
*/
/*
Plugin Name: Ultimate SWF Flash Display Widget
Plugin URI: http://www.connexdesigns.com/blog
Description: If you are having problem in display flash object on your website or internet explorer this widget is for you. Enjoy and rate us on Plugin Directory
Version: 0.2
Author: Kristijan Lopac
Author URI: http://www.connexdesigns.com
*/

class ultimate_swf_flash_display_widget extends WP_Widget{
    public function __construct() {
        $params = array(
            'description' => 'If you are having problem in display flash object on your website or internet explorer this widget is for you. Enjoy and rate us on Plugin Directory',
            'name' => 'Ultimate SWF Flash Display Widget'
        );
        parent::__construct('ultimate_swf_flash_display_widget','',$params);
    }
	
    public function form($instance) {
        extract($instance);
        ?>
<!-- Ultimate SWF Flash Display Widget - Wordpress Backend Configuration - -->
<p>
    <label for="<?php echo $this->get_field_id('title');?>">Title : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('title');?>"
	name="<?php echo $this->get_field_name('title');?>"
        value="<?php echo !empty($title) ? $title : "Ultimate SWF Flash Display Widget"; ?>" />
</p>

<div id="basic_configuration">
<div style="color:#fff; font-size:12px; font-weight:bold; padding:3px; margin:0; text-align:center; background:#333333;">Basic Configuration</div>
<!--Select SWF Source Option-->
<p>
    <label for="<?php echo $this->get_field_id( 'swfOption' ); ?>">Select SWF Source Option:</label> 
    <select id="<?php echo $this->get_field_id( 'swfOption' ); ?>"
        name="<?php echo $this->get_field_name( 'swfOption' ); ?>"
        class="widefat" style="width:100%;">
            <option value="url" <?php if ($swfOption == 'url') echo 'selected="url"'; ?> >External URL</option>
            <option value="directory" <?php if ($swfOption == 'directory') echo 'selected="directory"'; ?> >Internal Directory</option>	
    </select>
</p>
<!--end of SWF Source Option-->
<!--Flash External Source URL-->
<p>
    <label for="<?php echo $this->get_field_id('urlSource');?>">Flash External Source URL : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('urlSource');?>"
	name="<?php echo $this->get_field_name('urlSource');?>"
    value="<?php echo !empty($urlSource) ? $urlSource : ""; ?>" />
</p>
<!--end of Flash External Source URL-->
<!--Internal Directory-->
<p>
    <label for="<?php echo $this->get_field_id('internalDirectory');?>">Internal Directory : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('internalDirectory');?>"
	name="<?php echo $this->get_field_name('internalDirectory');?>"
    value="<?php echo !empty($internalDirectory) ? $internalDirectory : ""; ?>" />
</p>
<!--end of Internal Directory-->
<!--width-->
<p>
    <label for="<?php echo $this->get_field_id('width');?>">Width : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('width');?>"
	name="<?php echo $this->get_field_name('width');?>"
    value="<?php echo !empty($width) ? $width : "300"; ?>" />
</p>
<!--end of width-->
<!--height-->
<p>
    <label for="<?php echo $this->get_field_id('height');?>">Height : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('height');?>"
	name="<?php echo $this->get_field_name('height');?>"
    value="<?php echo !empty($height) ? $height : "300"; ?>" />
</p>
<!--end of height-->
</div>
<div id="advanced_configuration">
<div style="color:#fff; font-size:12px; font-weight:bold; padding:3px; margin:0; text-align:center; background:#333333;">Advanced Configuration</div>
<!--Allow Script Access-->
<p>
    <label for="<?php echo $this->get_field_id( 'allowScriptAccess' ); ?>">Allow Script Access:</label> 
    <select id="<?php echo $this->get_field_id( 'allowScriptAccess' ); ?>"
        name="<?php echo $this->get_field_name( 'allowScriptAccess' ); ?>"
        class="widefat" style="width:100%;">
            <option value="always" <?php if ($allowScriptAccess == 'always') echo 'selected="always"'; ?> >Always</option>
            <option value="sameDomain" <?php if ($allowScriptAccess == 'sameDomain') echo 'selected="sameDomain"'; ?> >Same Domain</option>
			<option value="never" <?php if ($allowScriptAccess == 'never') echo 'selected="never"'; ?> >Never</option>
    </select>
</p>
<!--end of Allow Script Access-->
<!--Quality-->
<p>
    <label for="<?php echo $this->get_field_id( 'quality' ); ?>">Quality:</label> 
    <select id="<?php echo $this->get_field_id( 'quality' ); ?>"
        name="<?php echo $this->get_field_name( 'quality' ); ?>"
        class="widefat" style="width:100%;">
			<option value="high" <?php if ($quality == 'high') echo 'selected="high"'; ?> >High</option>
            <option value="low" <?php if ($quality == 'low') echo 'selected="low"'; ?> >Low</option>
            <option value="autolow" <?php if ($quality == 'autolow') echo 'selected="autolow"'; ?> >Auto Low</option>
			<option value="autohigh" <?php if ($quality == 'autohigh') echo 'selected="autohigh"'; ?> >Auto High</option>
			<option value="medium" <?php if ($quality == 'medium') echo 'selected="medium"'; ?> >Medium</option>
			<option value="best" <?php if ($quality == 'best') echo 'selected="best"'; ?> >Best</option>
    </select>
</p>
<!--end of Quality-->
<!--Background Color-->
<p>
    <label for="<?php echo $this->get_field_id('bgcolor');?>">Background Color : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('bgcolor');?>"
	name="<?php echo $this->get_field_name('bgcolor');?>"
    value="<?php echo !empty($bgcolor) ? $bgcolor : "#ffffff"; ?>" />
</p>
<!--end of Background Color-->
<!--Wmode-->
<p>
    <label for="<?php echo $this->get_field_id( 'wmode' ); ?>">Wmode:</label> 
    <select id="<?php echo $this->get_field_id( 'wmode' ); ?>"
        name="<?php echo $this->get_field_name( 'wmode' ); ?>"
        class="widefat" style="width:100%;">
            <option value="transparent" <?php if ($wmode == 'transparent') echo 'selected="transparent"'; ?> >Transparent</option>
            <option value="window" <?php if ($wmode == 'window') echo 'selected="window"'; ?> >Window</option>
			<option value="opaque" <?php if ($wmode == 'opaque') echo 'selected="opaque"'; ?> >Opaque</option>
    </select>
</p>
<!--end of Wmode-->
</div>
<!--end of configuration fields-->
<?php
    }
    public function widget($args, $instance) {
        extract($args);
        extract($instance);
        $title = apply_filters('widget_title', $title);
        $description = apply_filters('widget_description', $description);
		//if empty this settings will applicable
		if(empty($title)) $title = "Ultimate SWF Flash Display Widget";
        if(empty($swfOption)) $swfOption = "url";
        if(empty($urlSource)) $urlSource = "";
		if(empty($internalDirectory)) $internalDirectory = "";
        if(empty($width)) $width = "300";
		if(empty($height)) $height = "300";
		if(empty($allowScriptAccess)) $allowScriptAccess = "always";
		if(empty($quality)) $quality = "high";
		if(empty($bgcolor)) $bgcolor = "#ffffff";
        if(empty($wmode)) $wmode = "transparent";
		//if empty this setting will applicable
		if($swfOption == "url"){
			$dataSource = $urlSource;
		}else{
			$internal = get_site_url();
			$internalDirectorySource = $internal . '/' . $internalDirectory;
			$dataSource = $internalDirectorySource;
		}
		$data = "";
		if(empty($dataSource)){
			$data .= "You are seeing this message cause either your external or internal directory is blank. You must have to put the Flash Object Source URL or directory to display Flash Object on your website";
			}
		else{
		$data .= "
		<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' width='$width' height='$height' id='movie_name' align='middle' style='visibility: visible;'>
			<param name='movie' value='$dataSource'/>
			<param name='allowScriptAccess' value='$allowScriptAccess'>
			<param name='quality' value='$quality'>
			<param name='bgcolor' value='$bgcolor'>
			<param name='wmode' value='$wmode'>
			<!--[if !IE]>-->
			<object type='application/x-shockwave-flash' data='$dataSource' width='$width' height='$height'>
				<param name='movie' value='$dataSource'/>
				<param name='allowScriptAccess' value='$allowScriptAccess'>
				<param name='quality' value='$quality'>
				<param name='bgcolor' value='$bgcolor'>
				<param name='wmode' value='$wmode'>
			<!--<![endif]-->
				<a href='http://www.adobe.com/go/getflash'>
					<img src='http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player'/>
				</a>
			<!--[if !IE]>-->
			</object>
			<!--<![endif]-->
		</object>
		";}
		$data .= "<div class='copy' style='color:#ccc; font-size: 9px; '><a href='http://www.allpromotionalapparel.com' title='allpromotionalapparel.com' target='_blank'>promotional polo shirts</a></div>";
		echo $before_widget;
            echo $before_title . $title . $after_title;
			echo $data;
            echo $after_widget;
    }
}
//start registering the extension
add_action('widgets_init','register_connex_ultimate_swf_flash_display_widget');
function register_connex_ultimate_swf_flash_display_widget(){
    register_widget('ultimate_swf_flash_display_widget');
}