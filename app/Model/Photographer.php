<?php
App::uses('AppModel', 'Model');

class Photographer extends AppModel {
    public $name = 'Photographer';
    public $hasMany = array(
    		'Customer' => array(
    				'className'  => 'Customer',
    				'conditions' => array('Customer.active' => 'y'),
    				'order'      => 'Customer.created_at DESC'
			),
			'Event' => array(
    				'className'  => 'Event',
    				'conditions' => array('Event.active' => 'y'),
    				'order'      => 'Event.created_at DESC'
    		)
    );
}