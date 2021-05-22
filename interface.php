<?php
// Interface
// -interface adalah sebuah kelas abstrak yang tidak memiliki implementasi
// -Murni, hanya berupa struktur/tamplate untuk kelas turunanya
// -Tidak boleh memiliki properti dan methode biasa, hanya deklarasi methode saja
// -boleh mendeklarasikan __construct() 
// -semua methode harus dideklarasikan dengan visibility public
// -satu kelas boleh memiliki lebih dari satu interface
// -kelas turunanya wajib mengimplementasikan semua methode yang ada di interface
// -untuk mendeklarasikan interface mengguanakan keyword interface
// -untuk mengimplementasikan interface di menggunakan keyword implements
// Membuat sebuah interface
interface Hewan{
    public function setName($nama);
    public function getSound();
}
// mengimplementasikan interface ke kelas turunan
class Anjing implements Hewan{
    // property
    private $nama;
    // penjabaran isi methode interface
    public function setName($nama = "Hewan"){
        $this->nama = $nama;
    }
    public function getSound(){
        return "Meoww";
    }
    // Methode milik Anjing
    public function getName(){
        return $this->nama;
    }
}
// Instansiasi
// Object
$anjing = new Anjing();
$anjing->setName("Anjing");
echo "{$anjing->getName()} Bersuara {$anjing->getSound()}";
?>