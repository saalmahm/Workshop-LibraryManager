# 📚 Conception d'une Base de Données - Gestion de Bibliothèque

## 🎯 Objectifs du Projet

Ce projet consiste à concevoir une base de données pour la gestion d'une bibliothèque. Nous allons suivre les étapes de conception d'une base de données : 

1. **MCD (Modèle Conceptuel de Données)** : Identification des entités, des associations et des cardinalités. ✨
2. **MLD (Modèle Logique de Données)** : Transformation du MCD en tables relationnelles en respectant les règles de normalisation. 🔄
3. **MPD (Modèle Physique de Données)** : Implémentation du MLD avec des types de données et des contraintes physiques adaptées à un SGBD. 💻

## 🌍 Contexte

Le projet concerne la gestion d'une bibliothèque où :

- Les utilisateurs peuvent emprunter plusieurs **livres**. 📖
- Les **livres** sont classés par **catégories**. 🗂️
- Chaque emprunt enregistre la **date de l'emprunt** et la **date de retour prévue**. 📅
- Les **administrateurs** gèrent les livres et les catégories. 👩‍💼👨‍💼

### 🏷️ Entités principales

- **Utilisateur** : Représente les clients de la bibliothèque. 👤
- **Livre** : Représente les livres disponibles à l'emprunt. 📚
- **Catégorie** : Représente les catégories dans lesquelles les livres sont classés. 🏷️
- **Administrateur** : Représente les administrateurs qui gèrent les livres et les catégories. 👨‍💻👩‍💻

### 🔗 Relations

- Un **utilisateur** peut emprunter plusieurs **livres** (relation N:N). 🔄
- Un **livre** appartient à une **catégorie** (relation 1:N). 🗂️📖
- Un **administrateur** peut gérer plusieurs **livres** et plusieurs **catégories** (relations N:N). 👨‍💻📚

## 📁 Structure des Fichiers

- **MCD** : Modèle conceptuel de données représentant les entités, relations, et cardinalités. 🖋️
- **MLD** : Modèle logique de données avec les tables et les relations entre elles. 💾
- **MPD** : Modèle physique de données incluant les types de données, les clés primaires et étrangères. 🔐
