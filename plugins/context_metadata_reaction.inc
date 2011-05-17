<?php

/**
 * Output context maxage.
 */
class context_metadata_reaction extends context_reaction {
 
  function options_form($context) {
    $values = $this->fetch_from_context($context);

    $form['metadata_title'] = array(
      '#title' => t('Meta Title'),
      '#description' => t('<title>Title goes here</title>'),
      '#type' => 'textfield',
      '#default_value' => isset($values['metadata_title']) ? $values['metadata_title'] : '',
    );
    
    return $form;
  } 


  /**
   * Output a list of active contexts.
   */
  function execute() {
    $contexts = context_active_contexts();
    
    foreach ($contexts as $context) {
      if (!empty($context->reactions['metadata'])) {        
        $metadata = $context->reactions['metadata'];
        
        // TODO: extend this for multiple meta tags
        if (!empty($metadata['metadata_title'])) {
          
          // TODO: set the tags          
        } 

      }
    }
  }

}