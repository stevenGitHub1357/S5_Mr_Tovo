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
INSERT INTO nationalite (nom) VALUES ('Malagasy');
INSERT INTO nationalite (nom) VALUES ('Francaise');
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









-- Pour la table "spectBesoin"
INSERT INTO spectBesoin (idBesoin, idDistrict, idDiplome, idNationalite, idGenre, idSituation)
VALUES (1, 1, 2, 3, 4, 1);

INSERT INTO spectBesoin (idBesoin, idDistrict, idDiplome, idNationalite, idGenre, idSituation)
VALUES (2, 3, 4, 2, 5, 1);

INSERT INTO spectBesoin (idBesoin, idDistrict, idDiplome, idNationalite, idGenre, idSituation)
VALUES (3, 5, 1, 5, 3, 1);



-- Pour la table "Entreprise"
INSERT INTO Entreprise (nom, email, adress, tel, manager)
VALUES ('Entreprise A', 'entrepriseA@example.com', '123 Rue de la Société', '+1234567890', 'John Doe');

INSERT INTO Entreprise (nom, email, adress, tel, manager)
VALUES ('Entreprise B', 'entrepriseB@example.com', '456 Avenue de l Industrie', '+9876543210', 'Jane Smith');

INSERT INTO Entreprise (nom, email, adress, tel, manager)
VALUES ('Entreprise C', 'entrepriseC@example.com', '789 Boulevard des Entreprises', '+1112223333', 'Robert Johnson');

--TypeCongee
INSERT INTO typeCongee (nom)
VALUES ('Congé sans solde');

INSERT INTO typeCongee (nom)
VALUES ('Maladie');


--EtatCongee
INSERT INTO etatCongee (nom)
VALUES ('Attente');

INSERT INTO etatCongee (nom)
VALUES ('Accepter');

INSERT INTO etatCongee (nom)
VALUES ('Refuser');


--EtatPersonnel

INSERT INTO etatPersonnel (nom)
VALUES ('actif');

INSERT INTO etatPersonnel (nom)
VALUES ('Test');

INSERT INTO etatPersonnel (nom)
VALUES ('Renvoier');

INSERT INTO etatPersonnel (nom)
VALUES ('Retraiter');