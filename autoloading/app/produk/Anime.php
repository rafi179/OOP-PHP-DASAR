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
?>