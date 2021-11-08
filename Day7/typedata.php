<?php

class Mahasiswa {
    public $name;

    public function setName($new_name)
    {
        $this->name = $new_name;
    }

    public function getName() {
        return $this->name;
    }
}