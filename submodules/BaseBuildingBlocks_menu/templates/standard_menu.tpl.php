<ul class="nav nav-pills">
  <?php foreach($menu as $menu_item): ?>
    <?php $active = BaseBuildingBlocks_menu_is_active($menu_item['link']['link_path']) ? 'active': ''; ?>
    <?php if ($menu_item['below']): ?>
      <li class="dropdown <?php echo $active; ?>">
        <?php echo l(t('!icon '.$menu_item['link']['link_title'].' !caret', array('!caret' => '<b class="caret"></b>', '!icon' => BaseBuildingBlocks_menu_get_link_icon($menu_item['link']['link_title'], $block_name))), $menu_item['link']['link_path'], 
          array(
            'html' => TRUE,
            'attributes' => array(
              'class' => array('dropdown-toggle'),
              'data-toggle' => 'dropdown',
            ),
          )); ?>
        <ul class="dropdown-menu" role="menu" aria-labelledby="<?php echo drupal_clean_css_identifier($menu_item['link']['link_title']); ?>">
          <?php foreach($menu_item['below'] as $submenu_item): ?>
            <li>
              <?php echo l(t('!icon '.$submenu_item['link']['link_title'], array('!icon' => BaseBuildingBlocks_menu_get_link_icon($submenu_item['link']['link_title'], $block_name))), $submenu_item['link']['link_path'], array('html' => TRUE)); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </li>
    <?php else: ?>
      <li class="<?php echo $active; ?>">
        <?php echo l(t('!icon '.$menu_item['link']['link_title'], array('!icon' => BaseBuildingBlocks_menu_get_link_icon($menu_item['link']['link_title'], $block_name))), $menu_item['link']['link_path'], 
         array(
          'html' => TRUE,
          'attributes' => array(
            'class' => array(
              $active
            ),
          ),
         )); ?>
      </li>
    <?php endif; ?>
  <?php endforeach; ?>
</ul>
