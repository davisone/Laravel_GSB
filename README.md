# Laravel GSB – Gestion des Laboratoires et Collaborateurs

Projet réalisé dans le cadre de mon BTS SIO – SLAM.  
L’objectif est de proposer une application de gestion pour les visiteurs médicaux du laboratoire GSB.

## 🚀 Fonctionnalités principales

- Authentification sécurisée via Jetstream (Laravel Fortify)
- Affichage dynamique des collaborateurs associés à chaque laboratoire (poste, contact…)
- Menu déroulant interactif (Alpine.js) pour afficher les collaborateurs
- Accès restreint aux utilisateurs connectés uniquement
- Gestion complète des relations entre modèles Laravel (belongsTo, hasMany)

## 🧱 Technologies utilisées

- PHP 8 / Laravel 10
- MySQL
- Blade & Tailwind CSS
- Alpine.js
- Jetstream & Fortify (authentification)
- Git / GitHub

## 📂 Structure du projet

- `app/Models` : Modèles Eloquent (Labo, Collaborateur, Poste…)
- `database/migrations` : Migrations des tables
- `database/seeders` : Données de test insérables
- `resources/views` : Vues Blade (ex: `laboratoire.blade.php`)
- `routes/web.php` : Routes principales
- `public/` : Fichiers statiques

## 🔐 Sécurité

Toutes les routes sont protégées par middleware `auth` :  
> L’accès à l’application nécessite une connexion.

## 👤 Auteur

**Evan Davison**  
> Développeur web – [GitHub](https://github.com/davisone)  
