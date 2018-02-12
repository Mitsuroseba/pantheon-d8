<?php

namespace Drupal\remote_properties\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements exposed form.
 */
class ExposedForm extends FormBase {
  const FILTERS_MAP = [
    'date_from' => 20170202,
    'date_to' => 20170203,
    'count' => 10,
    'offset' => 0,
  ];

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'exposed_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    foreach (ExposedForm::FILTERS_MAP as $filter => $default) {
      $form[$filter] = array(
        '#type' => 'textfield',
        '#title' => ucfirst(str_replace('_', ' ', $filter)),
        '#required' => TRUE,
        '#default_value' => $this->getRequest()->get($filter) ?: $default,
      );

      if (strpos($filter, 'date_') === 0) {
        $form['#attributes'] = [
          'placeholder' => 'Ymd',
        ];
      }
    }

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $query_options = [];
    foreach (ExposedForm::FILTERS_MAP as $filter => $default) {
      $query_options[$filter] = $form_state->getValue($filter);
    }

    $form_state->setRedirect('remote_properties.list', [], [
      'query' => $query_options,
    ]);
  }

}
