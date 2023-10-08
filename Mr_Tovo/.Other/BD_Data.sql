-- Pour la table "departement"
INSERT INTO departement (nom) VALUES ('Ressources humaines');
INSERT INTO departement (nom) VALUES ('Developpement informatique');
INSERT INTO departement (nom) VALUES ('Service clientèle');
INSERT INTO departement (nom) VALUES ('Marketing');
INSERT INTO departement (nom) VALUES ('Comptabilite');

-- Pour la table "poste"
INSERT INTO poste (nom) VALUES ('Analyste');
INSERT INTO poste (nom) VALUES ('Developpeur');
INSERT INTO poste (nom) VALUES ('Agent de service clientèle');
INSERT INTO poste (nom) VALUES ('Responsable marketing');
INSERT INTO poste (nom) VALUES ('Comptable');

-- Pour la table "district"
INSERT INTO district (nom) VALUES ('District A');
INSERT INTO district (nom) VALUES ('District B');
INSERT INTO district (nom) VALUES ('District C');
INSERT INTO district (nom) VALUES ('District D');
INSERT INTO district (nom) VALUES ('District E');

-- Pour la table "diplome"
INSERT INTO diplome (nom) VALUES ('Baccalaureat');
INSERT INTO diplome (nom) VALUES ('Licence');
INSERT INTO diplome (nom) VALUES ('Master');
INSERT INTO diplome (nom) VALUES ('Doctorat');
INSERT INTO diplome (nom) VALUES ('Certification professionnelle');

-- Pour la table "genre"
INSERT INTO genre (nom) VALUES ('Masculin');
INSERT INTO genre (nom) VALUES ('Feminin');
INSERT INTO genre (nom) VALUES ('Non binaire');
INSERT INTO genre (nom) VALUES ('Prefère ne pas preciser');
INSERT INTO genre (nom) VALUES ('Autre');

-- Pour la table "situation"
INSERT INTO situation (nom) VALUES ('Celibataire');
INSERT INTO situation (nom) VALUES ('Marie(e)');
INSERT INTO situation (nom) VALUES ('Divorce(e)');
INSERT INTO situation (nom) VALUES ('Veuf/Veuve');
INSERT INTO situation (nom) VALUES ('En couple');

-- Pour la table "nationalite"
INSERT INTO nationalite (nom) VALUES ('Française');
INSERT INTO nationalite (nom) VALUES ('Americaine');
INSERT INTO nationalite (nom) VALUES ('Allemande');
INSERT INTO nationalite (nom) VALUES ('Espagnole');
INSERT INTO nationalite (nom) VALUES ('Canadienne');

-- Pour la table "etat"
INSERT INTO etat (nom) VALUES ('vrai');
INSERT INTO etat (nom) VALUES ('faux');

-- Pour la table "besoin"
INSERT INTO besoin VALUES (1,1,1,10,1,100000,'Recherche d une personne qualifier 1',1);
INSERT INTO besoin VALUES (2,2,2,20,2,200000,'Recherche d une personne qualifier 2',1);
INSERT INTO besoin VALUES (3,3,3,30,3,300000,'Recherche d une personne qualifier 3',1);

-- Pour la table "candidat"
INSERT INTO candidat (nom, prenom, adress, email, tel, naissance) VALUES ('Dupont', 'Jean', '123 Rue de la Poste', 'Jean@gmail.com', '+2210000152', now());
INSERT INTO candidat (nom, prenom, adress, email, tel, naissance) VALUES ('Martin', 'Marie', '456 Avenue des Fleurs', 'marie@gmail.com' ,now());
INSERT INTO candidat (nom, prenom, adress, email, tel, naissance) VALUES ('Leclerc', 'Pierre', '789 Boulevard du Soleil', 'pierre@gmail.com', '+2210000152', now());
INSERT INTO candidat (nom, prenom, adress, email, tel, naissance) VALUES ('Dufresne', 'Sophie', '1010 Rue de la Mer', 'Sophie@gmail.com', '+2210000152', now());
INSERT INTO candidat (nom, prenom, adress, email, tel, naissance) VALUES ('Girard', 'Luc', '2222 Avenue de la Lune', 'Luc@gmail.com', '+2210000152', now());


-- Pour la table "infoCandidat"
INSERT INTO infoCandidat (idCandidat, idSituation, idDiplome, idNationalite, idDistrict,idGenre, salaireMin, salaireMax)
VALUES (1, 1, 3, 1, 2, 1, 30000.0, 45000.0);

INSERT INTO infoCandidat (idCandidat, idSituation, idDiplome, idNationalite, idDistrict,idGenre, salaireMin, salaireMax)
VALUES (2, 2, 2, 2, 1, 2, 35000.0, 50000.0);

INSERT INTO infoCandidat (idCandidat, idSituation, idDiplome, idNationalite, idDistrict,idGenre, salaireMin, salaireMax)
VALUES (3, 3, 4, 3, 3, 1, 40000.0, 55000.0);

INSERT INTO infoCandidat (idCandidat, idSituation, idDiplome, idNationalite, idDistrict,idGenre, salaireMin, salaireMax)
VALUES (4, 4, 1, 4, 2, 2, 25000.0, 40000.0);

INSERT INTO infoCandidat (idCandidat, idSituation, idDiplome, idNationalite, idDistrict,idGenre, salaireMin, salaireMax)
VALUES (5, 5, 2, 5, 1, 1, 32000.0, 48000.0);


-- Pour la table "experience"
INSERT INTO experience (idCandidat, lieu, debut, fin)
VALUES (1, 'Entreprise A', '2022-01-15 09:00:00', '2022-12-31 17:30:00');

INSERT INTO experience (idCandidat, lieu, debut, fin)
VALUES (2, 'Entreprise B', '2021-03-10 08:45:00', '2022-11-30 16:15:00');

INSERT INTO experience (idCandidat, lieu, debut, fin)
VALUES (3, 'Entreprise C', '2020-06-22 10:30:00', '2021-09-15 18:00:00');

INSERT INTO experience (idCandidat, lieu, debut, fin)
VALUES (4, 'Entreprise D', '2019-12-01 08:00:00', '2020-07-25 16:45:00');

INSERT INTO experience (idCandidat, lieu, debut, fin)
VALUES (5, 'Entreprise E', '2021-02-18 09:30:00', '2021-10-10 17:00:00');








-- Pour la table "question"
INSERT INTO question (idBesoin, texte, coefficient)
VALUES (1, 'Quelles sont vos competences en gestion des ressources humaines ?', 8);

INSERT INTO question (idBesoin, texte, coefficient)
VALUES (1, 'Avez-vous de l experience dans la gestion d equipes ?', 7);

INSERT INTO question (idBesoin, texte, coefficient)
VALUES (2, 'Quelles sont vos competences en developpement informatique ?', 9);

INSERT INTO question (idBesoin, texte, coefficient)
VALUES (2, 'Avez-vous travaille sur des projets complexes ?', 8);

INSERT INTO question (idBesoin, texte, coefficient)
VALUES (3, 'Comment gerez-vous les demandes des clients ?', 5);

INSERT INTO question (idBesoin, texte, coefficient)
VALUES (1, 'Decrivez une situation où vous avez gere un conflit au sein de l equipe.', 8);

INSERT INTO question (idBesoin, texte, coefficient)
VALUES (2, 'Pouvez-vous expliquer comment vous optimisez la performance des applications ?', 7);

INSERT INTO question (idBesoin, texte, coefficient)
VALUES (2, 'Avez-vous travaille avec des bases de donnees NoSQL ?', 5);

INSERT INTO question (idBesoin, texte, coefficient)
VALUES (3, 'Comment traitez-vous les retours negatifs des clients et y repondez-vous ?', 4);

INSERT INTO question (idBesoin, texte, coefficient)
VALUES (3, 'Pouvez-vous donner un exemple d amelioration de la satisfaction client que vous avez realisee ?', 0.9);

INSERT INTO question (idBesoin, texte, coefficient)
VALUES (1, 'Comment suivez-vous les performances de l equipe en termes de productivite ?', 5);

INSERT INTO question (idBesoin, texte, coefficient)
VALUES (2, 'Quels sont vos langages de programmation preferes et pourquoi ?', 7);

INSERT INTO question (idBesoin, texte, coefficient)
VALUES (2, 'Parlez-nous d un projet qui a necessite une resolution de problème complexe.', 8);

INSERT INTO question (idBesoin, texte, coefficient)
VALUES (3, 'Comment gerez-vous les attentes des clients en matière de delais de livraison ?', 8);

INSERT INTO question (idBesoin, texte, coefficient)
VALUES (3, 'Avez-vous des certifications liees au service client ?', 8);










-- Pour la table "reponse" avec des references à des questions ayant un "idEtat" de 1 ou 2
INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (1, 'Dans cette situation, j ai encourage la communication ouverte et resolu le conflit de manière à maintenir une atmosphère de travail positive.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (2, 'Pour optimiser la performance des applications, j utilise des techniques de mise en cache et de compression des donnees. J ai travaille avec MongoDB pour des projets NoSQL.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (3, 'Lorsque les clients expriment des preoccupations, je les ecoute attentivement, prends des mesures pour resoudre leurs problèmes rapidement et leur assure que leurs preoccupations sont prises en compte.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (4, 'J ai utilise des algorithmes de recherche avances pour resoudre un problème complexe de recherche de texte. Cela a considerablement ameliore la pertinence des resultats.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (5, 'J ai mis en œuvre un programme de formation pour les agents du service clientèle, ce qui a augmente la satisfaction client de 20% en six mois.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (6, 'Je suis en mesure de suivre les performances de l equipe grâce à des outils de suivi de la productivite, et j organise regulièrement des reunions d equipe pour evaluer les progrès.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (7, 'Mes langages de programmation preferes sont Python et JavaScript en raison de leur polyvalence. Un projet complexe que j ai resolu impliquait la gestion de gros volumes de donnees en temps reel.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (8, 'J ai resolu un problème complexe de cryptage de donnees en utilisant un algorithme de chiffrement avance. Cela a renforce la securite de l application.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (9, 'Je m assure de respecter scrupuleusement les delais de livraison en gerant efficacement les priorites et en communiquant regulièrement avec les clients.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (10, 'Je possède une certification en gestion de la satisfaction client qui m aide à ameliorer la qualite du service et à resoudre les problèmes rapidement.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (11, 'J ai developpe un système de gestion de base de donnees qui a ameliore les performances de l application de manière significative.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (12, 'Lorsqu un problème technique survient, je travaille en etroite collaboration avec l equipe de support pour une resolution rapide et efficace.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (13, 'Je suis certifie en securite informatique, ce qui garantit que les donnees sensibles sont bien protegees.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (14, 'J ai mis en place un système de gestion des tâches qui a permis d optimiser la repartition du travail au sein de l equipe.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (15, 'Lorsque j ai rencontre une situation de crise, j ai agi rapidement pour minimiser les impacts negatifs sur le client et l entreprise.', 1);











-- Pour la table "reponse" avec des references à des questions ayant des "idQuestion" de 1 à 15
INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (1, 'Dans cette situation, j  une atmosphère de travail positive.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (2, 'Pour optimiser la perforon des donnees. J ai travaille avec MongoDB pour des projets NoSQL.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (3, 'Lorsque les clients exprsoudre leurs problèmes rapidement et leur assure que leurs preoccupations sont prises en compte.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (4, 'J ai utilise des algorite. Cela a considerablement ameliore la pertinence des resultats.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (5, 'J ai mis en œuvre un protisfaction client de 20% en six mois.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (6, 'Je suis en mesure de suiet j organise regulièrement des reunions d equipe pour evaluer les progrès.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (7, 'Mes langages de programm complexe que j ai resolu impliquait la gestion de gros volumes de donnees en temps reel.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (8, 'J ai resolu un problème  Cela a renforce la securite de l application.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (9, 'Je m assure de respecteren communiquant regulièrement avec les clients.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (10, 'Je possède une certificervice et à resoudre les problèmes rapidement.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (11, 'J ai developpe un systè de manière significative.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (12, 'Lorsqu un problème techur une resolution rapide et efficace.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (13, 'Je suis certifie en sec.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (14, 'J ai mis en place un sy sein de l equipe.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (15, 'Lorsque j ai rencontre ur le client et l entreprise.', 1);








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



-- Pour la table "spectBesoin"
INSERT INTO spectBesoin (idBesoin, idDistrict, idDiplome, idNationalite, idGenre, idSituation)
VALUES (1, 1, 2, 3, 4, 1);

INSERT INTO spectBesoin (idBesoin, idDistrict, idDiplome, idNationalite, idGenre, idSituation)
VALUES (2, 3, 4, 2, 5, 1);

INSERT INTO spectBesoin (idBesoin, idDistrict, idDiplome, idNationalite, idGenre, idSituation)
VALUES (3, 5, 1, 5, 3, 1);

