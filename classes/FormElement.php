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

   public function __construct(string $name, string $label) {
       $this->name = $name;
       $this->label = $label;
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
    }



    abstract public function render():string;

}