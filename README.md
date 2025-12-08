# 🚀 Portfolio - Noan Bregeon

![Laravel](https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.4-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Three.js](https://img.shields.io/badge/Three.js-WebGL-black?style=for-the-badge&logo=three.js&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-3.0-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

Bienvenue sur le dépôt source de mon portfolio professionnel. Ce projet est une démonstration technique de mes compétences en développement Full-Stack, alliant la robustesse de **Laravel** à l'interactivité de **Three.js**.

---

## 👨‍💻 À Propos du Développeur

**Noan Bregeon** — Développeur Full-Stack Junior
*BTS SIO Option SLAM (Solutions Logicielles et Applications Métiers)*

Je suis spécialisé dans la conception d'applications web et logicielles sécurisées et performantes. Mon expertise se concentre sur l'écosystème **Laravel** pour le web et **C# .NET** pour le développement applicatif.

> *"J’aime construire des applications propres, sécurisées et maintenables."*

---

## 🏗️ Architecture & Stack Technique

Ce portfolio est construit comme une Single Page Application (visuellement) propulsée par un backend Laravel robuste.

### 🔧 Backend
- **Framework** : Laravel 12
- **Langage** : PHP 8.4
- **Base de données** : Compatible MySQL / MariaDB / PostgreSQL
- **Architecture** : MVC, Orienté Objet, SOLID

### 🎨 Frontend
- **Design** : Tailwind CSS 3 (Mode Sombre / Cyberpunk)
- **3D Engine** : Three.js (Rendu WebGL interactif)
- **Interactivité** : Alpine.js & Vanilla JS
- **Build Tool** : Vite

### ⚙️ Système & DevOps
- **OS Supporté** : Debian 12 / AlmaLinux / Windows
- **Serveur Web** : Apache / Nginx
- **Versionning** : Git / GitHub

---

## ✨ Fonctionnalités du Portfolio

### 1. Expérience 3D Immersive
Le fond du site est une scène 3D générée en temps réel (`resources/js/three-scene.js`) comprenant :
- **Formes Géométriques** : Icosaèdre en fil de fer et Torus en rotation.
- **Système de Particules** : Champ d'étoiles animé pour la profondeur.
- **Éclairage Dynamique** : Sources lumineuses colorées (Indigo/Cyan) orbitant autour de la scène.
- **Réactivité** : La scène s'adapte au redimensionnement et reste fluide.

### 2. Interface Utilisateur (UI)
- **Navigation Fluide** : Système d'ancres pour une navigation sans rechargement visible.
- **Glassmorphism** : Utilisation de flous d'arrière-plan (`backdrop-blur`) pour la lisibilité sur le fond 3D.
- **Animations** : Effets d'apparition (`fade-in-up`), curseur personnalisé et indicateurs de scroll.

### 3. Mode Debug
Un mode développeur est intégré pour inspecter la scène 3D.
- **Activation** : Ajoutez `?debug=true` à l'URL.
- **Fonctionnalités** : Active `OrbitControls` pour bouger la caméra, affiche les axes et la grille, et permet le Raycasting (clic sur les objets pour voir leurs noms).

---

## 📂 Contenu du Portfolio (Projets Présentés)

Ce dépôt contient la présentation détaillée de mes projets académiques et personnels :

- **🛒 Projet E6 - Drive & Caisse** : Solution complète (Web Laravel + Client Lourd C#) avec gestion de stock temps réel et infrastructure Debian/AD.
- **🏥 Consultation Médicale** : Application de gestion de rendez-vous (Laravel + PostgreSQL).
- **✈️ Gestion Aéroport** : Système de gestion de terminaux et vols avec modèles Eloquent complexes.
- **🤖 Bots Discord/Twitch** : Automatisation et modération en Node.js.

---

## 🚀 Installation & Démarrage

### Prérequis
- PHP 8.2 ou supérieur
- Composer
- Node.js & NPM

### Étapes
1. **Cloner le projet**
   ```bash
   git clone https://github.com/NoanBregeon/Portefolio.git
   cd Portefolio
   ```

2. **Installer les dépendances**
   ```bash
   composer install
   npm install
   ```

3. **Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Lancer le développement**
   ```bash
   # Lance Laravel Serve + Vite en parallèle
   composer run dev
   ```

---

## 🛠️ Structure du Code

- `resources/js/three-scene.js` : **Cœur de la 3D**. Contient la scène, la caméra, les lumières et la boucle d'animation.
- `resources/views/layouts/public.blade.php` : **Layout Principal**. Contient le canvas WebGL, le curseur personnalisé et la structure HTML de base.
- `resources/views/home.blade.php` : **Contenu**. Toute la présentation (Hero, About, Projects, Skills) se trouve ici.

---

## 📝 Licence

Ce portfolio est open-source. Le code est libre d'utilisation pour inspiration, mais le contenu (textes, projets, identité) reste la propriété de **Noan Bregeon**.

---
*Généré et maintenu par Noan Bregeon.*
