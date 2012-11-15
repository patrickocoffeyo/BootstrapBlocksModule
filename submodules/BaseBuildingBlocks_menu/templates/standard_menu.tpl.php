<ul class="nav nav-pills">
  <?php foreach($menu as $menu_item): ?>
    <li class="<?php echo BaseBuildingBlocks_menu_is_active($menu_item['link']['link_path']) ? 'active': ''; ?>">
      <?php if ($menu_item['below']): ?>
        <?php echo l(
          t($menu_item['link']['link_title'].' !caret', array('!caret' => '<b class="caret"></b>')), 
          $menu_item['link']['link_path'], array(
          'html' => TRUE,
          'attributes' => array(
            'class' => array('dropdown-toggle'),
            'data-toggle' => 'dropdown',
          ),
        )); ?>
        <ul class="dropdown-menu" role="menu" aria-labelledby="<?php echo drupal_clean_css_identifier($menu_item['link']['link_title']); ?>">
          <?php foreach($menu_item['below'] as $submenu_item): ?>
            <li>
              <?php echo l(t($submenu_item['link']['link_title']), $submenu_item['link']['link_path']); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php else: ?>
         <?php echo l(t($menu_item['link']['link_title']), $menu_item['link']['link_path'], array(
          'attributes' => array(
            'class' => array(
              $active  
            ),
          ),
         )); ?>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>
