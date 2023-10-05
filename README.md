# Projet Symfony avec EasyAdmin

Ce projet est une base pour une application de gestion de bibliothèque avec Symfony et EasyAdmin. Il comprend trois entités (Livre, Auteur, Emprunteur) et des vues pour afficher les détails d'un livre et d'un auteur.

## Installation

1. Clone le dépôt Git 
2. Installe les dépendances avec Composer :
   ``` 
   cd ton-projet
   composer install 
   ```
3. Crée la base de données et effectue les migrations :
   ```
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```

 ## Utilisation

Pour l'instant, le projet est une base simple sans EasyAdmin. Tu peux afficher la liste des livres, les détails d'un livre et les détails d'un auteur.

Dans la suite du projet, nous allons installer et configurer EasyAdmin pour gérer les entités de manière plus efficace.

Reste à l'écoute pour les prochaines mises à jour !
