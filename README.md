<div align="center">

  <img src="https://capsule-render.vercel.app/api?type=waving&color=0:312e81,100:4f46e5&height=250&section=header&text=Noan%20Bregeon&fontSize=80&fontAlignY=35&desc=Développeur%20Full-Stack%20Junior%20•%20Laravel%20&%20C%23&descAlignY=60&descAlign=50&animation=fadeIn" alt="Header" width="100%"/>

  <br>

  [![Laravel](https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
  [![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.0-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
  [![Three.js](https://img.shields.io/badge/Three.js-3D-black?style=for-the-badge&logo=three.js&logoColor=white)](https://threejs.org)
  [![Alpine.js](https://img.shields.io/badge/Alpine.js-Interactive-8BC0D0?style=for-the-badge&logo=alpine.js&logoColor=white)](https://alpinejs.dev)
  [![Vite](https://img.shields.io/badge/Vite-Bundler-646CFF?style=for-the-badge&logo=vite&logoColor=white)](https://vitejs.dev)

  <br>
  
  <p align="center">
    <b>Une expérience web immersive alliant performance backend et créativité frontend.</b><br>
    <i>Design sombre • Animations fluides • Three.js • Architecture propre • Panel Admin Intégré</i>
  </p>

</div>

---

## 🌌 À Propos de ce Portfolio

Ce portfolio n'est pas qu'une simple vitrine, c'est une **démonstration technique complète**. Il a été conçu pour prouver qu'une application web peut allier une interface utilisateur 3D immersive en frontend avec une architecture robuste, sécurisée et dynamique en backend.

> **"J’aime construire des applications propres, interactives et facilement maintenables."**

## 📑 Table des Matières
- [✨ Fonctionnalités Principales](#-fonctionnalités-principales)
- [🛠️ Stack Technique](#️-stack-technique)
- [🏗️ Architecture et Structure](#-architecture-et-structure)
- [🚀 Installation et Démarrage](#-installation-et-démarrage)
- [⚙️ Gestion du Contenu](#️-gestion-du-contenu)
- [🗂️ Projets Présentés](#️-projets-présentés)
- [🐞 Mode Développeur / Debug](#-mode-développeur--debug)

---

## ✨ Fonctionnalités Principales

### 🎨 Expérience Frontend Immersive
- **Univers 3D Dynamique** : Arrière-plan cosmique interactif avec des particules et connexions, propulsé par `Three.js`. S'adapte au mouvement de la souris et au scroll.
- **Smooth Scroll** : Défilement inertiel ultra-fluide pour une navigation premium grâce à `Lenis`.
- **Glassmorphism Moderne** : Utilisation intensive des effets de flou et de transparence (`backdrop-blur`) avec `Tailwind CSS`.
- **Micro-Interactions** : Animations au scroll (`fade-in-up`), effets de survol uniques, curseur personnalisé et interfaces réactives gérées via `Alpine.js` et `GSAP`.

### ⚙️ Backend et Administration
- **Panel d'Administration Sécurisé** : Interface complète et protégée pour gérer le contenu dynamique du site.
- **Architecture de Données Robuste** : Modèles performants avec Laravel Eloquent pour le paramétrage du site et la gestion fine de votre parcours.
- **File-Based CMS pour les Projets** : Gestion intelligente par dossier. Déposez des images et du code dans les dossiers publics pour qu'ils soient automatiquement scannés et affichés.
- **Optimisation Vite** : Chargement différé, minification et HMR (Hot Module Replacement) garantissant de très hautes performances.

---

## 🛠️ Stack Technique

<div align="center">

| **Backend & Core** | **Frontend & UI** | **Outils & Dev** |
| :---: | :---: | :---: |
| ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white) | ![Tailwind](https://img.shields.io/badge/Tailwind-38B2AC?style=flat-square&logo=tailwind-css&logoColor=white) | ![Git](https://img.shields.io/badge/Git-F05032?style=flat-square&logo=git&logoColor=white) |
| ![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white) | ![Three.js](https://img.shields.io/badge/Three.js-000000?style=flat-square&logo=three.js&logoColor=white) | ![Vite](https://img.shields.io/badge/Vite-646CFF?style=flat-square&logo=vite&logoColor=white) |
| ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white) | ![Alpine.js](https://img.shields.io/badge/Alpine.js-8BC0D0?style=flat-square&logo=alpine.js&logoColor=white) | ![Composer](https://img.shields.io/badge/Composer-885630?style=flat-square&logo=composer&logoColor=white) |

</div>

---

## 🏗️ Architecture et Structure

L'application respecte rigoureusement le pattern **MVC (Modèle-Vue-Contrôleur)** de Laravel tout en intégrant des concepts avancés du front-end.

```text
c:\code\Portefolio
├── 📂 app
│   └── 📂 Http/Controllers
│       ├── 📄 ProjectController.php  # Gère l'auto-discovery des fichiers de projets
│       └── 📂 Admin                  # Contrôleurs du panel d'administration (CRUD)
├── 📂 database
│   └── 📂 migrations                 # Schémas de BDD (experiences, settings...)
├── 📂 resources
│   ├── 📂 css
│   │   └── 📄 app.css                # Styles globaux & utilitaires Tailwind 
│   ├── 📂 js
│   │   └── 📄 three-scene.js         # Logique Three.js (Caméra, Lumières, Particules)
│   └── 📂 views
│       ├── 📂 admin                  # Vues de l'interface d'administration
│       ├── 📂 layouts                # Layouts principaux (public & admin)
│       └── 📂 pages                  # Pages publiques accessibles par les visiteurs
└── 📂 public
    └── 📂 images/projects            # Dossiers de médias pour le File-Based CMS
```

---

## 🚀 Installation et Démarrage

### Prérequis
- **PHP** (8.2 ou supérieur)
- **Composer**
- **Node.js** & **NPM**
- Une base de données (MySQL / MariaDB / SQLite)

### Étapes d'installation

1. **Cloner le dépôt**
   ```bash
   git clone https://github.com/NoanBregeon/Portefolio.git
   cd Portefolio
   ```

2. **Installer les dépendances PHP et Node**
   ```bash
   composer install
   npm install
   ```

3. **Configurer l'environnement**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   > N'oubliez pas de configurer vos accès à la base de données dans le fichier `.env`.

4. **Migrer et peupler la base de données**
   ```bash
   php artisan migrate --seed
   ```
   > Le paramètre `--seed` exécutera les seeders (ex: `AboutPageSeeder`) pour générer les blocs de texte et les données de test par défaut.

5. **Lancer l'application**
   Ouvrez deux terminaux et exécutez ces commandes simultanément :
   ```bash
   # Terminal 1 : Serveur Vite (Pour la compilation et le Hot-Reloading)
   npm run dev

   # Terminal 2 : Serveur PHP local
   php artisan serve
   ```
   Votre projet sera accessible sur `http://localhost:8000`.

---

## ⚙️ Gestion du Contenu

Le portfolio utilise une approche hybride, alliant le dynamisme d'une base de données et la flexibilité d'un système de fichiers pour offrir la meilleure expérience possible.

### 1️⃣ Panel d'Administration (Base de données)
Gérez facilement votre profil public via une interface back-office dédiée :
- Modifiez le texte, la présentation et les liens (GitHub, LinkedIn) de la page **À Propos**.
- Gérez de A à Z vos **Expériences & Formations** (Création, édition, suppression, et visibilité sur le site).
- Un tableau de bord affiche des résumés clairs de vos données.

### 2️⃣ File-Based CMS (Système de Fichiers pour les Projets)
Un système malin d'auto-discovery pour présenter vos travaux techniques :
- **Ajouter des Images** : Glissez simplement vos images (`.jpg`, `.png`, `.webp`) dans le répertoire d'un projet (`public/images/projects/{slug-du-projet}/`). Elles s'aligneront automatiquement dans une galerie interactive de type Lightbox.
- **Ajouter des Extraits de Code** : Dans ce même dossier, créez un fichier brut (ex: `snippet.js`, `query.sql`). Le site s'occupera de l'afficher élégamment via une section "Extrait de Code" avec coloration syntaxique et fonction de copie dans le presse-papier.

---

## 🗂️ Projets Présentés

Ce dépôt sert également d'écrin pour différents projets et réalisations techniques :

- **🛒 Projet E6 - Drive & Caisse** : Solution complète (Web Laravel + Client Lourd C#) avec gestion de stock en temps réel et infrastructure complexe (Active Directory Debian).
- **🏥 Consultation Médicale** : Application sécurisée de gestion de rendez-vous médicaux sous Laravel et PostgreSQL.
- **✈️ Gestion Aéroport** : Système complet de gestion des terminaux et des vols s'appuyant sur des relations éloquentes poussées.
- **🤖 Bots Automatisés** : Outils de modération et d'automatisation pour Discord et Twitch développés en Node.js.

---

## 🐞 Mode Développeur / Debug

Un mode d'inspection "Debug 3D" est intégré au code pour manipuler la scène WebGL en temps réel.

- **Activation** : Ajoutez `?debug=true` à l'URL de la page d'accueil (ex: `http://localhost:8000/?debug=true`).
- **Outils activés** :
  - **OrbitControls** : Permet de déplacer librement la caméra 3D avec la souris.
  - **Helpers Visuels** : Affiche les axes XYZ ainsi qu'une grille tridimensionnelle pour faciliter le repérage spatial.
  - **Raycasting** : Cliquez sur les éléments 3D pour révéler leurs propriétés dans la console du navigateur.

---

<div align="center">
  <p>Conçu et développé avec ❤️ et beaucoup de ☕ par <b>Noan Bregeon</b></p>
  
  [![GitHub](https://img.shields.io/badge/GitHub-NoanBregeon-181717?style=for-the-badge&logo=github)](https://github.com/NoanBregeon)
  [![LinkedIn](https://img.shields.io/badge/LinkedIn-Connect-0077B5?style=for-the-badge&logo=linkedin)](https://linkedin.com/in/noan-bregeon)
</div>
