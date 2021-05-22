<?php
// fungsi autoload
spl_autoload_register(function($class){
    // merequire semua class yang ada di dalam folder produk
    require_once __DIR__ . '/produk/' . $class . '.php';
});