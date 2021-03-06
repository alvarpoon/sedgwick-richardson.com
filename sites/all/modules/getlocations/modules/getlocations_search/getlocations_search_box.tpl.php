<?php

/**
 * @file getlocations_box.tpl.php
 * @author Bob Hutchinson http://drupal.org/user/52366
 * @copyright GNU GPL
 *
 * Template file for colorbox implementation
 * available variables:
 * $box_width $box_height contain the getlocations_search defaults set in the config
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<!-- getlocations_box -->
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
<style>
/* adjust these to match your colorbox and map size */
  body {
    width: 500px;
    margin: 0;
  }
  #page {
    min-width: 500px;
    width: 500px;
    margin: 0px 0px 0px 0px;
    padding: 0px 0px 0px 0px;
  }
  #content-area {
  }
</style>
</head>
<body class="<?php print $body_classes; ?>">
  <div id="page"><div id="page-inner">
    <div id="main"><div id="main-inner" class="clear-block">
      <div id="content"><div id="content-inner">
        <?php if ($title): ?>
          <h2 class="title"><?php print $title; ?></h2>
        <?php endif; ?>
        <div id="content-area">
          <?php print $content; ?>
        </div>
      </div></div>
    </div></div>
  </div></div>
  <?php print $closure; ?>
</body>
</html>
