<?php if (!defined('ABSPATH')) {
    die('No direct access.');
} ?>

<div class="row">
	<input class="url" type="text" name="attachment[<?php echo $slide_id; ?>][jma_title]" placeholder="<?php _e("ADD A TITLE", "ml-slider"); ?>" value="<?php echo $jma_title; ?>" />
</div>
<div class="row<?php echo $inherit_image_caption_class; ?>">
	<label><?php _e("Caption", "ml-slider"); ?></label>
	<textarea name="attachment[<?php echo $slide_id; ?>][post_excerpt]"><?php echo $caption; ?></textarea>
</div>
<div class="row has-right-checkbox">
	<label><?php _e("Button text", "ml-slider"); ?></label>
	<input class="url" type="text" name="attachment[<?php echo $slide_id; ?>][jma_button]" placeholder="<?php _e("Button Text", "ml-slider"); ?>" value="<?php echo $jma_button; ?>" /><br/>
	<label><?php _e("Button URL", "ml-slider"); ?></label>
	<input class="url" type="text" name="attachment[<?php echo $slide_id; ?>][url]" placeholder="<?php _e("Button URL", "ml-slider"); ?>" value="<?php echo $url; ?>" />
	<div class="input-label right new_window">
		<label><?php _e("Open in a new window", "ml-slider"); ?> <input autocomplete="off" tabindex="0" type="checkbox" name="attachment[<?php echo $slide_id; ?>][new_window]" <?php echo $target; ?> /></label>
	</div>
</div>
