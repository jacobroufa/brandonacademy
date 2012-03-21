<?php

function brandonacademy_form_alter(&$form, &$form_state, $form_id) {
//  dsm($form);

  if ($form_id == 'views_exposed_form') {
    $form['sitewide']['#title'] = t('Search');
    $form['sitewide']['#title_display'] = 'invisible';
    $form['sitewide']['#default_value'] = t('Type a musician, band, or song title');
    $form['sitewide']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Type a musician, band, or song title';}";
    $form['sitewide']['#attributes']['onfocus'] = "if (this.value == 'Type a musician, band, or song title') {this.value = '';}";
    $form['submit']['#value'] = t('Search');
    $form['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search.png');
  }

  if ($form_id == 'webform_client_form_1088') {
    unset($form['actions']['submit']['#ajax']['progress']);
  }

  if ($form_id == 'webform_ajax_get_webform_form') {
    unset($form['submit']['#ajax']['progress']);
  }

}
