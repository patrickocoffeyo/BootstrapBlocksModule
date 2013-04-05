<div class="navbar <?php echo isset($navbar_classes) ? $navbar_classes : ''; ?>">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><i class="icon-reorder"></i></a>
      <div class="nav-collapse">
        <ul class="nav">
          <?php foreach($menu as $menu_item): ?>
            <?php echo BootstrapBlocks_print_menu_items($menu_item, $block_name, 1); ?>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>

