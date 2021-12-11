<?php
/**
 *****************ALCANCE O ENCAPSULAMIENTO*************
 *mantener la integridad de los datos
 */
class User
{
    //public:     son aquello que pueden ser accedidos a lo largo de todo el sistema
    //protected:  solo pueden acceder aquellas clases que hereden de mi
    //private:    nadie puede acceder ni siquiera los hijos que hereden de mi
    public const PAGINACION = 25;

    //public Se accede desde cualquier otra clase o fuera de esta clase
    public $username;
    //protected $username;
    //private $username;
    
    //protected solo se accedera cuando se tenga herencia de tablas.
    protected function nombrar($nombre)
    {
       $username=$nombre;
    }
}
//public
$user=new User;
$user->username="Juan";




