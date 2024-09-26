<?php

require_once 'vendor/autoload.php';

use Tracy\Debugger;
Debugger::enable();

$frutas = ['Naranjas', 'Fresas', 'Melocotones'];

Debugger::barDump($frutas);

echo "<h1>Debuggeando con Tracy</h1>";

try{
    throw new Exception("ERROR");
}catch(Exception $e){
    Debugger::log($e);
}