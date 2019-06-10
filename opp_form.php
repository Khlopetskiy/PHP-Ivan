<?php

require 'classes/Form.php';

$form = new Form();
$form->add('text', 'name');
$form->add('date', 'dob');

var_dump($form->getElements());