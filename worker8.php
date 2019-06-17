<?php

include 'worker7.php';

class SmartForm extends Form {
public function textarea($array)
{
    $text = parent::html($array);
    $valuetext = !empty($_REQUEST['text']) ? $_REQUEST['text'] : '';
    return '<textarea ' . $text . '>' . $valuetext . '</textarea>';
}

public function input($array)
{
    if (isset($array['name']) && isset ($_REQUEST[$array['name']])) {
        $array['value'] = $_REQUEST[$array['name']];
    }
    return parent::input($array);
}
}

$form = new SmartForm();


echo $form->textarea(['type'=>'text', 'placeholder'=>'write your text', 'name'=>'text']);


