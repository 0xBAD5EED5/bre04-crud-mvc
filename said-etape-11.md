# Étape 11 : Affichage de la liste des utilisateurs

## Objectif
Mettre en place la partie "Read" du CRUD pour afficher tous les utilisateurs enregistrés en base.

## Instructions

1. **Vérifier la route**
   - Dans `config/Router.php`, la route `list` (ou la route par défaut) doit appeler `UserController::list()`.

2. **Contrôleur : `UserController::list()`**
   - La méthode existe déjà dans `controllers/UserController.php`.
   - Elle instancie `UserManager` et utilise `findAll()` pour récupérer les utilisateurs.
   - Elle transmet la liste à la vue `templates/users/list.phtml` via le layout principal.

3. **Vue : `templates/users/list.phtml`**
   - Parcourt le tableau d'utilisateurs reçu et affiche les infos principales (ID, prénom, nom, email).
   - Affiche un message si la liste est vide.
   - Prévoit des liens pour chaque utilisateur vers les actions `show`, `update` et `delete`.

4. **Tester la fonctionnalité**
   - Aller sur `index.php?route=list` pour vérifier l'affichage de la liste.
   - Vérifier que les liens vers les autres actions (show, update, delete) fonctionnent.

