<?php
//se extiende las clases User y Admin debido a que se requiere en este archivo
require_once "User.php";
require_once "Admin.php";

//creacion de un Objecto a partir del molde de User
$user=new User;
$user->type =new Admin;
echo $user->type->greet();






