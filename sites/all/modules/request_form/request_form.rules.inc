<?php
    
    function request_form_rules_action_info() {
      return array(
        'custom_rule_action_form_build' => array(
        'label' => t('Form build'),
        'group' => t('Custom Rule actions'),
        ),
      );
    }
    
    function custom_rule_action_form_build() {
    
	  drupal_goto($path = 'http://drupal7/dt_request_form');
    
    }
    