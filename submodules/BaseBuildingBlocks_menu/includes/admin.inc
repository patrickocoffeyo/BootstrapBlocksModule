<?php
/**
 * Adds settings page for Base Building Blocks Menu Module
 */
function BaseBuildingBlocks_menu_settings_form($form, &$form_state) {
  $form['menu_block_count'] = array(
    '#type' => 'select',
    '#title' => t('Menu Blocks'),
    '#default_value' => variable_get('menu_block_count'),
    '#options' => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20),
  );
  $form['menu_icons'] = array(
    '#type' => 'textarea',
    '#title' => t('Default Menu Icons'),
    '#description' => t('Determines what <a href="http://fortawesome.github.com/Font-Awesome/"> Font Awesome</a> icon should be printed before each menu item in the Base Building Blocks menu functions based off of the menu items title. (For example: My Menu Link Title | icon-font-awesome-preset)'),
    '#default_value' => variable_get('menu_icons'),
  );


  return system_settings_form($form);
}
