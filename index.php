<?php
 
 ini_set("date.timezone","America/Guayaquil");
require_once 'controller/FrontController.php';
$ruteador = new FrontController();
$ruteador->rutear();

       