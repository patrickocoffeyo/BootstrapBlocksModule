<?php
/**
 * Adds settings page for Base Building Blocks Menu Module
 */
function BaseBuildingBlocks_menu_settings_form($form, &$form_state) {
  $form['menu'] = array( 
    '#type' => 'fieldset',
    '#title' => 'Menu Settings',
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#required' => TRUE,
    '#weight' => -30,
  );
  $form['menu']['menu_icons'] = array(
    '#type' => 'textarea',
    '#title' => t('Menu Icons'),
    '#description' => t('Determines what <a href="http://fortawesome.github.com/Font-Awesome/"> Font Awesome</a> icon should be printed before each menu item in the Base Building Blocks menu functions based off of the menu items title. (For example: My Menu Link Title | icon-font-awesome-preset)'),
    '#default_value' => variable_get('menu_icons'),
  );


  return $form;
}
