
<?php
require_once "class/autoload.php";

$productos = Productos::listarCompleto();

require_once "views/home.php";
