<?php 
// constant yang hanya bisa dibuat diluar kelas
// define("NAMA_VARIABLE_CONSTANT","ISI DARI VARIABLE CONSTANT");
define("NAMA", "Rafi gunawan");
echo "CONSTANT DI LUAR KELAS <br>";
// mengakses constant/menampilkan isi dari variable constant
echo NAMA;
echo "<hr>";
// kelas 
class Salam{
    // property constant
    const salam = "Assalamualaikum Wr, Wb";
    // methode
    public function getSalam(){
        // mengakses properti constant di dalam kelas
        return self::salam;
    }
}
echo "CONSTANT DI DALAM KELAS<br>";
// mengakses constant secara langsung
echo Salam::salam;
// object
$salam = new Salam();
// mengakses constant menggunakan methode
echo "<br>{$salam->getSalam()}";
?>