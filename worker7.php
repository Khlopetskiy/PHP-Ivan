<?php


class Form
{
    public function html ($array) {
        $str = "";
        foreach ($array as $kay=>$item) {
            $str .= "$kay = '$item'";
        }
        return $str;
    }

    public function open($array) {
        $open = $this->html($array);
        return "<form".$open."><br>";
    }

    public function input($array) {
        $input = $this->html($array);
        return '<input ' .$input. '><br>';

    }

    public function submit($array) {
        $subm = $this->html($array);
        return "<input type='submit'" . $subm . "><br>";
    }

    public function password($array) {
        $pass = $this->html($array);
        return "<input type = 'password'" . $pass . "><br>";
    }

    public function textarea($array) {
        $text = $this->html($array);
        return '<textarea ' . $text . '></textarea><br>';
    }

    public function close() {
        return "</form>";
    }
}


$form = new Form();
echo $form->open(['action'=>'worker7.php', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'placeholder'=>'имя', 'name'=>'name']);
echo $form->password(['placeholder'=>'Пароль', 'name'=>'pass']);
echo $form->submit(['value'=>'Отправить']);
echo $form->close();

?>
