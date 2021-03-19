<?php

namespace Drupal\rows\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\RedirectResponse;


class RowsForm extends FormBase {

    #Funció pública amb la que identificarem el formulari
    public function getFormId() {
        return 'rows_form';
    }

    #Funció de creació del formulari per demanar el número de files que volem
    public function buildForm(array $form, FormStateInterface $form_state) {
        #Definició de camps del formulari
        $form['numero'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Numero'),
            '#size' => 5,
            '#maxlength' => 5,
            '#required' => TRUE,
        ];

        #Botó d'enviament del formulari
        $form['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Enviar'),
        ];

        return $form;
    }

    #Funció que ens crea una pàgina nova amb el número del formulari que aprofitarem per donar el print de les files
    public function submitForm(array &$form, FormStateInterface $form_state) {

        $node = $this->t('/drupal-9.1.5/rows/@numero', ['@numero' => $form_state->getValue('numero')]);

        $response = new RedirectResponse($node);
        $response->send();

        return;
    }


}
