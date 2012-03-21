<?php
class Customer extends AppModel {
    public $name = 'Customer';
    public $belongsTo = 'Photographer';
}