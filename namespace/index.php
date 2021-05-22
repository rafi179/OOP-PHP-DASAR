<?php
require_once 'app/init.php';
// use namespace
use app\produk\Anime as Anime;
use app\produk\AnimeDescription as Description;
// Object Pertama
$anime1 = new Anime("The Slime Diaries: That Time I Got", "Spring 2021", "8bit", "Manga", "Comedy, Fantasy, Shounen, Slice Of Life");
// Object kedua
$anime2 = new Anime("Eighty Six", "Spring 2021", "A-1 Pictures", "Light Novel", "Action, Drama, Mecha, Sci-Fi");
// membuat object dengan kelas AnimeDescription
$deskripsi = new Description();
// menampilkan isi dari object kedua dan pertama menggunakan methode yang ada pada kelas AnimeDescription
echo "ANIME DETAIL";
echo $deskripsi->getDescription($anime1);
echo $deskripsi->getDescription($anime2);
?>