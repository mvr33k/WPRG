<?php

class NoweAuto
{
    public function __construct()
    {
        $this->model = "Multipla";
        $this->cena = 10000;
        $this->kurs = 5;
    }

    protected $model;
    protected $cena;
    protected $kurs;


    public function obliczCene()
    {
        return $this->kurs * $this->cena;
    }
}

//$auto = new NoweAuto();
//echo $auto->obliczCene();