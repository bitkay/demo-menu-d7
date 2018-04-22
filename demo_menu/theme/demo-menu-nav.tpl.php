<?php

/**
 * @file
 * Main and off-canvas navigation
 */
?>
<div id="demo-menu">
  <div id="demo-menu-bar-oc">
    <a href="#demo-menu" id="demo-menu-button-oc"><div class="wrap">Menu</div>
      <div class="icon-menu">
        <span class="bar1"></span>
        <span class="bar2"></span>
        <span class="bar3"></span>
      </div>
    </a>
  </div>
  <div id="demo-menu-nav">
    <nav role="navigation">
      <?php print render($menu); ?>
    </nav>
  </div>
</div>
