<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations sur le candidat</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 600px;
            width: 100%;
            margin: 20px;
            padding: 40px;
            box-sizing: border-box;
            transition: transform 0.3s ease-in-out;
        }

        h2 {
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            margin: 15px 0;
            color: #495057;
            line-height: 1.6;
        }

        strong {
            color: #343a40;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .button {
            flex: 1;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .button-embaucher {
            background-color: #28a745;
        }

        .button-reject {
            background-color: #dc3545;
        }

        .pdf-link {
            color: #007BFF;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .pdf-link:hover {
            color: #0056b3;
        }

        .button:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Informations sur le candidat</h2>
    <p><strong>Nom:</strong> <?php echo $Candidat[0]['nom']?></p>
    <p><strong>Prénom:</strong> <?php echo $Candidat[0]['prenom']?></p>
    <p><strong>Date de naissance:</strong> <?php echo $Candidat[0]['naissance']?></p>
    <p><strong>Genre:</strong> <?php echo $Genre[0]['nom']?></p>
    <p><strong>Nationalité:</strong> <?php echo $Nationalite[0]['nom']?></p>
    <p><strong>Adresse:</strong> <?php echo $Candidat[0]['adress']?></p>
    <p><strong>District:</strong> <?php echo $District[0]['nom']?></p>
    <p><strong>Email:</strong> <?php echo $Candidat[0]['email']?></p>
    <p><strong>Téléphone:</strong> <?php echo $Candidat[0]['tel']?></p>
    <p><strong>Dernier diplôme:</strong> <a href="#" class="pdf-link" target="_blank"><?php echo $Diplome[0]['nom']?></a></p>
    <p><strong>Situation matrimoniale:</strong> <?php echo $Situation[0]['nom']?></p>
    <p><strong>Estimation salariale:</strong> <?php echo $SalaireMin?>AR - <?php echo $SalaireMax?>AR</p>

    <div class="button-container">
        <a href="#" class="button button-embaucher" onclick="embaucher()">Retour</a>
        <a href="#" class="button button-embaucher" onclick="embaucher()">Modifier</a>
        <a href="#" class="button button-embaucher" onclick="embaucher()">Revenir liste recrutement</a>
    </div>
</div>

</body>
</html>
