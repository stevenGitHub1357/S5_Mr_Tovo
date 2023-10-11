CREATE DATABASE s5tovo;


DROP TABLE salaire;
DROP TABLE infoPersonnel;
DROP TABLE absence;
DROP TABLE congee;
DROP TABLE etatCongee;
DROP TABLE reponseC;
DROP TABLE reponse;
DROP TABLE question;
DROP TABLE experience;
DROP TABLE infoCandidat;
DROP TABLE spectBesoin;
DROP TABLE besoin;
DROP TABLE departement;
DROP TABLE candidat;


DROP TABLE personnel;
DROP TABLE etatPersonnel
DROP TABLE poste;
DROP TABLE district;
DROP TABLE diplome;
DROP TABLE genre;
DROP TABLE situation;
DROP TABLE etat;
DROP TABLE nationalite;
DROP TABLE entreprise;


CREATE TABLE departement(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200)
);

CREATE TABLE poste(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200)
);

CREATE TABLE district(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200)
);

CREATE TABLE diplome(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200)
);

CREATE TABLE genre(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200)
);

CREATE TABLE situation(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200)
);

CREATE TABLE nationalite(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200)
);

CREATE TABLE etat(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200)
);


CREATE TABLE besoin(
    id SERIAL PRIMARY KEY,
    idDepartement INTEGER REFERENCES departement(id), 
    idPoste INTEGER REFERENCES poste(id),
    volumeH REAL,
    hommeJ REAL,
    salaire REAL,
    descritpion VARCHAR(10000),
    etat INTEGER REFERENCES etat(id)
);

CREATE TABLE spectBesoin(
    id SERIAL PRIMARY KEY,
    idBesoin INTEGER REFERENCES besoin(id),
    idDistrict INTEGER REFERENCES district(id),
    idDiplome INTEGER REFERENCES diplome(id),
    idNationalite INTEGER REFERENCES nationalite(id),
    idGenre INTEGER REFERENCES genre(id),
    idSituation INTEGER REFERENCES situation(id)
);

CREATE TABLE candidat(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200),
    prenom VARCHAR(200),
    adress VARCHAR(200),
    email VARCHAR(200),
    tel VARCHAR(200),
    naissance TIMESTAMP
);

CREATE TABLE infoCandidat(
    id SERIAL PRIMARY KEY,
    idBesoin INTEGER REFERENCES besoin(id),
    idCandidat INTEGER REFERENCES candidat(id),
    idSituation INTEGER REFERENCES situation(id),
    idDiplome INTEGER REFERENCES diplome(id),
    idNationalite INTEGER REFERENCES nationalite(id),
    idDistrict INTEGER REFERENCES  district(id),
    idGenre INTEGER REFERENCES genre(id),
    salaireMin REAL,
    salaireMax REAL
);

CREATE TABLE Entreprise(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(1000),
    email VARCHAR(1000),
    adress VARCHAR(1000),
    tel VARCHAR(100),
    manager VARCHAR(1000)
);

CREATE TABLE experience(
    id SERIAL PRIMARY KEY,
    idCandidat INTEGER REFERENCES candidat(id),
    idPost INTEGER REFERENCES poste(id),
    idEntreprise INTEGER REFERENCES entreprise(id),
    debut TIMESTAMP,
    fin TIMESTAMP
);

CREATE TABLE question(
    id SERIAL PRIMARY KEY,
    idBesoin INTEGER REFERENCES besoin(id),
    texte VARCHAR(1000),
    coefficient REAL
);


CREATE TABLE reponse(
    id SERIAL PRIMARY KEY,
    idQuestion INTEGER REFERENCES question(id),
    texte VARCHAR(1000),
    idEtat INTEGER REFERENCES etat(id)
);

CREATE TABLE reponseC(
    id SERIAL PRIMARY KEY,
    idQuestion INTEGER REFERENCES question(id),
    idReponse INTEGER REFERENCES reponse(id),
    idCandidat INTEGER REFERENCES candidat(id),
    note REAL
);

CREATE TABLE etatCongee(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200) 
);

CREATE TABLE personnel(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200),
    prenom VARCHAR(200),
    adress VARCHAR(200),
    email VARCHAR(200),
    tel VARCHAR(200),
    naissance TIMESTAMP,
    embauche TIMESTAMP,
    etat INTEGER REFERENCES etatPersonnel(id)
);

CREATE TABLE infoPersonnel(
    id SERIAL PRIMARY KEY,
    idPersonnel INTEGER REFERENCES personnel(id),
    idSituation INTEGER REFERENCES situation(id),
    idDiplome INTEGER REFERENCES diplome(id),
    idNationalite INTEGER REFERENCES nationalite(id),
    idDistrict INTEGER REFERENCES  district(id),
    idGenre INTEGER REFERENCES genre(id),
    idPoste INTEGER REFERENCES poste(id),
    idDepartement INTEGER REFERENCES departement(id)
);

CREATE TABLE salaire(
    id SERIAL PRIMARY KEY,
    idPersonnel INTEGER REFERENCES personnel(id),
    base REAL,
    brute REAL,
    nette REAL
);

CREATE TABLE typeCongee(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200) 
);

CREATE TABLE absence(
    id SERIAL PRIMARY KEY,
    idPersonnel INTEGER REFERENCES personnel(id),
    debut TIMESTAMP,
    fin TIMESTAMP,
    hdebut TIME,
    hfin TIME,
    excuse VARCHAR(100)
);

CREATE TABLE etatCongee(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200) 
);

CREATE TABLE congee(
    id SERIAL PRIMARY KEY,
    idPersonnel INTEGER REFERENCES personnel(id),
    debut TIMESTAMP,
    fin TIMESTAMP,
    excuse INTEGER REFERENCES typeConge(id),
    etat INTEGER REFERENCES etatCongee(id)
);










