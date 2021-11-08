<?php
//Tugas Nomor 1
// $kota_kabupatenBali = array(
//     ("Kota Badung"),
//     ("Kabupaten Gianyar"),
//     ("Kabupaten Buleleng"),
//     ("Kabupaten Bangli"),
//     ("Kota Denpasar")
// );

// $bali = count($kota_kabupatenBali);

// for ($i = 0; $i < $bali; $i++) {
//     echo $kota_kabupatenBali[$i];
//     echo "<br>";
// }
// print_r($kota_kabupatenBali);


//Tugas Nomor 2

//Cara Mas Khamid
// $obj = (object)[
//     "nama_provinsi" => "Bali",
//     "ibu_kota" => "Denpasar",
//     "website" => "www.baliprov.go.id",
//     "Gubernur" => "Ahmad Zamzami",
//     "Wakil Gubernur" => "Siswadi Perdana Putra"
// ];

// echo "<pre>" . print_r($obj, true) . "</pre>";

class DataBali
{
    public $Nama, $ibuKota, $Website, $Gubernur, $WakilGubernur;

    //Cara Mas Wahyu
    public function __construct($Nama, $ibuKota, $Website, $Gubernur, $WakilGubernur)
    {
        $this->nama = $Nama;
        $this->ibukota = $ibuKota;
        $this->website = $Website;
        $this->gubernur = $Gubernur;
        $this->wakilgubernur = $WakilGubernur;
    }

    //method
    // function set_nama($Nama)
    // {
    //     $this->nama = $Nama;
    // }

    // function get_nama()
    // {
    //     return $this->nama;
    // }

    // function set_ibukota($ibuKota)
    // {
    //     $this->ibuKota = $ibuKota;
    // }

    // function get_ibukota()
    // {
    //     return $this->ibuKota;
    // }

    // function set_website($Website)
    // {
    //     $this->website = $Website;
    // }

    // function get_website()
    // {
    //     return $this->website;
    // }

    // function set_gubernur($Gubernur)
    // {
    //     $this->gubernur = $Gubernur;
    // }

    // function get_gubernur()
    // {
    //     return $this->gubernur;
    // }

    // function set_wakilGubernur($WakilGubernur)
    // {
    //     $this->wakilgubernur = $WakilGubernur;
    // }

    // function get_wakilGubernur()
    // {
    //     return $this->wakilgubernur;
    // }
}

//Manggil Cara Mas Wahyu
// $ProvBali = new DataBali("Bali", "Kota Denpasar", "www.baliprov.go.id", "Zamzami", "Dana");
// echo $ProvBali->gubernur;

//$provinsiBali = new DataBali();
// $provinsiBali->set_nama("Kota Denpasar");
// $provinsiBali->set_ibukota("Denpasar");
// $provinsiBali->set_website("www.baliprov.go.id");
// $provinsiBali->set_gubernur("Perdana Putra");
// $provinsiBali->set_wakilGubernur("Siswadi");


// echo "Nama : " . $provinsiBali->get_nama() . "<br>";
// echo "Ibu Kota Bali : " . $provinsiBali->get_ibukota() . "<br>";
// echo "Website Kota Bali : " . $provinsiBali->get_website() . "<br>";
// echo "Nama Gubernur : " . $provinsiBali->get_gubernur() . "<br>";
// echo "Nama Wakil Gubernur : " . $provinsiBali->get_wakilGubernur() . "<br>";

//Soal Nomor 3


//Soal Nomor 4
// $variabel1 = 3;
// $variabel2 = 3;
function Pengurangan(int $variabel1, int $variabel2)
{
    return $hasil = $variabel1 - $variabel2;
    //echo "Hasil :" . $hasil;
}
//echo "Hasil : " . Pengurangan(4, 3) . "<br>";
echo Pengurangan(4, 3) . "<br>";


//Soal Nomor 5
function Penggabungan(string $variabel1, string $variabel2)
{
    return $hasilgabung = $variabel1 . $variabel2;
    //echo "Hasil :" . $hasilgabung;
}
echo "Hasil : " . Penggabungan("Dana", "Perdana");
