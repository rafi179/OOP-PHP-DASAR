<?php
// ABSTACT CLASS
// -sebuah kelas abstrak minimal harus ada satu buah methode abstrak.
// -kelas abstrak juga boleh memiliki sebuah methode dan property regular/biasa.
// -sebuah abstrak kelas tidak bisa di instansiasi/dibuatkan sebuah object
// -jika ada sebuah parent class yang tidak akan pernah di instansiasi/dibuat sebuah object,- 
// maka kelas tersebut lebih baik dijadikan sebuah kelas abstrak.
abstract class Buah{
    // property
    public $nama = "Buah",
           $warna = "warna";
    // constructor
    public function __construct($nama, $warna){
        $this->nama = $nama;
        $this->warna = $warna;
    }
    // methode abstrak
    abstract public function rasa();
    // methode
    public function getInfo(){
        return "Buahnya adalah {$this->nama}, memiliki warna {$this->warna}";
    }
}
// kelas anak/child class
class Mangga extends Buah {
    // penjabaran isi dari methode abstrak yang ada di kelas induk
    public function rasa(){
        echo "Buah {$this->nama} memiliki rasa yang manis seperti {$this->nama}.";
    }
}
class Apel extends Buah {
    // penjabaran isi dari methode abstrak yang ada di kelas induk
    public function rasa(){
        echo "Buah {$this->nama} memiliki rasa yang asam, manis dan gurih seperti {$this->nama}.";
    }
}
// Insatansiasi
// Object satu 
$mangga = new Mangga("Mangga", "Hijau");
echo "BUAH MANGGA <br><br>{$mangga->getInfo()}";
echo "<br>";
$mangga->rasa();
// Object dua
$apel = new Apel("Apel", "Merah");
echo "<hr>BUAH APEL <br><br>";
echo $apel->getInfo();
echo "<br>";
$apel->rasa();
?>