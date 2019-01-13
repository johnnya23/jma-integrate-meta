<?php if (!defined('ABSPATH')) {
    die('No direct access.');
} ?>
<div>
    <div><label><?php _e("Title and Title class", "ml-slider"); ?></label></div>
    <div style="float:left;width:55%;clear:both">
	<input class="url" type="text" name="attachment[<?php echo $slide_id; ?>][jma_title]" placeholder="<?php _e("ADD A TITLE", "ml-slider"); ?>" value="<?php echo $jma_title; ?>" />
    </div>
    <div style="float:left;width:18%;margin-left:2%;margin-bottom:5px">
	<input class="url" type="text" name="attachment[<?php echo $slide_id; ?>][jma_title_class]" placeholder="<?php _e("ADD A TITLE CLASS", "ml-slider"); ?>" value="<?php echo $jma_title_class; ?>" />
    </div>
</div>
<div>
    <div style="float:left;width:75%">
	<textarea style="height:50px;margin:0" name="attachment[<?php echo $slide_id; ?>][post_excerpt]" placeholder="<?php _e("ADD A CAPTION", "ml-slider"); ?>"><?php echo $caption; ?></textarea>
    </div>
    <div style="float:left;width:23%;margin-left:2%;margin-bottom:5px">
	<label><?php _e("Caption class", "ml-slider"); ?></label>
	<input class="url" type="text" name="attachment[<?php echo $slide_id; ?>][jma_caption_class]" placeholder="<?php _e("CAPTION CLASS", "ml-slider"); ?>" value="<?php echo $jma_caption_class; ?>" />
    </div>
</div>
<div>
    <div style="float:left;width:25%;clear:both">
	<label><?php _e("Button text", "ml-slider"); ?></label>
	<input class="url" type="text" name="attachment[<?php echo $slide_id; ?>][jma_button]" placeholder="<?php _e("Button Text", "ml-slider"); ?>" value="<?php echo $jma_button; ?>" />
    </div>
    <div style="float:left;width:23%;margin-left:2%;">

	<label><?php _e("Button class", "ml-slider"); ?></label>
	<input class="url" type="text" name="attachment[<?php echo $slide_id; ?>][jma_button_class]" value="<?php echo $jma_button_class; ?>" />
    </div>
</div>
<div>
    <div style="float:left;width:73%;;clear:both">
	<label><?php _e("Button URL", "ml-slider"); ?></label>
	<input class="url" type="text" name="attachment[<?php echo $slide_id; ?>][jma_url]" placeholder="<?php _e("Button URL", "ml-slider"); ?>" value="<?php echo $jma_url; ?>" />
    </div>
    <div style="float:left;width:23%;margin-left:2%;margin-bottom:5px">
        <label><?php _e("New window?", "ml-slider"); ?> <br/><input autocomplete="off" tabindex="0" type="checkbox" name="attachment[<?php echo $slide_id; ?>][new_window]" <?php echo $target; ?> /></label>
    </div>
</div>
