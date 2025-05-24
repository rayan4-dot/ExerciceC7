# ExerciceC7

impossible d'accéder aux propriétés protected titre et annee dans index.php sans getters
nécessité de filtrer les livres par année s

solution :

 ajoute de  __toString() dans class livre pour afficher les details des livres 

 création de la methode isPublishedAfter(int $year): bool pour filtrer par annee

duree : 54min