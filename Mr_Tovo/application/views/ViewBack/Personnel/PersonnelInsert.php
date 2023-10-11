<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire personnel</title>
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
<form action="<?php echo base_url('index.php/BackController/PersonnelInsert');?>">
    <div id="cvContainer" class="form-container">
            <h2>Information sur le nouveau personnel</h2>
            
            <div class="left-column">
                
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>

                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" required>

                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>

                    <label for="adresse">Date d'embauche :</label>
                    <input type="date" id="adresse" name="embauche" required>
            </div>

            <div class="right-column">
                    <label for="email">Telephone :</label>
                    <input type="Telephone" id="Telephone" name="telephone" required>

                    <label for="dateNaissance">Date de naissance :</label>
                    <input type="date" id="dateNaissance" name="naissance" required>

                    <label for="adresse">Adresse :</label>
                    <input type="text" id="adresse" name="adress" required>
                
            </div>
            <button type="submit" id="btnValidate" >Valider</button>
    </div>
</form>

</body>
</html>
