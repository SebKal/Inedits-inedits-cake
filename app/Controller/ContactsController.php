<?php
/* Define dependancies */
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class ContactsController extends AppController {


/**
 * BeforeFilter
 *
 *
 */
public function beforeFilter() {
    parent::beforeFilter();

    // Permet aux utilisateurs de s'enregistrer et de se déconnecter
    $this->Auth->allow( 'send');
}

/**
 * index method
 *
 * @return void
 */
  public function send() {
    // debug($this->request->data);
    // exit();

    if ($this->request->is('post')) {
      $values = $this->request->data['User'];
    }

    $Email = new CakeEmail('contact');
    $Email
      ->viewVars( array('content' => $values['content'] ))
      ->send()
    ;
    $this->Session->setFlash(__('Merci de votre aide'), 'alert-box', array('class'=>'alert-success'));

    $this->redirect($this->referer());
  }

}
