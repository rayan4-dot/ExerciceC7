<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\Livre;
use App\LivreNumerique;
use App\ManuelScolaire;
use App\Roman;

$livres = [
    new Roman("Le Comte de Monte-Cristo", 1844),
    new ManuelScolaire("Mathématiques Terminale", 2018),
    new LivreNumerique("Programmation en PHP", 2021),
    new Roman("Les Misérables", 1862),
    new LivreNumerique("Histoire du web", 2014),
    new ManuelScolaire("Physique-Chimie Seconde", 2010),
];


echo "=== Affichage de tous les livres ===\n";
foreach ($livres as $livre) {
    echo $livre . PHP_EOL;
}

// public function isPublishedAfter(int $year): bool {
//     return $this->annee > $year;
// }

// 2. Affichage des livres publiés après une année donnée
$anneeMin = 2015;
echo "=== Livres publiés après {$anneeMin} ===\n";
foreach ($livres as $livre) {
    if ($livre->isPublishedAfter($anneeMin)) {
        echo $livre . PHP_EOL;
    }
}

// 3. Affichage du nombre total de livres
echo "=== Nombre total de livres ===\n";
echo "Total de livres enregistrés : " . Livre::getNombreLivres();