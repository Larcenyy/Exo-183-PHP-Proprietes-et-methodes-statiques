<?php

class VOD
{
    public $film  = array ('Harry Potter', 'Spider-man', "Film3", "Film4", 'Film5');
    public $tarif;
    public static $counter_follow = 0;

    public function setFilms($films) {
        $this->films = $films;
    }

    public function getFilms() {
        return $this->films;
    }

    public function setTarif($tarif) {
        $this->tarif = $tarif;
    }

    public function getTarif() {
        return $this->tarif;
    }

    public static function setNombreTotalAbonnes($counter_follow) {
        self::$counter_follow = $counter_follow;
    }

    public static function getNombreTotalAbonnes() {
        return self::$counter_follow;
    }

    public static function updateCounter($new_counter) {
        self::$counter_follow = $new_counter;
    }

    public static function checkCounter(){
        return self::$counter_follow;
    }
}



