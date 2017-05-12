<?php

namespace Drupal\context_metadata\Plugin\ContextReaction;

use Drupal\context\ContextReactionPluginBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a content reaction that adds a Metadata.
 *
 * @ContextReaction(
 *   id = "context_metadata",
 *   label = @Translation("Context Metadata")
 * )
 */
class ContextMetadata extends ContextReactionPluginBase {

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    /*$values = $this->fetch_from_context($context);

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
      '#maxlength' => 400,
      '#default_value' => isset($values['metadata_description']) ? $values['metadata_description'] : '',
    );

    $form['metadata_keywords'] = array(
      '#title' => t('Meta Keywords'),
      '#description' => t('Meta Keywords'),
      '#type' => 'textfield',
      '#maxlength' => 400,
      '#default_value' => isset($values['metadata_keywords']) ? $values['metadata_keywords'] : '',
    );

    $form['metadata_canonical'] = array(
      '#title' => t('Canonical URL'),
      '#description' => t('Canonical URL'),
      '#type' => 'textfield',
      '#maxlength' => 400,
      '#default_value' => isset($values['metadata_canonical']) ? $values['metadata_canonical'] : '',
    );

    $form['metadata_h1'] = array(
      '#title' => t('H1 tag'),
      '#description' => t('Overrides the H1 title'),
      '#type' => 'textfield',
      '#maxlength' => 400,
      '#default_value' => isset($values['metadata_h1']) ? $values['metadata_h1'] : '',
    );

    $form['metadata_robots'] = array(
      '#title' => t('Robots'),
      '#description' => t('Robots'),
      '#type' => 'textfield',
      '#maxlength' => 400,
      '#default_value' => isset($values['metadata_robots']) ? $values['metadata_robots'] : '',
    );

    $form['tokens'] = array(
      '#theme' => 'token_tree',
      '#token_types' => array('node'), // The token types that have specific context. Can be multiple token types like 'term' and/or 'user'
      '#global_types' => TRUE, // A boolean TRUE or FALSE whether to include 'global' context tokens like [current-user:*] or [site:*]. Defaults to TRUE.
      '#click_insert' => TRUE, // A boolean whether to include the 'Click this token to insert in into the the focused textfield' JavaScript functionality. Defaults to TRUE.
    );

    return $form;*/
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    /*$this->setConfiguration([
      'body_class' => $form_state->getValue('body_class'),
    ]);*/
  }

  /**
   * {@inheritdoc}
   */
  public function summary() {
    return $this->getConfiguration()['context_metadata'];
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
      'context_metadata' => '',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function execute(array &$vars = []) {
    /*$contexts = context_active_contexts();
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
    }*/
  }

}
