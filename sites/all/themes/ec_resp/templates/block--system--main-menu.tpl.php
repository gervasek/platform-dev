<?php

/**
 * @file
 * Default theme implementation to display a block.
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

global $base_url;
?>

        <div id="main-menu">
          <div id="main-menu-desktop" class="navbar navbar-static-top visible-desktop">
            <div class="navbar-inner">
              <div id="<?php print $block_html_id; ?>" class="container">
                <?php print_r($content) ?>   
              </div>
            </div>
          </div>

          <div id="main-menu-mobile" class="navbar navbar-fixed-top hidden-desktop" style="position: fixed">
            <div class="navbar-inner">
              <div id="<?php print $block_html_id; ?>" class="container">

                <?php //if ($variables['has_right_sidebar']): ?>
                <button id="sidebar-button" class="btn btn-navbar visible-phone">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                
                </button><!-- /#sidebar-button --> 
                <?php //endif; ?>

                <a id="menu-button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <div class="arrow-down"></div>
                </a>

                <a class="brand hidden-desktop" href="<?php print $base_url . '/'; ?>">
                  <?php print variable_get('site_name', ''); ?>
                </a>

                <div class="nav-collapse collapse">
                  <?php print_r($content) ?>   
                </div>
              </div>
            </div>          
          </div>
        </div>
        