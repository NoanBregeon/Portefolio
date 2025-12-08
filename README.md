# Portfolio - Noan Bregeon

Bienvenue sur le dépôt de mon portfolio personnel. Ce projet est une application web moderne mettant en avant mes compétences en développement, avec une expérience visuelle immersive.

## 🌟 À propos

Ce portfolio est conçu pour être plus qu'une simple vitrine de projets. Il intègre une expérience 3D interactive en arrière-plan, créant une atmosphère "Sci-Fi" / "Cyberpunk" unique. L'objectif est de démontrer une maîtrise technique à la fois sur le backend (Laravel) et le frontend (Three.js, Tailwind).

## 🛠️ Stack Technique

### Backend
- **Framework** : [Laravel 12](https://laravel.com)
- **Langage** : PHP 8.2+

### Frontend
- **Framework CSS** : [Tailwind CSS 3](https://tailwindcss.com)
- **Interactivité** : [Alpine.js](https://alpinejs.dev)
- **3D & WebGL** : [Three.js](https://threejs.org)
- **Build Tool** : [Vite](https://vitejs.dev)

## ✨ Fonctionnalités Clés

- **Expérience 3D Immersive** : Une scène Three.js en arrière-plan avec des formes géométriques abstraites (Icosaèdre, Torus) et un champ de particules animé.
- **Design Réactif** : Interface utilisateur fluide et adaptée à tous les écrans grâce à Tailwind CSS.
- **Esthétique Cyberpunk** : Utilisation d'un thème sombre, de couleurs néon (Indigo, Cyan) et d'effets de transparence.
- **Mode Debug** : Un mode de débogage intégré (`?debug=true`) permettant d'inspecter la scène 3D avec `OrbitControls`.

## 🚀 Installation

Pour lancer ce projet localement, suivez ces étapes :

1. **Cloner le dépôt**
   ```bash
   git clone https://github.com/NoanBregeon/Portefolio.git
   cd Portefolio
   ```

2. **Installer les dépendances PHP**
   ```bash
   composer install
   ```

3. **Installer les dépendances JavaScript**
   ```bash
   npm install
   ```

4. **Configuration de l'environnement**
   Copiez le fichier d'exemple `.env` et générez la clé d'application :
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Lancer le serveur de développement**
   Vous pouvez utiliser la commande personnalisée définie dans `composer.json` pour lancer à la fois le serveur Laravel et Vite :
   ```bash
   composer run dev
   ```
   Ou lancer les commandes séparément :
   ```bash
   npm run dev
   php artisan serve
   ```

## 🎨 Personnalisation 3D

La logique de la scène 3D se trouve dans `resources/js/three-scene.js`. Vous pouvez y modifier :
- Les formes géométriques.
- Les couleurs et matériaux.
- La vitesse d'animation.
- La densité des particules.

## 📝 Auteur

**Noan Bregeon**

---
*Développé avec ❤️ et beaucoup de café.*
