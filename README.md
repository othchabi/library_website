# BOOKLAND
Projet réalisé par :
LOUDAGH Ali - CHABI Othman - MULUMBA Isaac - BOUZARZAIT Oumaima
### Suivez les instructions ci-dessous pour exécuter cette application Web sur votre ordinateur

#### Tapez : 
* composer update
#### Paramètres de la base de données
* Créez une base de données MySql nommée 'upjv'.
* Crééz un utilisateur nommée 'upjv' avec un mot de passe 'upjv2021' et lui donner tous les droits dans cette base de données.
#### Migration de la base de données:
Executez les commandes suivantes
* symfony console make:migration
* symfony console doctrine:migrations:migrate
#### Initialiser la base de donnée
Tapez http://localhost:8000/bookland/init
#### Fin
Tapez http://localhost:8000/bookland sur votre navigateur web et vous y êtes!
