<?php
/**
 * Adds settings page for Base Building Blocks Menu Module
 */
function BootstrapBlocks_menu_settings_form($form, &$form_state) {
  $form['menu_block_count'] = array(
    '#type' => 'select',
    '#title' => t('Bootstrap Menu Blocks'),
    '#default_value' => variable_get('menu_block_count'),
    '#options' => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20),
  );
  $form['mobile_menu_block_count'] = array(
    '#type' => 'select',
    '#title' => t('Mobile Menu Blocks'),
    '#default_value' => variable_get('mobile_menu_block_count'),
    '#options' => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20),
  );

  return system_settings_form($form);
}
