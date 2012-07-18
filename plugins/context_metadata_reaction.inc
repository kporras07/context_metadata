<?php

/**
 * Output context maxage.
**/
class context_metadata_reaction extends context_reaction {
  function options_form($context) {
    $values = $this->fetch_from_context($context);
    $form['metadata_title'] = array(
      '#title' => t('Meta Title'),
      '#description' => t('Title goes here'),
      '#type' => 'textfield',
      '#maxlength' => 256,
      '#default_value' => isset($values['metadata_title']) ? $values['metadata_title'] : '',
    );
    $form['metadata_description'] = array(
      '#title' => t('Meta Description'),
      '#description' => t('Meta Description'),
      '#type' => 'textfield',
      '#maxlength' => 400, // some say this this is the max recommended length
      '#default_value' => isset($values['metadata_description']) ? $values['metadata_description'] : '',
    );
    $form['metadata_keywords'] = array(
      '#title' => t('Meta Keywords'),
      '#description' => t('Meta Keywords'),
      '#type' => 'textfield',
      '#maxlength' => 400, // some say this this is the max recommended length
      '#default_value' => isset($values['metadata_keywords']) ? $values['metadata_keywords'] : '',
    );
    $form['metadata_canonical'] = array(
      '#title' => t('Canonical URL'),
      '#description' => t('Canonical URL'),
      '#type' => 'textfield',
      '#maxlength' => 400, // some say this this is the max recommended length
      '#default_value' => isset($values['metadata_canonical']) ? $values['metadata_canonical'] : '',
    );
    if (module_exists('token')) {
      $form['token_help'] = array(
        '#title' => t('Replacement patterns'),
        '#type' => 'fieldset',
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
      );
      $form['token_help']['help'] = array(
        '#value' => theme('token_help', 'node'),
      );
    }
    return $form;
  }


  /**
   * Output a list of active contexts.
   */
  function execute() {
    $contexts = context_active_contexts();
    foreach ($contexts as $context) {
      if (!empty($context->reactions['context_metadata'])) {
        $metadata_array = $context->reactions['context_metadata'];

        foreach ($metadata_array as $key => $value) {
          if (!empty($value)) {
            $static_metadata_array[$key] = t(check_plain($value));
          }
        }

        // store the array
        context_metadata_static_store($static_metadata_array);
      }
    }
  }
}
