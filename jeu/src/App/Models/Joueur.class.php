<?php

class Joueur extends Utilisateur {

    public function intro():string{
        return "Le joueur " . $this->login . " a pour id " . $this->id . " et a pour droit " . $this->droit;
    }
    
}