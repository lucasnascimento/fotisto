<?php
class Event extends AppModel {
    public $name = 'Event';
    public $belongsTo = 'Photographer';
    public $belongsTo = 'Customer';
    public $hasMany = array(
    		'Photo' => array(
    				'className'  => 'Photo',
    				'order'      => 'Photo.created_at DESC'
    		),
			'ProductsContracted'
    );
    public $hasAndBelongsToMany = array(
    		'Product' =>
    		array(
    				'className'              => 'Product',
    				'joinTable'              => 'photos_products',
    				'foreignKey'             => 'photo_id',
    				'associationForeignKey'  => 'product_id',
    				'unique'                 => true,
    				'conditions'             => '',
    				'fields'                 => '',
    				'order'                  => '',
    				'limit'                  => '',
    				'offset'                 => '',
    				'finderQuery'            => '',
    				'deleteQuery'            => '',
    				'insertQuery'            => ''
    		)
    );
}