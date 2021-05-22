<?php
//membuat kelas
class ContohStatic{
    // property
    public static $bil = 1;
    // methode
    public function sayHello(){
        return "Hello ".self::$bil++." Kali <br>";
    }
}
// memanggil property static tanpa membuat objcet
echo ContohStatic::$bil;
echo "<hr>";
// Object
$obj1 = new ContohStatic();
echo "OBJECT PERTAMA <br><br>";
echo $obj1->sayHello();
echo $obj1->sayHello();
echo $obj1->sayHello();
$obj2 = new ContohStatic();
echo "<hr>OBJECT KEDUA <br><br>";
echo $obj2->sayHello();
echo $obj2->sayHello();
echo $obj2->sayHello();