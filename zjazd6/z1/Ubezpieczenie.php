<?php

require_once "AutoZDodatkami.php";
class Ubezpieczenie extends AutoZDodatkami
{

    public function __construct()
    {
        parent::__construct();
        $this->wartosc_ubezp=0.05;
        $this->lata=8;
    }
    protected $wartosc_ubezp;
    protected $lata;

    public function obliczCene()
    {
//        echo parent::obliczCene() . "\n";
        return $this->wartosc_ubezp * (parent::obliczCene()*(100-$this->lata)/100);
    }
}

$auto=new Ubezpieczenie();
echo $auto->obliczCene();

