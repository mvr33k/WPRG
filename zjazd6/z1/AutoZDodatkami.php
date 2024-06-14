<?php

require_once "NoweAuto.php";

class AutoZDodatkami extends NoweAuto
{
    public function __construct()
    {
        parent::__construct();
        $this->alarm = 100.0;
        $this->radio = 200.0;
        $this->klimatyzacja = 300.0;
    }

    protected $alarm;
    protected $radio;
    protected $klimatyzacja;

    public function obliczCene()
    {
        return ($this->cena + $this->klimatyzacja + $this->radio + $this->alarm) * $this->kurs;
    }
}

//$auto = new AutoZDodatkami();
//echo $auto->obliczCene();