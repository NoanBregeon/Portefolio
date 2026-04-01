# Portfolio - Noan Bregeon

Portfolio personnel developpe avec React et Vite, avec une interface immersive (fond 3D, animations fluides, glassmorphism) et une architecture front claire basee sur des pages, composants reutilisables et donnees JSON statiques.

## Apercu

Le site met en avant un profil developpeur Full Stack, des projets techniques et un parcours, avec une navigation SPA:

- Accueil: hero, mise en avant de projets, CTA de navigation
- A propos: presentation et experiences chargees depuis un endpoint JSON
- Projets: grille complete des projets
- Detail projet: vue detaillee via slug dynamique
- Contact: informations + formulaire de contact visuel

## Stack Technique Actuelle

- React 19
- Vite 8
- React Router (routing client)
- Tailwind CSS
- Framer Motion (animations d'apparition)
- Three.js via React Three Fiber + Drei (fond etoile anime)
- Lucide React (icones)

## Fonctionnalites Principales

- Routing SPA avec routes dediees et route dynamique `projects/:slug`
- Chargement des donnees metier via `fetch` sur:
  - `public/api/projects.json`
  - `public/api/experiences.json`
- Fond 3D immersif avec etoiles animees
- Sections animees au scroll via composant reutilisable `AnimatedSection`
- UI type glassmorphism et curseur personnalise desktop
- Design responsive (mobile / tablette / desktop)

## Architecture du Projet

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

## Routing

Routes definies dans `src/App.jsx`:

- `/` -> `Home`
- `/about` -> `About`
- `/projects` -> `Projects`
- `/projects/:slug` -> `ProjectDetail`
- `/contact` -> `Contact`

## Demarrage Local

### Prerequis

- Node.js 20+
- npm

### Installation

```bash
npm install
```

### Lancer en developpement

```bash
npm run dev
```

### Build de production

```bash
npm run build
```

### Previsualiser le build

```bash
npm run preview
```

## Scripts npm

- `npm run dev`: serveur de developpement Vite
- `npm run build`: build production
- `npm run preview`: preview local du build
- `npm run lint`: lint ESLint

## Gestion du Contenu

Le contenu affichable est gere par fichiers JSON dans `public/api`.

- Pour ajouter/modifier des projets: editer `public/api/projects.json`
- Pour ajouter/modifier les experiences: editer `public/api/experiences.json`

Le detail projet est resolu par `slug`, il faut donc garantir des slugs uniques dans `projects.json`.

## Licence

Code open source a but portfolio/inspiration.
Le contenu (identite, textes, projets personnels) reste la propriete de Noan Bregeon.
