
# KHADAMMAT

Ce projet est une application web Robuste Basee sur LARAVEL, construite le contexte académique du Module WEB II:
### Encadré par : 
- Professeur Al ACHHAB
### Realise Par :
- [YASSIR WAHID (Y7T007)](https://github.com/Y7T007)
- [NOSSAIR SEDKI (1nossairsedki)](https://github.com/1nossairsedki)
- [NADA HIMDI (nadahimdi)](https://github.com/nadahimdi)
- [OMAR ABARRA (Omarab2022)](https://github.com/Omarab2022)
- [NAJOUA ABOUCHAMA (najwaabouchama)](https://github.com/najwaabouchama)


## Prérequis

Avant de commencer, assurez-vous d'avoir installé :

- PHP
- Node.js
- Composer
- NPM

## Installation

Suivez ces étapes pour configurer le projet sur votre machine :

1. Clonez le dépôt depuis GitHub sur votre machine locale :

```bash
git clone https://github.com/Y7T007/KHADAMMAT-WEB-II-PROJECT-.git
```

2. Naviguez vers le répertoire du projet :

```bash
cd <KHADAMMAT-WEB-II-PROJECT>
```

3. Installez les dépendances Composer :

```bash
composer install
```

4. Installez les dépendances NPM :

```bash
npm install
```

5. Copiez le fichier `.env.example` et renommez-le en `.env` :

```bash
cp .env.example .env
```

6. Générez une clé d'application :

```bash
php artisan key:generate
```

À ce stade, vous devriez configurer votre fichier `.env` pour qu'il corresponde à vos paramètres de base de données souhaités.

## Configuration de la base de données:

 - Tout d'abord, vous devez configurer vos paramètres de base de données dans le fichier .env. Voici un exemple pour une base de données MySQL:
```
 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=nom_de_votre_base_de_donnees
 DB_USERNAME=votre_nom_dutilisateur
 DB_PASSWORD=votre_mot_de_passe
```
Après avoir configuré votre fichier .env, vous pouvez créer les tables dans votre base de données en exécutant les migrations:
php artisan migrate
## Architecture de l'application

L'application est construite en utilisant le framework Laravel, qui suit le modèle de conception Model-View-Controller (MVC). Ce modèle sépare l'application en trois composants interconnectés :

- Modèles : Représentent la structure des données, généralement en interagissant avec la base de données.
- Vues : Rendent l'interface utilisateur et présentent les données à l'utilisateur.
- Contrôleurs : Gèrent les requêtes des utilisateurs, manipulent les données en utilisant les modèles, et sélectionnent les vues à rendre.

L'application utilise également des middlewares pour filtrer les requêtes HTTP, des fournisseurs de services pour initialiser et configurer les services, et des routes pour mapper les URL à des actions de contrôleur spécifiques.

## Fonctionnalités de l'application

### Espace Client:

- Inscription/Connexion du client : Les clients peuvent s'inscrire et se connecter en utilisant les formulaires fournis dans les vues `auth/register.blade.php` et `auth/login.blade.php` respectivement. Les `ClientRegisterController` et `ClientLoginController` gèrent les processus d'inscription et de connexion.

- Recherche de partenaires/services : Les clients peuvent rechercher des partenaires et des services en utilisant la fonctionnalité fournie dans le `PartnerController` et le `ServiceController`. Les résultats sont affichés dans les vues `client/partners/index.blade.php` et `client/Services/index.blade.php`.

- Demande de service à un partenaire : Les clients peuvent demander un service à un partenaire en utilisant le `DemandeController`. La demande est stockée dans la table `demandes` de la base de données.

- Commenter et noter un service : Après qu'un service est terminé, les clients peuvent commenter et noter le service en utilisant les méthodes `saveComment` et `saveRating` dans le `ClientController`. Les commentaires et les notes sont stockés dans la table `comments` de la base de données.

- Affichage du flux : Le flux affiche les derniers posts. Ceci est géré par la méthode `feed` dans le `ClientController`, et les posts sont affichés dans la vue `client/feed.blade.php`.

## Contribution

Les contributions sont les bienvenues. Pour toute modification majeure, veuillez d'abord ouvrir une issue pour discuter de ce que vous aimeriez changer.

