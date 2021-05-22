<?php
// Visibility/Akses modifier
// Private hanya dapat diakses di dalam kelas saja
// Protected bisa diakses di dalam kelasya dan di dalam kelas yang mewarisinya
// public bisa diakses dimana saja
// membuat parent class
class BuahSurga {
    // property private
    private $nama,
            $warna,
            $rasa;
    // Constructor public
    public function __construct($nama = "Buah", $warna = "Warni", $rasa = "biasa"){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->rasa = $rasa;
    }
    // methode protected
    protected function getInfoBuah(){
        return "Buahnya adalah {$this->nama}, berwarna {$this->warna} serta memiliki rasa {$this->rasa}, ";
    }
    // methode getter
    public function getName(){
        return $this->nama;
    }
    // methode setter
    public function setName($nama){
        $this->nama = $nama;
    }
}
// Inheritance
// membuat child class/kelas anaknya yang mewariskan parent class (Kelas Buah)
class Khuldi extends BuahSurga{
    // property
    private $habitat;
    // constructor
    public function __construct($nama = "Buah", $warna = "Warni", $rasa = "biasa", $habitat = "dimana saja"){
        // overriding metode constructor
        parent::__construct($nama, $warna, $rasa);
        $this->habitat = $habitat;
    }
    // methode public 
    public function pesan(){
        // methode getInfoBuah() bisa berjalan di dalam kelas yang mewarisinya karena visibilitya protected
        return "Buah Apakah ini? {$this->getInfoBuah()}";
    }
    public function infoHabitat(){
        return "banyak ditemukan di {$this->habitat}.";
    }
}
// membuat object dari kelas anak yang mewarisi kelas buah
$khuldi = new Khuldi("Khuldi", "Merah", "Unik", "Surga");
// memanggil fungsi pesan yang ada pada object khuldi
echo $khuldi->pesan();
// fungsi getInfoBuah() tidak bisa di jalankan di luar kelas karena visibilitya protected
// echo $khuldi->getInfoBuah();
echo $khuldi->infoHabitat();
echo "<hr>";
// memanggil methode getter dan setter 
$khuldi->setName("Apel");
echo "Nama Buah : {$khuldi->getName()}";