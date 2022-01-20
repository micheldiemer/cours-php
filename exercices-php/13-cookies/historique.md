# Exercice Cookie historique

Ecrire un script php de gestion d’un cookie et de fichiers d’historique de connexions.

- Si le cookie « historique » existe, vérifie :
  - Que la valeur du cookie ne contienne que des chiffres et des lettres a-zA-Z0-9, sinon le cookie est invalide
  - Si c’est ok vérifier que la valeur du cookie correspond à un fichier disponible sur le serveur, sinon le cookie est invalide
  - Si le fichier existe,
    - ajouter la date et l’heure de connexion
    - vérifier la taille du fichier des historiques de connexion (2 Mo maximum) sinon afficher « erreur lecture fichier log »
    - afficher le journal des connexions
  - Si le fichier n’existe pas, la valeur du cookie est invalide
- Si le cookie « historique » n’existe pas ou que sa valeur est invalide :
  - Créer un cookie « historique » dont la valeur est comme le « random_bytes » dans le cours
  - Créer un fichier dont le nom correspond à la valeur générée par « random_bytes » et ajouter la date et l’heure de connexion  
    Par exemple si la valeur renoyée par random_bytes est 0AD7C alors créer puis relire le fichier 0AD7C.log
  - Afficher C’est votre première visite : DD-MM-YYYY HH:mm:ss

## Première visite

```
C’est votre première visite : 15-12-2019 08:03:25
Par la suite affiche la liste des heures :
Vois avez consulté cette page 4 fois, voici les détails :
    • 15-12-2019 08:03:25
    • 15-12-2019 08:03:26
    • 15-12-2019 08:03:27
    • 15-12-2019 08:03:28
```
