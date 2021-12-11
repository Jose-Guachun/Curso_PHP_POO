<?php
/**
 ****************Inclusion de Archivos
 */
include 'greet.php';//nos permite incluir un archivo dentro de otro. Sino lo encuentra solo genera un warning que permite continuar.
require 'greet.php';//lo mismo que include pero más exigente, en caso de fallo producirá un error fatal, no permitirá continuar con el proceso.
require_once 'greet.php';//idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye.

echo greet("hola","como estas?");