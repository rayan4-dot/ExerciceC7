<?php
namespace App;

use App\Livre;
class LivreNumerique extends Livre{
    public function __construct($titre, $annee)
    {
        parent::__construct($titre, $annee);
    }

    public function consulter()
    {
        return "se lit en ligne avec un lecteur spécifique";
    }
}