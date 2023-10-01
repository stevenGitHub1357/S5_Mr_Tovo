-- Pour la table "departement"
INSERT INTO departement (nom) VALUES ('Ressources humaines');
INSERT INTO departement (nom) VALUES ('Développement informatique');
INSERT INTO departement (nom) VALUES ('Service clientèle');
INSERT INTO departement (nom) VALUES ('Marketing');
INSERT INTO departement (nom) VALUES ('Comptabilité');

-- Pour la table "poste"
INSERT INTO poste (nom) VALUES ('Analyste');
INSERT INTO poste (nom) VALUES ('Développeur');
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
INSERT INTO diplome (nom) VALUES ('Baccalauréat');
INSERT INTO diplome (nom) VALUES ('Licence');
INSERT INTO diplome (nom) VALUES ('Master');
INSERT INTO diplome (nom) VALUES ('Doctorat');
INSERT INTO diplome (nom) VALUES ('Certification professionnelle');

-- Pour la table "genre"
INSERT INTO genre (nom) VALUES ('Masculin');
INSERT INTO genre (nom) VALUES ('Féminin');
INSERT INTO genre (nom) VALUES ('Non binaire');
INSERT INTO genre (nom) VALUES ('Préfère ne pas préciser');
INSERT INTO genre (nom) VALUES ('Autre');

-- Pour la table "situation"
INSERT INTO situation (nom) VALUES ('Célibataire');
INSERT INTO situation (nom) VALUES ('Marié(e)');
INSERT INTO situation (nom) VALUES ('Divorcé(e)');
INSERT INTO situation (nom) VALUES ('Veuf/Veuve');
INSERT INTO situation (nom) VALUES ('En couple');

-- Pour la table "nationalite"
INSERT INTO nationalite (nom) VALUES ('Française');
INSERT INTO nationalite (nom) VALUES ('Américaine');
INSERT INTO nationalite (nom) VALUES ('Allemande');
INSERT INTO nationalite (nom) VALUES ('Espagnole');
INSERT INTO nationalite (nom) VALUES ('Canadienne');

-- Pour la table "etat"
INSERT INTO etat (nom) VALUES ('vrai');
INSERT INTO etat (nom) VALUES ('faux');

-- Pour la table "besoin"
INSERT INTO besoin VALUES (1,1,1,10,1,100000,'Recherche d une personne qualifier 1');
INSERT INTO besoin VALUES (2,2,2,20,2,200000,'Recherche d une personne qualifier 2');
INSERT INTO besoin VALUES (3,3,3,30,3,300000,'Recherche d une personne qualifier 3');

-- Pour la table "candidat"
INSERT INTO candidat (nom, prenom, adress) VALUES ('Dupont', 'Jean', '123 Rue de la Poste');
INSERT INTO candidat (nom, prenom, adress) VALUES ('Martin', 'Marie', '456 Avenue des Fleurs');
INSERT INTO candidat (nom, prenom, adress) VALUES ('Leclerc', 'Pierre', '789 Boulevard du Soleil');
INSERT INTO candidat (nom, prenom, adress) VALUES ('Dufresne', 'Sophie', '1010 Rue de la Mer');
INSERT INTO candidat (nom, prenom, adress) VALUES ('Girard', 'Luc', '2222 Avenue de la Lune');


-- Pour la table "infoCandidat"
INSERT INTO infoCandidat (idCandidat, idSituation, idDiplome, idNationalite, idDistrict, salaireMin, salaireMax)
VALUES (1, 1, 3, 1, 2, 30000.0, 45000.0);

INSERT INTO infoCandidat (idCandidat, idSituation, idDiplome, idNationalite, idDistrict, salaireMin, salaireMax)
VALUES (2, 2, 2, 2, 1, 35000.0, 50000.0);

INSERT INTO infoCandidat (idCandidat, idSituation, idDiplome, idNationalite, idDistrict, salaireMin, salaireMax)
VALUES (3, 3, 4, 3, 3, 40000.0, 55000.0);

INSERT INTO infoCandidat (idCandidat, idSituation, idDiplome, idNationalite, idDistrict, salaireMin, salaireMax)
VALUES (4, 4, 1, 4, 2, 25000.0, 40000.0);

INSERT INTO infoCandidat (idCandidat, idSituation, idDiplome, idNationalite, idDistrict, salaireMin, salaireMax)
VALUES (5, 5, 2, 5, 1, 32000.0, 48000.0);


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
INSERT INTO question (idBesion, texte, coefficient)
VALUES (1, 'Quelles sont vos compétences en gestion des ressources humaines ?', 8);

INSERT INTO question (idBesion, texte, coefficient)
VALUES (1, 'Avez-vous de l expérience dans la gestion d équipes ?', 7);

INSERT INTO question (idBesion, texte, coefficient)
VALUES (2, 'Quelles sont vos compétences en développement informatique ?', 9);

INSERT INTO question (idBesion, texte, coefficient)
VALUES (2, 'Avez-vous travaillé sur des projets complexes ?', 8);

INSERT INTO question (idBesion, texte, coefficient)
VALUES (3, 'Comment gérez-vous les demandes des clients ?', 5);

INSERT INTO question (idBesion, texte, coefficient)
VALUES (1, 'Décrivez une situation où vous avez géré un conflit au sein de l équipe.', 8);

INSERT INTO question (idBesion, texte, coefficient)
VALUES (2, 'Pouvez-vous expliquer comment vous optimisez la performance des applications ?', 7);

INSERT INTO question (idBesion, texte, coefficient)
VALUES (2, 'Avez-vous travaillé avec des bases de données NoSQL ?', 5);

INSERT INTO question (idBesion, texte, coefficient)
VALUES (3, 'Comment traitez-vous les retours négatifs des clients et y répondez-vous ?', 4);

INSERT INTO question (idBesion, texte, coefficient)
VALUES (3, 'Pouvez-vous donner un exemple d amélioration de la satisfaction client que vous avez réalisée ?', 0.9);

INSERT INTO question (idBesion, texte, coefficient)
VALUES (1, 'Comment suivez-vous les performances de l équipe en termes de productivité ?', 5);

INSERT INTO question (idBesion, texte, coefficient)
VALUES (2, 'Quels sont vos langages de programmation préférés et pourquoi ?', 7);

INSERT INTO question (idBesion, texte, coefficient)
VALUES (2, 'Parlez-nous d un projet qui a nécessité une résolution de problème complexe.', 8);

INSERT INTO question (idBesion, texte, coefficient)
VALUES (3, 'Comment gérez-vous les attentes des clients en matière de délais de livraison ?', 8);

INSERT INTO question (idBesion, texte, coefficient)
VALUES (3, 'Avez-vous des certifications liées au service client ?', 8);










-- Pour la table "reponse" avec des références à des questions ayant un "idEtat" de 1 ou 2
INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (1, 'Dans cette situation, j ai encouragé la communication ouverte et résolu le conflit de manière à maintenir une atmosphère de travail positive.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (2, 'Pour optimiser la performance des applications, j utilise des techniques de mise en cache et de compression des données. J ai travaillé avec MongoDB pour des projets NoSQL.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (3, 'Lorsque les clients expriment des préoccupations, je les écoute attentivement, prends des mesures pour résoudre leurs problèmes rapidement et leur assure que leurs préoccupations sont prises en compte.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (4, 'J ai utilisé des algorithmes de recherche avancés pour résoudre un problème complexe de recherche de texte. Cela a considérablement amélioré la pertinence des résultats.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (5, 'J ai mis en œuvre un programme de formation pour les agents du service clientèle, ce qui a augmenté la satisfaction client de 20% en six mois.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (6, 'Je suis en mesure de suivre les performances de l équipe grâce à des outils de suivi de la productivité, et j organise régulièrement des réunions d équipe pour évaluer les progrès.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (7, 'Mes langages de programmation préférés sont Python et JavaScript en raison de leur polyvalence. Un projet complexe que j ai résolu impliquait la gestion de gros volumes de données en temps réel.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (8, 'J ai résolu un problème complexe de cryptage de données en utilisant un algorithme de chiffrement avancé. Cela a renforcé la sécurité de l application.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (9, 'Je m assure de respecter scrupuleusement les délais de livraison en gérant efficacement les priorités et en communiquant régulièrement avec les clients.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (10, 'Je possède une certification en gestion de la satisfaction client qui m aide à améliorer la qualité du service et à résoudre les problèmes rapidement.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (11, 'J ai développé un système de gestion de base de données qui a amélioré les performances de l application de manière significative.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (12, 'Lorsqu un problème technique survient, je travaille en étroite collaboration avec l équipe de support pour une résolution rapide et efficace.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (13, 'Je suis certifié en sécurité informatique, ce qui garantit que les données sensibles sont bien protégées.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (14, 'J ai mis en place un système de gestion des tâches qui a permis d optimiser la répartition du travail au sein de l équipe.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (15, 'Lorsque j ai rencontré une situation de crise, j ai agi rapidement pour minimiser les impacts négatifs sur le client et l entreprise.', 1);











-- Pour la table "reponse" avec des références à des questions ayant des "idQuestion" de 1 à 15
INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (1, 'Dans cette situation, j ai encouragé la communication ouverte et résolu le conflit de manière à maintenir une atmosphère de travail positive.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (2, 'Pour optimiser la performance des applications, j utilise des techniques de mise en cache et de compression des données. J ai travaillé avec MongoDB pour des projets NoSQL.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (3, 'Lorsque les clients expriment des préoccupations, je les écoute attentivement, prends des mesures pour résoudre leurs problèmes rapidement et leur assure que leurs préoccupations sont prises en compte.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (4, 'J ai utilisé des algorithmes de recherche avancés pour résoudre un problème complexe de recherche de texte. Cela a considérablement amélioré la pertinence des résultats.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (5, 'J ai mis en œuvre un programme de formation pour les agents du service clientèle, ce qui a augmenté la satisfaction client de 20% en six mois.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (6, 'Je suis en mesure de suivre les performances de l équipe grâce à des outils de suivi de la productivité, et j organise régulièrement des réunions d équipe pour évaluer les progrès.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (7, 'Mes langages de programmation préférés sont Python et JavaScript en raison de leur polyvalence. Un projet complexe que j ai résolu impliquait la gestion de gros volumes de données en temps réel.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (8, 'J ai résolu un problème complexe de cryptage de données en utilisant un algorithme de chiffrement avancé. Cela a renforcé la sécurité de l application.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (9, 'Je m assure de respecter scrupuleusement les délais de livraison en gérant efficacement les priorités et en communiquant régulièrement avec les clients.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (10, 'Je possède une certification en gestion de la satisfaction client qui m aide à améliorer la qualité du service et à résoudre les problèmes rapidement.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (11, 'J ai développé un système de gestion de base de données qui a amélioré les performances de l application de manière significative.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (12, 'Lorsqu un problème technique survient, je travaille en étroite collaboration avec l équipe de support pour une résolution rapide et efficace.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (13, 'Je suis certifié en sécurité informatique, ce qui garantit que les données sensibles sont bien protégées.', 2);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (14, 'J ai mis en place un système de gestion des tâches qui a permis d optimiser la répartition du travail au sein de l équipe.', 1);

INSERT INTO reponse (idQuestion, texte, idEtat)
VALUES (15, 'Lorsque j ai rencontré une situation de crise, j ai agi rapidement pour minimiser les impacts négatifs sur le client et l entreprise.', 1);








-- Pour la table "reponseC" avec des références à des questions, réponses et candidats fictifs
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

