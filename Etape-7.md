# Correspondances entre UserController et UserManager

| Méthode du UserController | Méthode du UserManager appelée | Rôle / Description |
|--------------------------|--------------------------------|--------------------|
| list()                   | findAll()                      | Afficher la liste de tous les utilisateurs |
| show()                   | findOne($id)                   | Afficher le détail d’un utilisateur |
| create()                 | _(aucune)_                     | Afficher le formulaire de création |
| checkCreate()            | create($user)                  | Créer un nouvel utilisateur en base |
| update()                 | _(aucune)_                     | Affiche le formulaire de modification |
| checkUpdate()            | update($user)                  | Mettre à jour un utilisateur existant en base |
| delete()                 | delete($id)                    | Supprimer un utilisateur de la base |