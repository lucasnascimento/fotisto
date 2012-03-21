<?php
class Product extends AppModel {
    public $name = 'Events_Products';
    public $belongsTo = array(
        'Event', 'Product'
    );
}