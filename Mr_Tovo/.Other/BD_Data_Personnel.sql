-- Personnel
INSERT INTO personnel (nom, prenom, adress, email, tel, naissance, embauche, etat)
VALUES ('Doe', 'John', '123 Rue de la Société', 'john.doe@example.com', '+1234567890', '1990-01-15', '2020-03-01',1);

INSERT INTO personnel (nom, prenom, adress, email, tel, naissance, embauche, etat)
VALUES ('Smith', 'Jane', '456 Avenue de l Industrie', 'jane.smith@example.com', '+9876543210', '1985-07-22', '2018-05-10',1);




-- InfoPersonnel
INSERT INTO infoPersonnel (idPersonnel, idSituation, idDiplome, idNationalite, idDistrict, idGenre, idPoste, idDepartement)
VALUES (1, 1, 2, 3, 4, 5, 1, 2);

INSERT INTO infoPersonnel (idPersonnel, idSituation, idDiplome, idNationalite, idDistrict, idGenre, idPoste, idDepartement)
VALUES (2, 2, 3, 4, 5, 1, 2 ,3);




-- Salaire
INSERT INTO salaire (idPersonnel, base, brute, nette)
VALUES (1, 40000, 45000, 35000);

INSERT INTO salaire (idPersonnel, base, brute, nette)
VALUES (2, 45000, 50000, 38000);




-- Absence
INSERT INTO absence (idPersonnel,  debut, fin, excuse)
VALUES (1, '2022-10-15', '2022-12-22','maladie');

INSERT INTO absence (idPersonnel,  debut, fin, excuse)
VALUES (2,  '2022-10-05', '2022-12-12','pause');



-- Congee
INSERT INTO congee (idPersonnel,  debut, fin, excuse,etat)
VALUES (1,'2022-08-15', '2022-08-22',1,1);

INSERT INTO congee (idPersonnel,  debut, fin, excuse,etat)
VALUES (2,'2022-10-05', '2022-10-12',2,1);











