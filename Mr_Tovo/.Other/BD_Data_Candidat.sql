-- Pour la table "candidat"
INSERT INTO candidat (nom, prenom, adress, email, tel, naissance) VALUES ('Dupont', 'Jean', '123 Rue de la Poste', 'Jean@gmail.com', '+2210000152', now());
INSERT INTO candidat (nom, prenom, adress, email, tel, naissance) VALUES ('Martin', 'Marie', '456 Avenue des Fleurs', 'marie@gmail.com', '+2210000152' ,now());
INSERT INTO candidat (nom, prenom, adress, email, tel, naissance) VALUES ('Leclerc', 'Pierre', '789 Boulevard du Soleil', 'pierre@gmail.com', '+2210000152', now());
INSERT INTO candidat (nom, prenom, adress, email, tel, naissance) VALUES ('Dufresne', 'Sophie', '1010 Rue de la Mer', 'Sophie@gmail.com', '+2210000152', now());
INSERT INTO candidat (nom, prenom, adress, email, tel, naissance) VALUES ('Girard', 'Luc', '2222 Avenue de la Lune', 'Luc@gmail.com', '+2210000152', now());




-- Pour la table "infoCandidat"
INSERT INTO infoCandidat (idBesoin, idCandidat, idSituation, idDiplome, idNationalite, idDistrict,idGenre, salaireMin, salaireMax)
VALUES (1, 1, 1, 3, 1, 2, 1, 30000.0, 45000.0);

INSERT INTO infoCandidat (idBesoin, idCandidat, idSituation, idDiplome, idNationalite, idDistrict,idGenre, salaireMin, salaireMax)
VALUES (2, 2, 2, 2, 2, 1, 2, 35000.0, 50000.0);

INSERT INTO infoCandidat (idBesoin, idCandidat, idSituation, idDiplome, idNationalite, idDistrict,idGenre, salaireMin, salaireMax)
VALUES (3, 3, 3, 4, 3, 3, 1, 40000.0, 55000.0);

INSERT INTO infoCandidat (idBesoin, idCandidat, idSituation, idDiplome, idNationalite, idDistrict,idGenre, salaireMin, salaireMax)
VALUES (1, 4, 4, 1, 4, 2, 2, 25000.0, 40000.0);

INSERT INTO infoCandidat (idBesoin, idCandidat, idSituation, idDiplome, idNationalite, idDistrict,idGenre, salaireMin, salaireMax)
VALUES (2, 5, 5, 2, 5, 1, 1, 32000.0, 48000.0);





-- Pour la table "experience"
INSERT INTO experience (idCandidat, idPost, idEntreprise, debut, fin)
VALUES (1, 1, 1, '2022-01-15 09:00:00', '2022-12-31 17:30:00');

INSERT INTO experience (idCandidat, idPost, idEntreprise, debut, fin)
VALUES (2, 2, 1, '2021-03-10 08:45:00', '2022-11-30 16:15:00');

INSERT INTO experience (idCandidat, idPost, idEntreprise, debut, fin)
VALUES (3, 3, 1, '2020-06-22 10:30:00', '2021-09-15 18:00:00');

INSERT INTO experience (idCandidat, idPost, idEntreprise, debut, fin)
VALUES (4, 4, 1, '2019-12-01 08:00:00', '2020-07-25 16:45:00');

INSERT INTO experience (idCandidat, idPost, idEntreprise, debut, fin)
VALUES (4, 5, 1, '2021-02-18 09:30:00', '2021-10-10 17:00:00');




-- Pour la table "reponseC" avec des references à des questions, reponses et candidats fictifs
INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (1, 1, 1, 0);

INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (2, 2, 2, 0);

INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (3, 1, 3, 0);

INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (4, 2, 1, 0);

INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (5, 1, 2, 0);

INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (6, 2, 3, 0);

INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (7, 1, 1, 0);

INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (8, 2, 2, 0);

INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (9, 1, 3, 0);

INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (10, 2, 1, 0);

INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (11, 1, 2, 0);

INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (12, 2, 3, 0);

INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (13, 1, 1, 0);

INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (14, 2, 2, 0);

INSERT INTO reponseC (idQuestion, idReponse, idCandidat, note)
VALUES (15, 1, 3, 0);
