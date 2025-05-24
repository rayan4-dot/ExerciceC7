<?php
namespace App;

abstract class Livre{
    protected $titre;
    protected $annee;
    protected static $nombreLivres = 0;

    public function __construct($titre, $annee)
    {
        $this->titre = $titre;
        $this->annee = $annee;
        self::$nombreLivres++;
    }

    abstract public function consulter();

    public static function getNombreLivres()
    {
        return self::$nombreLivres;
    }

    public function __toString(): string {
        return "📚 {$this->titre} ({$this->annee}) : {$this->consulter()}";
    }

    public function isPublishedAfter(int $year): bool {
        return $this->annee > $year;
    }
}