<?php
/**
 * ***************Polimorfismo***********
 * Utilizar una misma funcion en varias secciones del proyecto
 * en este caso se utiliza la case abstracta para todas las demas clases
 * utilizando su funcion para dar funcionamientos a las demas
 * las demas solo envian datos que son procesados a travez de esta principal clase
 * 
 */

require_once 'admin.php';
require_once 'user.php';
require_once 'guest.php';

abstract class Base
{
    protected $name;

    private function getClassName()
    {
        return get_called_class();
    }
    public function login()
    {
        return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
    }
}

$guest=new Guest();
echo $guest->login();

$user=new User('Jose');
echo $user->login();

$admin=new Admin('john');
echo $admin->login();