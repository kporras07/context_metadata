<?php

namespace Drupal\context_metadata\Plugin\ContextReaction;

use Drupal\context\ContextReactionPluginBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\Html;

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
    $form['metadata_title'] = array(
      '#title' => $this->t('Meta Title'),
      '#description' => $this->t('Title goes here'),
      '#type' => 'textfield',
      '#maxlength' => 256,
      '#default_value' => $this->getConfiguration()['metadata_title'],
    );

    $form['metadata_description'] = array(
      '#title' => $this->t('Meta Description'),
      '#description' => $this->t('Meta Description'),
      '#type' => 'textfield',
      '#maxlength' => 400,
      '#default_value' => $this->getConfiguration()['metadata_description'],
    );

    $form['metadata_keywords'] = array(
      '#title' => $this->t('Meta Keywords'),
      '#description' => $this->t('Meta Keywords'),
      '#type' => 'textfield',
      '#maxlength' => 400,
      '#default_value' => $this->getConfiguration()['metadata_keywords'],
    );

    $form['metadata_canonical_url'] = array(
      '#title' => $this->t('Canonical URL'),
      '#description' => $this->t('Canonical URL'),
      '#type' => 'textfield',
      '#maxlength' => 400,
      '#default_value' => $this->getConfiguration()['metadata_canonical_url'],
    );

    $form['metadata_h1'] = array(
      '#title' => $this->t('H1 tag'),
      '#description' => $this->t('Overrides the H1 title'),
      '#type' => 'textfield',
      '#maxlength' => 400,
      '#default_value' => $this->getConfiguration()['metadata_h1'],
    );

    // TODO: Add this once we have other metadata working
    /*$form['metadata_robots'] = array(
      '#title' => $this->t('Robots'),
      '#description' => $this->t('Robots'),
      '#type' => 'textfield',
      '#maxlength' => 400,
      '#default_value' => $this->getConfiguration()['metadata_robots'],
    );*/

    // TODO: Add this once we have other metadata working
    /*$form['tokens'] = array(
      '#theme' => 'token_tree',
      '#token_types' => array('node'), // The token types that have specific context. Can be multiple token types like 'term' and/or 'user'
      '#global_types' => TRUE, // A boolean TRUE or FALSE whether to include 'global' context tokens like [current-user:*] or [site:*]. Defaults to TRUE.
      '#click_insert' => TRUE, // A boolean whether to include the 'Click this token to insert in into the the focused textfield' JavaScript functionality. Defaults to TRUE.
    );*/

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    $this->setConfiguration([
      'metadata_title' => $form_state->getValue('metadata_title'),
      'metadata_description' => $form_state->getValue('metadata_description'),
      'metadata_keywords' => $form_state->getValue('metadata_keywords'),
      'metadata_canonical_url' => $form_state->getValue('metadata_canonical_url'),
      'metadata_h1' => $form_state->getValue('metadata_h1'),
      'metadata_robots' => $form_state->getValue('metadata_robots'),
    ]);
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
      'metadata_title' => '',
      'metadata_description' => '',
      'metadata_keywords' => '',
      'metadata_canonical_url' => '',
      'metadata_h1' => '',
      'metadata_robots' => '',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function execute(array &$vars = []) {
    $config = $this->getConfiguration();
    return $config;
  }

}
