<ul class="nav nav-pills">
  <?php foreach($menu as $menu_item): ?>
    <?php echo BootstrapBlocks_print_menu_items($menu_item, $block_name, 1); ?>
  <?php endforeach; ?>
</ul>
