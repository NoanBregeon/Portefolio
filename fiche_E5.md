# 📁 Portfolio BTS SIO – Épreuve E5

---

## 👤 Présentation

- Nom : BREGEON  
- Prénom : Noan  
- Formation : BTS SIO – Option SLAM  
- Établissement : IIA Saint-Nazaire  
- Année : 2025 - 2026  

---

## 🎯 Objectif professionnel

Actuellement en BTS SIO option SLAM, je souhaite évoluer vers un poste de développeur logiciel ou web.  
Mon objectif est de concevoir des applications robustes, sécurisées et adaptées aux besoins métiers.

---

## 🌐 Présence en ligne

- GitHub : https://github.com/NoanBregeon  
- Portfolio : (à compléter si hébergé)  
- LinkedIn : (à compléter)

---

## 📄 CV

(Insérer ici ou ajouter en annexe)

---

## 📊 Veille Informatique

### Sujet
L’évolution des API dans les systèmes d’information (REST / intégration externe)

### Outils utilisés
- Google Alerts
- Documentation officielle
- Articles techniques

### Analyse
Les API permettent aujourd’hui d’interconnecter les systèmes entre eux.  
Elles sont devenues essentielles dans les architectures modernes (microservices, SaaS).

### Conclusion
L’intégration d’API est une compétence clé pour un développeur moderne, notamment pour :
- récupérer des données externes
- automatiser des processus
- enrichir une application

---

## 💻 Projets

---

### 🔹 Projet principal : Application Drive (E6)

#### Contexte
Réalisation d’une application complète de gestion de drive (type supermarché), dans le cadre de l’épreuve E6.

#### Objectifs
- Créer une application web (client léger)
- Créer une application lourde (C#)
- Partager une base de données commune
- Simuler un environnement professionnel réel

#### Technologies utilisées
- PHP / Laravel
- C#
- MariaDB
- Debian (serveur)
- Apache
- SSH

#### Réalisation

Application composée de :
- Gestion des produits
- Gestion des clients
- Gestion des commandes (tickets)
- Interface de caisse (client lourd)

#### Difficultés rencontrées
- Problèmes réseau (OpenNebula)
- Connexion SSH instable
- Configuration base de données
- Intégration API simulée

#### Solutions apportées
- Reconfiguration réseau (IP fixe / DHCP)
- Création d’un environnement Debian stable
- Sécurisation de la base de données
- Mise en place d’un système de mapping pour API simulée

#### Résultat
Application fonctionnelle avec :
- base de données opérationnelle
- communication entre client léger et lourd
- simulation d’intégration API

---

### 🔹 Projet infrastructure réseau

#### Contexte
Mise en place d’une infrastructure serveur dans un environnement virtualisé.

#### Objectifs
- Déployer un serveur Debian
- Configurer un DHCP
- Mettre en place une base de données
- Assurer la communication réseau

#### Technologies
- Debian 12
- DHCP
- SSH
- VLAN

#### Résultat
Infrastructure fonctionnelle permettant :
- attribution automatique d’IP
- accès distant sécurisé
- hébergement d’applications

---

### 🔹 Projet API simulée (Fnac Darty)

#### Contexte
Demande d’intégration d’une API externe sans accès réel.

#### Objectif
Simuler le fonctionnement d’une API et adapter la base de données.

#### Réalisation
- Mapping des données API → base locale
- Simulation import/export
- Automatisation via CRON

#### Résultat
Système fonctionnel simulant une API réelle

---

## 🧠 Compétences développées

| Compétence | Description |
|----------|------------|
| Développement web | Création d’applications Laravel |
| Base de données | Modélisation et gestion MariaDB |
| Réseau | Configuration DHCP / SSH |
| Sécurité | Gestion des accès et sécurisation serveur |
| API | Simulation et intégration |
| Gestion de projet | Organisation et résolution de problèmes |

---

## ⚙️ Fiche technique

### Architecture

- Serveur Debian
- Apache + PHP
- MariaDB
- Client lourd C#
- Client léger Laravel

### Base de données

- Tables :
  - Clients
  - Produits
  - Tickets
  - Lignes de tickets

### Sécurité

- Désactivation root SSH
- Utilisateur dédié BDD
- Accès restreint

---

## 📘 Fiche utilisateur

### Accès à l’application

1. Se connecter au site
2. Naviguer dans les produits
3. Ajouter au panier
4. Valider commande

### Interface caisse

- Permet de gérer les ventes
- Calcul automatique des totaux

---

## 🔍 Analyse critique

### Points forts
- Projet complet (web + logiciel)
- Infrastructure réseau réelle
- Bonne gestion des données

### Points faibles
- Problèmes techniques liés à la plateforme OpenNebula
- API non réelle (simulation)

### Améliorations possibles
- Intégration d’une vraie API
- Amélioration UX
- Ajout de fonctionnalités avancées

---

## 🚀 Projet professionnel

À court terme :
- Valider le BTS SIO

À moyen terme :
- Intégrer une école d’ingénieur (ex : ESEO)

À long terme :
- Devenir développeur confirmé

---

## 📚 Annexes

- Code source :
  - https://github.com/NoanBregeon/Epreuve_E6_Legere
  - https://github.com/NoanBregeon/Epreuve_E6_Lourde

- Documents complémentaires :
  - Rapport technique
  - Captures d’écran