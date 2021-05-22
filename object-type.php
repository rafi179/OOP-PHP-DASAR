<?php
// membuat kelas Anime
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
// membuat kelas AnimeDescription 
class AnimeDescription{
    // methode dengan parameter type data Anime
    public function getDescription(Anime $anime){
        return "<br><br>Judul : {$anime->title} <br>{$anime->getLabel()}";
    }
}
// Object Pertama
$anime1 = new Anime("The Slime Diaries: That Time I Got", "Spring 2021", "8bit", "Manga", "Comedy, Fantasy, Shounen, Slice Of Life");
// Object kedua
$anime2 = new Anime("Eighty Six", "Spring 2021", "A-1 Pictures", "Light Novel", "Action, Drama, Mecha, Sci-Fi");
// membuat object dengan kelas AnimeDescription
$deskripsi = new AnimeDescription();
// menampilkan isi dari object kedua dan pertama menggunakan methode yang ada pada kelas AnimeDescription
echo "ANIME DETAIL";
echo $deskripsi->getDescription($anime1);
echo $deskripsi->getDescription($anime2);