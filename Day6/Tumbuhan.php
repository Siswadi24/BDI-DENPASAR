<?php

class Tumbuhan{
    public $jenis;
    public $jenisdaun;
    public $jenisakar;


    public function setJenis($jenis = "alga" )
    {
        $this-> jenis = $jenis;
    }

    public function setjenisDaun($jenisdaun = "sejajar")
    {
        $this-> jenisdaun = $jenisdaun;
    }

    public function setjenisAkar($jenisakar = "tunggang")
    {
        $this->jenisakar = $jenisakar;
    }

    public function getData()
    {
        return array(
            "jenis" => $this->jenis,
            "jenisdaun" => $this-> jenisdaun,
            "jenisakar" => $this-> jenisakar
        );
    }
}
