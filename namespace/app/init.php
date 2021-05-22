<?php
// fungsi autoload
spl_autoload_register(function($class){
    // memecah string untuk mendapakan nama kelas
    $class = explode('\\', $class);
    $class = end($class);
    // merequire semua class yang ada di dalam folder produk
    require_once __DIR__ . '/produk/' . $class . '.php';
});