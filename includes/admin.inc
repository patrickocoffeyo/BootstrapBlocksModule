<?php
/**
 * Adds settings page for Base Building Blocks Menu Module
 */
function BaseBuildingBlocks_settings_form($form, &$form_state) {
  $form['info'] = array(
    '#type' => 'markup',
    '#title' => t('Base Building Blocks Administration'),
    '#markup' => t('In the sub-sections of this page, you will find administration settings for each of the installed and enabled sub-modules of the Base Building Blocks Module.'),
  );
  return $form;
}
