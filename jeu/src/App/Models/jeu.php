<?php

abstract class Jeu {
    public string $regles;

    public function __construct($regles){
        $this->regles = $regles;
    }
}