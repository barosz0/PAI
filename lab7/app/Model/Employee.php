<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {
    var $validate = array(
        'nazwisko' => array('rule' => 'notBlank','required' => true,),
        'etat' => array('rule' => 'notBlank','required' => true,),
        'placa_pod' => array(
            'rule' => array( 'range', 0,2000),
            'message' => 'Podaj wartosc od 0 do 2000'
        ),
        
    );     


}
