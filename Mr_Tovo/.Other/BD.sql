CREATE DATABASE s5tovo;

DROP TABLE reponseC;
DROP TABLE reponse;
DROP TABLE question;
DROP TABLE experience;
DROP TABLE infoCandidat;
DROP TABLE spectBesoin;
DROP TABLE besoin;
DROP TABLE departement;
DROP TABLE candidat;


DROP TABLE poste;
DROP TABLE district;
DROP TABLE diplome;
DROP TABLE genre;
DROP TABLE situation;
DROP TABLE etat;
DROP TABLE nationalite;


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
    descritpion VARCHAR(10000)  
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
    naissance TIMESTAMP
);

CREATE TABLE infoCandidat(
    id SERIAL PRIMARY KEY,
    idCandidat INTEGER REFERENCES candidat(id),
    idSituation INTEGER REFERENCES situation(id),
    idDiplome INTEGER REFERENCES diplome(id),
    idNationalite INTEGER REFERENCES nationalite(id),
    idDistrict INTEGER REFERENCES  district(id),
    salaireMin REAL,
    salaireMax REAL
);

CREATE TABLE experience(
    id SERIAL PRIMARY KEY,
    idCandidat INTEGER REFERENCES candidat(id),
    lieu VARCHAR(100),
    debut TIMESTAMP,
    fin TIMESTAMP
);

CREATE TABLE question(
    id SERIAL PRIMARY KEY,
    idBesion INTEGER REFERENCES besoin(id),
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




