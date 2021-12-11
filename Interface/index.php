<?php
/**
 * *****INERFACE**************
 * mensionasmos los metodos que se van a utilizar mas no su funcionamiento
 * se puede usar en varias clases
 * si una clase implementa dicha interface esta obligado a cumplir con todos
 * los metodos mencionados en esa interfaz
 * 
 */


//contratos
interface Person
{
    public function getName();
}
class Admin implements Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}

$admin = new Admin('linda');
echo $admin->getName();
