# PHP Les tableaux

## Introuction

Le concept de tableau PHP regroupe plusieurs concepts :

- Tableau indicé. En algotihmique, un tableau indicé a une taille fixe, déterminée à l'initialisation du tableau. L'indice va de 0 jusqu'à la taille du tableau moins 1. (Les chaînes de caractères peuvent être traitées comme des tableaux indicés dont la taille est le nombre de caractères)
- Tableau associatif ou dictionnaire. Un dictionnaire associe une clé (une chaîne de caractères) à une valeur.

## Tableaux à indice numérique

```php
$tab = [] // création d'un tableau
for($i = 0 ; $ i < 20 ; $i++) {
  $tab = rand(1,6);
}
echo '<pre>'; var_dump($tab); echo '</pre>';
```
