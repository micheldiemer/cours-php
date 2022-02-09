# Instructions conditionnelles : infraction

Ce programme permet d'établir un procès verbal pour trois types d'infraction:

1. "Feu rouge non respecté" - Code PV = 1
2. "Stop non respecté" – Code PV = 2
3. "Dépassement de la vitesse limite" – Code PV = 3

Dans tous les cas de figure, l'utilisateur doit donner le code du PV ainsi que le nombre de points de permis restants (avant le PV).

En cas de dépassement de la vitesse limite, il doit en plus donner la vitesse limite ainsi que la vitesse mesurée.

## Règles

```
Lorsque l'utilisateur a saisi ces informations, le programme affiche :
● Le libellé du type d'infraction.
● Le montant de la contravention: 200 € pour un feu rouge non respecté, 150 € pour un stop non respecté.
  Pour un dépassement de vitesse, le montant dépend de l'excès de vitesse:
     - 90 € pour un dépassement inférieur à 10 km/h,
     - 135 € pour un dépassement de plus de 10 km/h.
● Le nombre de points retirés:
     - 6 pour un feu rouge non respecté,
     - 4 pour un stop non respecté.
     - Pour un dépassement de vitesse, le nombre de points retirés dépend de l'excès de vitesse:
         - 1 point pour un dépassement inférieur à 10 km/h,
         - 3 points pour un dépassement de plus de 10 km/h.
● Le nombre de points restant (après avoir retiré ces points).
  Attention: ce nombre ne doit jamais devenir négatif.
    Par exemple, si le nombre de points restant avant le PV est de 2 et que la personne n'a pas respecté un feu rouge
    (-4 points) le nombre de points restant est égal à 0.
● Une phrase indiquant que le permis est retiré le cas échéant.
```

## Exemple d'exécution

```
    Code PV : 1 <-
    Nombre de points de permis restant : 3 <-
    Type d'infraction : Feu rouge non respecte
    Montant du PV : 200
    Nombre de points retires : 6
    Nombre de points restats : 0
    Permis retire !
```

## Consignes de programmation

```
Les variables à utiliser sont imposées. Voici leurs significations:
● codePV : code du PV.
● points : nombre de points restant.
● limite : vitesse limite autorisée.
● vitesse : vitesse mesurée.
● montant : montant de l'infraction.
● retrait : nombre de points retirés.
```
