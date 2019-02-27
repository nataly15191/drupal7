<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
function drupal_training_breadcrumb($variables) {
    
    $breadcrumb = $variables['breadcrumb'];
 
    $breadcrumb = array();
    $breadcrumb[] = l(t('Home'), '<front>');
    $breadcrumb[] = l(drupal_get_title(), current_path());
    drupal_set_breadcrumb($breadcrumb);
    
    $output = '<h1 class="element-invisible">' . t('You are here') . '</h1>';
    $output .= '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
    
    return $output;
   
}

function drupal_training_theme() {
    
    $items = array();
    
    //указываем к какой форме обращаемся
    $items['comment_form'] = array(
      'render element' => 'comment_form',
      //указываем путь к шаблону
      'path' => drupal_get_path('theme', 'drupal_training') . '/templates',
      //указываем название шаблона
      'template' => 'comment-form',
    );
    
    return $items;
    
}


