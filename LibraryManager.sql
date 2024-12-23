create database LibraryManager;
use LibraryManager;

CREATE TABLE Utilisateur (
    id_utilisateur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telephone VARCHAR(15)
);

CREATE TABLE Administrateur (
    id_admin INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telephone VARCHAR(15)
);

CREATE TABLE Categorie (
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(50) NOT NULL
);


CREATE TABLE Livre (
    id_livre INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(100) NOT NULL,
    auteur VARCHAR(100),
    id_categorie INT,
    FOREIGN KEY (id_categorie) REFERENCES Categorie(id_categorie)
);

CREATE TABLE Emprunt (
    id_emprunt INT AUTO_INCREMENT PRIMARY KEY,
    date_emprunt DATE NOT NULL,
    date_retour DATE NOT NULL,
    id_utilisateur INT,
    id_livre INT,
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur),
    FOREIGN KEY (id_livre) REFERENCES Livre(id_livre)
);

CREATE TABLE GestionLivre (
    id_gestion_livre INT AUTO_INCREMENT PRIMARY KEY,
    id_admin INT,
    id_livre INT,
    FOREIGN KEY (id_admin) REFERENCES Administrateur(id_admin),
    FOREIGN KEY (id_livre) REFERENCES Livre(id_livre)
);

CREATE TABLE GestionCategorie (
    id_gestion_categorie INT AUTO_INCREMENT PRIMARY KEY,
    id_admin INT,
    id_categorie INT,
    FOREIGN KEY (id_admin) REFERENCES Administrateur(id_admin),
    FOREIGN KEY (id_categorie) REFERENCES Categorie(id_categorie)
);


