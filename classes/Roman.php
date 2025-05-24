<?php
namespace App;
use App\Livre;
class Roman extends Livre{
    public function __construct($titre, $annee)
    {
        parent::__construct($titre, $annee);
    }

    public function consulter()
    {
        return "se consulte avec une couverture illustrée";
    }
}