<?php

/**
 * @file
 * Display Suite 1 column template.
 */
?>

<?php

/**
 * @file
 * Default theme implementation to display an Image and Text bean.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be 'block-user'.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>



<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div class="content"<?php print $content_attributes; ?>>

  <?php /**  Date **/ ?>
  
      <div class="Date">
      <?php if (!empty($content['field_news_date'])) : ?>
        <div class="text">
          <?php print render($content['field_news_date']); ?>
        </div>
      <?php endif; ?>
    </div>

	<?php /**  Image Tile **/ ?>
	
    <div class="image-title">
	      <?php if (!empty($content['field_thumbnail'])) : ?>
        <div class="image grayscale grayscale-fade">
        <?php if (!empty($field_link_to[0]['display_url'])) : ?>
          <a href="<?php print check_plain($field_link_to[0]['display_url']); ?>"><?php print render($content['field_thumbnail']); ?></a>
        <?php else : ?>
          <?php print render($content['field_thumbnail']); ?>
        <?php endif; ?>
           </div>
      <?php endif; ?>
	
	</div>

<?php /**  This applies for the title **/ ?>
	  
<div class="test">
      <?php if (!empty($title)): ?>
          <a href="<?php print $text_url_made_this_var_up = url('/node/'. $nid); ?>"> <h2 <?php print $title_attributes; ?>><?php print $title ?></h2></a>
	  </div> 
      <?php endif;?>

	  
<?php /**  This applies for the summary body text **/ ?>
	
    <div class="summary-text">
      <?php if (!empty($content['body'])) : ?>
        <div class="text">
          <?php print render($content['body']); ?>
        </div>
      <?php endif; ?>
    </div>

  </div>
</div> 
