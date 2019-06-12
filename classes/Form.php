<?php


class Form
{
    /**
     * @var FormElement[]
     */
private $elements;
private  $method;

    /**
     * @var boolean
     */
public function __construct(string $method = 'post')
{
    $this->method = strtolower($method);
}

    public function add(FormElement $element) {
    $this->elements[$element->getName()] = $element;
}
public function getElements() {
    return $this->elements;
}

public function render() {
    $html = sprintf('<form method="%s">', $this->method);

    foreach ($this->elements as $element) {
        $html .= $element->render() . '<br>';
    }

    $html .='</form>';

    return $html;
}

public function handleRequest(){
    $data = $this->method == 'post' ? $_POST : $_GET;

    foreach ($this->elements as $element) {
        if ($data[$element->getName()]) {
            $this->isSubmitted = true;
            $element->setValue($data[$element->getName()]);
        }
    }
}

public function getValue($name)
{
    return $this->elements[$name]->setValue();
}

public function isSubmited(): bool
{
    return $this->isSubmited;
}
}