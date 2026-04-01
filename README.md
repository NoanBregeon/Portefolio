<div align="center">

<img src="https://capsule-render.vercel.app/api?type=waving&color=0:0f172a,100:4338ca&height=160&section=header&text=Portfolio%20Noan%20Bregeon&fontSize=44&fontAlignY=38&animation=fadeIn" alt="Banniere Portfolio Noan Bregeon" width="100%" />

Application portfolio front-end construite avec React et Vite, orientee experience utilisateur: fond 3D, animations fluides, UI glassmorphism et navigation SPA.

[![React](https://img.shields.io/badge/React-19-20232A?style=for-the-badge&logo=react&logoColor=61DAFB)](https://react.dev)
[![Vite](https://img.shields.io/badge/Vite-8-646CFF?style=for-the-badge&logo=vite&logoColor=white)](https://vitejs.dev)
[![Tailwind](https://img.shields.io/badge/Tailwind_CSS-3-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)](https://tailwindcss.com)
[![Three.js](https://img.shields.io/badge/Three.js-R3F-black?style=for-the-badge&logo=three.js&logoColor=white)](https://threejs.org)
[![Framer Motion](https://img.shields.io/badge/Framer_Motion-Animations-0055FF?style=for-the-badge&logo=framer&logoColor=white)](https://www.framer.com/motion/)

</div>

## Sommaire

- [Sommaire](#sommaire)
- [Vue Rapide](#vue-rapide)
- [Fonctionnalites](#fonctionnalites)
- [Pages Et Routing](#pages-et-routing)
- [Architecture Technique](#architecture-technique)
- [Structure Du Projet](#structure-du-projet)
- [Installation Et Commandes](#installation-et-commandes)
- [Gestion Du Contenu](#gestion-du-contenu)
- [Licence](#licence)

## Vue Rapide

Le site presente un profil developpeur Full Stack et des projets techniques avec une navigation fluide:

- Accueil: hero, presentation et projets mis en avant
- A propos: parcours et experiences chargees depuis un JSON
- Projets: grille complete des realisations
- Detail projet: page dynamique basee sur le slug
- Contact: informations et formulaire visuel

## Fonctionnalites

| Bloc | Description |
| :--- | :--- |
| Routing SPA | Navigation client avec routes statiques et dynamique `projects/:slug` |
| Data Layer | Chargement des donnees via `fetch` depuis `public/api/*.json` |
| Ambiance visuelle | Fond 3D etoile anime avec React Three Fiber et Drei |
| Motion UI | Animations au scroll via `AnimatedSection` + Framer Motion |
| Interface | Effets glassmorphism, overlay noise, curseur personnalise desktop |
| Responsive | Rendu adapte mobile, tablette et desktop |

## Pages Et Routing

Definition des routes dans [src/App.jsx](src/App.jsx):

| Route | Composant |
| :--- | :--- |
| `/` | `Home` |
| `/about` | `About` |
| `/projects` | `Projects` |
| `/projects/:slug` | `ProjectDetail` |
| `/contact` | `Contact` |

## Architecture Technique

```mermaid
flowchart LR
    U[Utilisateur] --> R[React Router]
    R --> P1[Pages]
    P1 --> L[Layout Global]
    L --> B1[Navbar]
    L --> B2[Footer]
    L --> B3[ThreeBackground]
    P1 --> A1[AnimatedSection]
    P1 --> D1[Fetch /api/projects.json]
    P1 --> D2[Fetch /api/experiences.json]
```

## Structure Du Projet

```text
c:/code/Portefolio
|- public/
|  |- api/
|  |  |- experiences.json
|  |  |- projects.json
|- src/
|  |- components/
|  |  |- AnimatedSection.jsx
|  |  |- Footer.jsx
|  |  |- Layout.jsx
|  |  |- Navbar.jsx
|  |  |- ThreeBackground.jsx
|  |- pages/
|  |  |- About.jsx
|  |  |- Contact.jsx
|  |  |- Home.jsx
|  |  |- ProjectDetail.jsx
|  |  |- Projects.jsx
|  |- App.jsx
|  |- index.css
|  |- main.jsx
|- index.html
|- package.json
|- vite.config.js
```

## Installation Et Commandes

Prerequis:

- Node.js 20+
- npm

Installation:

```bash
npm install
```

Commandes principales:

| Commande | Utilite |
| :--- | :--- |
| `npm run dev` | Lance le serveur de developpement Vite |
| `npm run build` | Genere le build de production |
| `npm run preview` | Previsualise localement le build |
| `npm run lint` | Lance ESLint |

## Gestion Du Contenu

Le contenu fonctionnel du site est pilote par JSON:

- Projets: [public/api/projects.json](public/api/projects.json)
- Experiences: [public/api/experiences.json](public/api/experiences.json)

Note importante:

- La page detail projet utilise le champ slug, qui doit rester unique dans projects.json.

## Licence

Code open source a usage portfolio et inspiration.
Le contenu personnel (identite, textes, projets) reste la propriete de Noan Bregeon.
