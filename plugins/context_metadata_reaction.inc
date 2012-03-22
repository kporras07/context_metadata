<?php

/**
 * @file context reaction
 */
class context_metadata_reaction extends context_reaction {

  function options_form($context) {
    $values = $this->fetch_from_context($context);

    $form['metadata_title'] = array(
      '#title' => t('Meta Title'),
      '#description' => t('Title goes here'),
      '#type' => 'textfield',
      '#maxlength' => 256, // some say this this is the max recommended length
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

        $metadata = &drupal_static('metadata_array');
        foreach ($metadata_array as $key => $value) {
          if (!empty($value)) {
            $metadata[$key] = t(check_plain($value));
          }
        }
      }
    }
  }
}
