# 🚀 Portfolio Personnel — Noan Bregeon

![Laravel](https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.0-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Three.js](https://img.shields.io/badge/Three.js-3D-black?style=for-the-badge&logo=three.js&logoColor=white)
![Alpine.js](https://img.shields.io/badge/Alpine.js-Interactive-8BC0D0?style=for-the-badge&logo=alpine.js&logoColor=white)

> **Un portfolio immersif et moderne conçu pour présenter mes compétences en développement Full-Stack.**  
> *Design sombre, animations fluides, expérience utilisateur soignée.*

---

## ✨ Fonctionnalités Clés

### 🎨 Expérience Visuelle & UI
*   **Thème Cosmique 3D** : Arrière-plan interactif généré avec **Three.js** (particules, connexions).
*   **Smooth Scrolling** : Défilement inertiel ultra-fluide grâce à **Lenis**.
*   **Animations Staggered** : Apparition en cascade des éléments (projets, textes) au chargement.
*   **Design Glassmorphism** : Utilisation intensive de flous d'arrière-plan (`backdrop-blur`) et de dégradés subtils.
*   **Boutons Magnétiques** : Effet d'attraction du curseur sur les boutons d'action principaux.

### 🛠️ Gestion de Contenu Dynamique
*   **Système de Projets "File-Based"** :
    *   Les images sont chargées automatiquement depuis des dossiers dédiés (`public/images/projects/{slug}`).
    *   Les extraits de code sont détectés et affichés dynamiquement (`code.php`, `snippet.js`, etc.).
*   **Galerie Intelligente** :
    *   Détection automatique des miniatures.
    *   Lightbox intégrée pour visualiser les captures d'écran en grand.
*   **Code Viewer** : Intégration de **Highlight.js** (thème Atom One Dark) pour une lecture confortable du code source directement sur le site.

---

## 🏗️ Stack Technique

Ce projet est construit sur des bases solides et modernes :

| Technologie | Usage |
| :--- | :--- |
| **Laravel 12** | Framework Backend robuste (Routing, Controllers, Blade). |
| **Tailwind CSS** | Framework CSS utilitaire pour un design sur-mesure. |
| **Alpine.js** | Micro-framework JS pour l'interactivité (modales, transitions). |
| **Three.js** | Moteur 3D pour l'arrière-plan immersif. |
| **Vite** | Bundler ultra-rapide pour les assets. |

---

## 📂 Structure du Projet

```bash
c:\code\Portefolio
├── app/Http/Controllers/ProjectController.php  # Cœur de la logique (Données + Scan fichiers)
├── resources/views/
│   ├── layouts/public.blade.php                # Layout principal (Scripts, Styles, Three.js)
│   ├── projects/
│   │   ├── index.blade.php                     # Grille des projets (Animée)
│   │   └── show.blade.php                      # Détail projet (Galerie + Code)
│   └── home.blade.php                          # Landing Page
└── public/images/projects/                     # Dossiers de contenu (Images & Code)
    ├── portfolio-personnel/
    ├── task-manager-api/
    └── ...
```

---

## 🚀 Installation & Démarrage

1.  **Cloner le dépôt**
    ```bash
    git clone https://github.com/NoanBregeon/portfolio.git
    cd portfolio
    ```

2.  **Installer les dépendances**
    ```bash
    composer install
    npm install
    ```

3.  **Configuration**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Lancer le serveur de développement**
    ```bash
    npm run dev
    # Dans un autre terminal
    php artisan serve
    ```

---

## 💡 Comment ajouter du contenu ?

Le site est conçu pour être **facilement maintenable** sans toucher au code.

### Ajouter des images à un projet
1.  Aller dans `public/images/projects/{slug-du-projet}/`.
2.  Glisser les images (`.jpg`, `.png`, `.webp`).
3.  *C'est tout ! Elles apparaissent automatiquement dans la galerie.*

### Ajouter un extrait de code
1.  Aller dans le même dossier.
2.  Créer un fichier commençant par `code.` ou `snippet.` (ex: `code.php`, `snippet.js`).
3.  Coller le code.
4.  *Il s'affichera automatiquement avec la coloration syntaxique adaptée.*

---

## 👤 Auteur

**Noan Bregeon**  
*Développeur Full-Stack Junior — Passionné par Laravel & C#*

[![GitHub](https://img.shields.io/badge/GitHub-NoanBregeon-181717?style=for-the-badge&logo=github)](https://github.com/NoanBregeon)
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
