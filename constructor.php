<?php
// membuat sebuah kelas
class Anime {
    // property
    public $title,
           $season,
           $studio,
           $source,
           $genre;
    // membuat sebuah konstruktor untuk kelas Anime
    public function __construct($title = "None", $season = "None", $studio = "None", $source = "None", $genre = "None")
    {
        $this->title = $title;
        $this->season = $season;
        $this->studio = $studio;
        $this->source = $source;
        $this->genre = $genre;
    }
    //Methode
    public function getLabel(){
        return "Season : $this->season <br> 
                Studio : $this->studio <br>
                Source : $this->source<br>
                Genre : $this->genre";
    }
}
// membuat sebuah object dari kelas Anime yang sudah ada konstruktor di dalamnya
// saat sebuah object di buat maka konstruktor otomatis di dijalankan
$anime1 = new Anime("The Slime Diaries: That Time I Got", "Spring 2021", "8bit", "Manga", "Comedy, Fantasy, Shounen, Slice Of Life");
// menampilkan isi properti yang sudah di isi lewat fungsi konstruktor
echo "ANIME DETAIL <br><br>Judul : $anime1->title <br>";
echo $anime1->getLabel();