<?php


class Utilisateur {
    public int $id;
    public string $login;
    public string $password;
    public string $droit;

    public function __construct($id, $login, $password, $droit){
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->droit = $droit;
    }

    public function getNewPlayer():string{
        return 
            $this->id;
            $this->login;
            $this->password;
            $this->droit;
    }

    


}