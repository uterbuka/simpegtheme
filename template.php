<?php

/**
 * @file
 * template.php
 */
 
 function simpegtheme_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'simpegtheme') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'simpegtheme_preprocess_user_login'
  ),
 );
return $items;
}


