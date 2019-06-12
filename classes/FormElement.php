<?php


abstract class FormElement
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */

    private $label;
    /**
     * @var
     */

    protected $value;
    protected $required = false;

    /**
     * @var string
     */
    protected $error = '';

   public function __construct(string $name, string $label, bool $required = false) {
       $this->name = $name;
       $this->label = $label;
       $this->required = $required;
   }

    public function getName(): string
    {
        return $this->name;

    }



    public function getLable(): string
    {
        return $this->label;
    }

    /**
     * @return mixed
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
        if (empty($value) && $this->required) {
            $this->error= 'Поле должно бы пустым';
        }
    }

public function  getError(): string
{
    return $this->error;
}

    abstract public function render():string;

}