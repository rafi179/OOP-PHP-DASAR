<?php
// membuat parent class
class BuahSurga {
    // property
    public $nama,
           $warna,
           $rasa;
    // Constructor
    public function __construct($nama = "Buah", $warna = "Warni", $rasa = "biasa"){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->rasa = $rasa;
    }
    // methode
    public function getInfoBuah(){
        return "Buahnya adalah {$this->nama}, berwarna {$this->warna} serta memiliki rasa {$this->rasa}.";
    }
}
// Inheritance
// membuat child class/kelas anaknya yang mewariskan parent class (Kelas Buah)
class Khuldi extends BuahSurga{
    // methode
    public function pesan(){
        return "Buah Apakah ini? ";
    }
}
// membuat object dari kelas anak yang mewarisi kelas buah
$khuldi = new Khuldi("Khuldi", "Merah", "Unik");
// memanggil fungsi pesan yang ada pada object khuldi
echo $khuldi->pesan();
// memanggil fungsi getInfoBuah() yang sudah diwariskan ke kelas khuldi
echo $khuldi->getInfoBuah();