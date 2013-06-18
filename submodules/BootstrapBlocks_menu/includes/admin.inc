<?php
/**
 * Adds settings page for Base Building Blocks Menu Module
 */
function BootstrapBlocks_menu_settings_form($form, &$form_state) {
  $form['menu_block_count'] = array(
    '#type' => 'select',
    '#title' => t('Bootstrap Menu Blocks'),
    '#default_value' => variable_get('menu_block_count'),
    '#options' => range(1, 20),
  );
  $form['mobile_menu_block_count'] = array(
    '#type' => 'select',
    '#title' => t('Mobile Menu Blocks'),
    '#default_value' => variable_get('mobile_menu_block_count'),
    '#options' => range(1, 20),
  );

  return system_settings_form($form);
}
