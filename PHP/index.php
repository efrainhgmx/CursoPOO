<?php

require_once ("car.php");
require_once ("uberX.php");
require_once ("uberPool.php")
require_once ("account.php");

$uberX = new UberX("CVB567", new Account("Martha Ibiza", "MIZ789"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("SHU507", new Account("Ivan Martinez", "VIA799"), "Ford", "Focus");


?>