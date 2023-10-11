<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnel info</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .form-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            box-sizing: border-box;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 16px;
        }

        .left-column {
            grid-column: 1 / 2;
        }

        .right-column {
            grid-column: 2 / 3;
        }

        button {
            grid-column: span 2;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        #secondFormContainer {
            display: none;
        }

        .pdf-upload {
            display: flex;
            align-items: center;
        }

        .pdf-upload input {
            margin-left: 8px;
        }

        #btnPrevious, #btnValidate {
            margin-top: 10px;
            width: 100%;
        }


    </style>
</head>
<body>

    <div id="cvContainer" class="">
        <h2>Informations sur le personnel</h2>
        <div class="left-column">
        <p><strong>Nom:</strong> <?php echo $Personnel[0]['nom']?></p>
        <p><strong>Prénom:</strong> <?php echo $Personnel[0]['prenom']?></p>
        <p><strong>Date de naissance:</strong> <?php echo $Personnel[0]['naissance']?></p>
        <p><strong>Genre:</strong> <?php echo $Genre[0]['nom']?></p>
        <p><strong>Nationalité:</strong> <?php echo $Nationalite[0]['nom']?></p>
        <p><strong>Adresse:</strong> <?php echo $Personnel[0]['adress']?></p>
        <p><strong>District:</strong> <?php echo $District[0]['nom']?></p>
        <p><strong>Email:</strong> <?php echo $Personnel[0]['email']?></p>
        <p><strong>Téléphone:</strong> <?php echo $Personnel[0]['tel']?></p>
        <p><strong>Dernier diplôme:</strong> <a href="#" class="pdf-link" target="_blank"><?php echo $Diplome[0]['nom']?></a></p>
        <p><strong>Situation matrimoniale:</strong> <?php echo $Situation[0]['nom']?></p>

        <button type="button" onclick="afficherDeuxiemeFormulaire()">Suivant</button>
        </div>
    </div>

    <div id="secondFormContainer" class="">
        <h2>Informations du personnel dans l'entreprise</h2>
        <div class="left-column">
        <p><strong>Poste:</strong> <?php echo $Poste[0]['nom']?></p>
        <p><strong>Departement:</strong> <?php echo $Departement[0]['nom']?></p>
        <p><strong>Salariale brute:</strong> <?php echo $Salaire[0]['brute']?>AR </p>
        <p><strong>Salariale nette:</strong> <?php echo $Salaire[0]['nette']?>AR </p>
        <button type="button" onclick="afficherPremierFormulaire()">Precedent</button>
        </div>
    </div>
    
</form>

    <script>
        function afficherDeuxiemeFormulaire() {
            document.getElementById('cvContainer').style.display = 'none';
            document.getElementById('secondFormContainer').style.display = 'grid';
        }

        function afficherPremierFormulaire() {
            document.getElementById('cvContainer').style.display = 'grid';
            document.getElementById('secondFormContainer').style.display = 'none';
        }
    </script>

</body>
</html>

