<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Shopping platform back

## Mise en place du projet

### Configuration de l'environnement

Créer un fichier `.env` à la racine du projet et copier le contenu du fichier `.env.example` dans le fichier `.env`.

Configurer les éléments nécessaires à la connexion à la base de données dans le fichier `.env`.

Configurer les éléments nécessaires à l'envoi de mail dans le fichier `.env`.

#### Important !

Ajouter l'url du front dans le fichier `.env` à la clé `ALLOWED_ORIGINS` pour autoriser les requêtes CORS :

```bash
ALLOWED_ORIGINS='http://localhost:5174'
```

### Installation des dépendances

```bash
composer install
```

### Génération de la clé de l'application

```bash
php artisan key:generate
```

### Migration de la base de données

Des données de test sont disponibles dans les fichiers de seed.

```bash
php artisan migrate --seed
```

### Lancement du serveur (si nécessaire)

```bash
php artisan serve
```

### Création d'un utilisateur administrateur

Pour créer un utilisateur administrateur, il faut utiliser la commande suivante :

```bash
php artisan user:create
```

Cette commande va vous demander de renseigner les informations de l'utilisateur afin de le créer.

Vous pourrez vous connecter avec cet utilisateur pour accéder à l'interface d'administration. Attention cela ne vous
permettra pas de vous connecter au front-end de l'application. Pour cela, il faudra créer un compte depuis le front-end
ou utiliser un email généré par les seeder avec le mot de passe `password`.
