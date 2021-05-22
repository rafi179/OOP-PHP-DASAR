<?php
// membuat sebuah kelas
class Anime {
    // membuat sebuah properti untuk kelas Anime dengan akses modifier public
    public $title = "None",
           $season = "None",
           $studio = "None",
           $source = "None",
           $genre = "None";
    // membuat sebuah methode getLabel untuk kelas Anime
    public function getLabel(){
        return "Season : $this->season <br> 
                Studio : $this->studio <br>
                Source : $this->source <br>
                Genre : $this->genre";
    }
}
// Objcet pertama
$anime1 = new Anime();
// menampilkan isi dari properti title
echo "ANIME DETAIL <br><br>
      Title : $anime1->title<br>";
// menampilkan isi dari methode getLabel
echo $anime1->getLabel();
// Objek kedua
$anime2 = new Anime();
// menimpa/membuat isi baru dari properti untuk Object kedua
$anime2->title = "The Slime Diaries: That Time I Got";
$anime2->season = "Spring 2021";
$anime2->studio = "8bit";
$anime2->source = "Manga";
$anime2->genre = "Comedy, Fantasy, Shounen, Slice Of Life";
// menampilkan isi properti yang sudah diubah
echo "<br><br>title : $anime2->title <br>";
echo $anime2->getLabel();