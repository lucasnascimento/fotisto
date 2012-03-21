<?php
class Photo extends AppModel {
    public $name = 'Photo';
    public $belongsTo = 'Event';
}