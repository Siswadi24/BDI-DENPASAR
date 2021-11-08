<?php
class Tumbuhan {
    public $daun,$akar,$batang,$buah;

    public function setdaun($data_baru = null)
    {
        $this->berdaun = $data_baru;
    }

    public function setAkar($data_baru = null)
    {
        $this->berakar = $data_baru;
    }

    public function setbatang($data_baru = null)
    {
        $this->berbatang = $data_baru;
    }

    public function setbuah($data_baru = null)
    {
        $this->berbuah = $data_baru;
    }

    public function getData() {
        return array (
            "Berdaun" => $this->berdaun,
            "Berakar" => $this->berakar,
            "Batang" => $this->berbatang,
            "Buah" => $this->berbuah
        );
    }
}