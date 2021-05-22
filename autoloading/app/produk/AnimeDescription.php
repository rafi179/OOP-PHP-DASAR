<?php
// membuat kelas AnimeDescription 
class AnimeDescription{
    // methode dengan parameter type data Anime
    public function getDescription(Anime $anime){
        return "<br><br>Judul : {$anime->title} <br>{$anime->getLabel()}";
    }
}
?>