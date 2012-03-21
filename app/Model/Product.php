<?php
class Product extends AppModel {
    public $name = 'Product';
    public $belongsTo = 'Photographer';
    public $hasMany = array(
    		'ProductsContracted'
    );
}