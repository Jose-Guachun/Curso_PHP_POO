<?php
//se requiere la clase person que esta en Person.php por lo que se lo llama
require_once "Person.php";

class Admin extends Person
{
    public $name='Administrador';

}