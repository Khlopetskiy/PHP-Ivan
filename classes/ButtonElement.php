<?php


class ButtonElement extends FormElement
{
    public function render(): string
    {
        return sprintf('<button type="%s">%s</button>', $this->type, $this->getLable());
    }
}