# Système de Réservations Immobilières - Laravel

Système de gestion de réservations de biens immobiliers développé avec Laravel, Livewire, Filament et TailwindCSS.

## Fonctionnalités

- ✅ Authentification des utilisateurs avec Laravel Breeze
- ✅ Gestion des biens immobiliers
- ✅ Système de réservations en temps réel avec Livewire
- ✅ Panneau d'administration avec Filament
- ✅ Design responsive avec TailwindCSS
- ✅ Validation de la disponibilité des dates
- ✅ Relations entre utilisateurs, biens et réservations

## Prérequis

- PHP >= 8.1
- Composer
- MySQL
- Node.js & NPM
- Git

## Installation

### 1. Cloner le dépôt

```bash
git clone [URL_DE_VOTRE_DEPOT]
cd laravel-test
```

### 2. Installer les dépendances

```bash
composer install
npm install
```

### 3. Configurer l'environnement

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configurer la base de données

Éditez le fichier `.env` avec vos identifiants :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_test
DB_USERNAME=root
DB_PASSWORD=
```

Créez la base de données :

```sql
CREATE DATABASE laravel_test;
```

### 5. Exécuter les migrations et seeders

```bash
php artisan migrate
php artisan db:seed --class=PropertySeeder
```

### 6. Compiler les assets

```bash
npm run dev
```

### 7. Créer un utilisateur administrateur pour Filament

```bash
php artisan make:filament-user
```

Entrez les données demandées (email, nom, mot de passe)

### 8. Démarrer le serveur

```bash
php artisan serve
```

## Accès à l'Application

- **Site public :** http://localhost:8000
- **Panneau d'administration :** http://localhost:8000/admin

## Identifiants de Test

**Utilisateur Administrateur :**

- Email : admin@test.com
- Mot de passe : admin123

## Structure du Projet

```
├── app/
│   ├── Http/Controllers/
│   │   └── PropertyController.php
│   ├── Livewire/
│   │   └── BookingManager.php
│   ├── Models/
│   │   ├── Property.php
│   │   ├── Booking.php
│   │   └── User.php
│   └── Filament/Resources/
│       ├── PropertyResource.php
│       └── BookingResource.php
├── resources/
│   └── views/
│       ├── properties/
│       │   ├── index.blade.php
│       │   └── show.blade.php
│       └── livewire/
│           └── booking-manager.blade.php
└── database/
    ├── migrations/
    └── seeders/
        └── PropertySeeder.php
```

## Technologies Utilisées

- **Laravel 11** - Framework PHP
- **Laravel Breeze** - Authentification
- **Livewire 3** - Composants dynamiques
- **Filament 3** - Panneau d'administration
- **TailwindCSS** - Framework CSS
- **MySQL** - Base de données

## Documentation Officielle Utilisée

Ce projet suit les conventions et la structure recommandées par la documentation officielle :

### Laravel

- **Structure des Répertoires :** https://laravel.com/docs/11.x/structure
- **Routing :** https://laravel.com/docs/11.x/routing
- **Controllers :** https://laravel.com/docs/11.x/controllers
- **Blade Templates :** https://laravel.com/docs/11.x/blade
- **Eloquent ORM :** https://laravel.com/docs/11.x/eloquent
- **Migrations :** https://laravel.com/docs/11.x/migrations
- **Seeders :** https://laravel.com/docs/11.x/seeding

### Laravel Breeze

- **Installation :** https://laravel.com/docs/11.x/starter-kits#laravel-breeze

### Livewire

- **Documentation :** https://livewire.laravel.com/docs/quickstart
- **Installation :** https://livewire.laravel.com/docs/installation
- **Composants :** https://livewire.laravel.com/docs/components

### Filament

- **Documentation :** https://filamentphp.com/docs/3.x/panels/installation
- **Resources :** https://filamentphp.com/docs/3.x/panels/resources

### TailwindCSS

- **Documentation :** https://tailwindcss.com/docs
- **Configuration :** https://tailwindcss.com/docs/configuration

## Fonctionnalités de Sécurité

- Validation des dates de réservation
- Prévention des réservations en conflit
- Authentification requise pour réserver
- Protection CSRF sur les formulaires
- Relations cascade dans la base de données

## Commandes Utiles

```bash
# Vider le cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Exécuter les migrations à nouveau (ATTENTION : supprime toutes les données)
php artisan migrate:fresh --seed

# Compiler les assets pour la production
npm run build

# Voir les routes disponibles
php artisan route:list
```

## Notes de Développement

- Les migrations s'exécutent dans l'ordre chronologique
- Le seeder crée 6 biens d'exemple
- Livewire gère la logique des réservations en temps réel
- Filament génère automatiquement le CRUD pour les modèles

## Résolution de Problèmes

**Erreur de connexion à la base de données :**

- Vérifiez que MySQL est en cours d'exécution
- Confirmez les identifiants dans `.env`

**Les assets ne se chargent pas :**

- Exécutez `npm run build`
- Vérifiez que `npm run dev` est en cours d'exécution

**Panneau Filament non accessible :**

- Vérifiez que vous avez créé un utilisateur admin
- Videz le cache : `php artisan cache:clear`

## Licence

Ce projet fait partie d'un test technique.

## Notes

Il s'agit de mon premier projet avec Laravel. J'ai implémenté toutes les
fonctionnalités demandées, bien qu'il puisse y avoir quelques petits bugs.
Le système permet de gérer les biens, créer des réservations et tout
administrer depuis le panneau Filament.
