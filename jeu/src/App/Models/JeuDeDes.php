<?php
abstract class JeuDeDé {
    protected int $nbreDe;
    protected int $nbLancerDés;
    public array $tableDeLancer;

    public function __construct($nbreDe, $nbLancerDés){
        $this->nbreDe = $nbreDe;
        $this->nbLancerDés = $nbLancerDés;
        $this->tableDeLancer = [];
    }

}