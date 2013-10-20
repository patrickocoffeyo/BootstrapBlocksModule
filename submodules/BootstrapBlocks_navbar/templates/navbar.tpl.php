<div class="navbar <?php echo isset($navbar_classes) ? $navbar_classes : ''; ?>">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#<?php echo $block_name; ?>">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="<?php echo $block_name; ?>">
      <ul class="nav navbar-nav">
        <?php foreach($menu as $menu_item): ?>
          <?php echo BootstrapBlocks_print_menu_items($menu_item, $block_name, 1); ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

