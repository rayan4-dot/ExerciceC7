<?php
namespace App;
use App\Livre;
class ManuelScolaire extends Livre{
    public function __construct($titre, $annee)
    {
        parent::__construct($titre, $annee);
    }

    public function consulter()
    {
        return "contient des exercices à la fin";
    }
}