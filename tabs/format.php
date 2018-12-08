<?php
/* copied from ml-slidr > admin > views > slides > tabs */
if (!defined('ABSPATH')) {
    die('No direct access.');
} ?>
<div class="row">
    <select class="crop_position" name="attachment[<?php echo $slide_id; ?>][jma_caption_position]">
        <option value="left-top" <?php echo selected($jma_caption_position, 'left-top', false); ?>> <?php _e("Top Left", "ml-slider"); ?></option>
        <option value="center-top" <?php echo selected($jma_caption_position, 'center-top', false); ?>> <?php _e("Top Center", "ml-slider"); ?></option>
        <option value="right-top" <?php echo selected($jma_caption_position, 'right-top', false); ?>> <?php _e("Top Right", "ml-slider"); ?></option>
        <option value="left-middle" <?php echo selected($jma_caption_position, 'left-middle', false); ?>> <?php _e("Center Left", "ml-slider"); ?></option>
        <option value="center-middle" <?php echo selected($jma_caption_position, 'center-middle', false); ?>> <?php _e("Center Center", "ml-slider"); ?></option>
        <option value="right-middle" <?php echo selected($jma_caption_position, 'right-middle', false); ?>> <?php _e("Center Right", "ml-slider"); ?></option>
        <option value="left-bottom" <?php echo selected($jma_caption_position, 'left-bottom', false); ?>> <?php _e("Bottom Left", "ml-slider"); ?></option>
        <option value="center-bottom" <?php echo selected($jma_caption_position, 'center-bottom', false); ?>> <?php _e("Bottom Center", "ml-slider"); ?></option>
        <option value="right-bottom" <?php echo selected($jma_caption_position, 'right-bottom', false); ?>> <?php _e("Bottom Right", "ml-slider"); ?></option>
    </select>
</div>
<div class="row">
	<input class="url" type="text" name="attachment[<?php echo $slide_id; ?>][jma_class]" placeholder="<?php _e("ADD CLASSES", "ml-slider"); ?>" value="<?php echo $jma_class; ?>" />
</div>
