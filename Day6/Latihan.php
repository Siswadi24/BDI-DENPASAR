<?php
class Mahasiswa
{
    public $nama;

    public function setNama($nama_baru = null)
    {
        $this->nama = $nama_baru;
    }

    public function getName()
    {
        return $this->nama;
    }
}
