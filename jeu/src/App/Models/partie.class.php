<?php

class Partie {
    public string $dateTime;
    public string $score;
    public string $gagne;

    public function __construct($dateTime, $score, $gagne){
        $this->dateTime = $dateTime;
        $this->score = $score;
        $this->gagne = $gagne;
    }
}