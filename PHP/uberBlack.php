<?php

require_once('car.php');
class UberBlack extends Car {
    public $typeCarAcceted;
    public $seatsMaterial;

    public function __construct($license, $driver, $typeCarAcceted, $seatsMaterial) {
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAcceted;
        $this->seatsMaterial = $seatsMaterial;
    }
}

?>