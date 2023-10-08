<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire CV</title>
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

<form action="<?php echo base_url('index.php/FrontController/CandidatCvInsert');?>">
    <div id="cvContainer" class="form-container">
        <h2>CV du candidat</h2>
        
        <div class="left-column">
            
                <label for="genre">Genre :</label>
                <select id="genre" name="genre" required>
                    <?php  for($i=0; $i<count($Genre); $i++){?>
                        <option value="<?php echo $Genre[$i]['id']?>"><?php echo $Genre[$i]['nom']?></option>
                    <?php } ?>
                </select>

                <label for="genre">Nationalite :</label>
                <select id="Nationalite" name="nationalite" required>
                    <?php  for($i=0; $i<count($Nationalite); $i++){?>
                        <option value="<?php echo $Nationalite[$i]['id']?>"><?php echo $Nationalite[$i]['nom']?></option>
                    <?php } ?>
                </select>
                

            
        </div>

        <div class="right-column">

                <label for="situationMatrimoniale">Situation matrimoniale :</label>
                <select id="situationMatrimoniale" name="situation" required>
                <?php  for($i=0; $i<count($Situation); $i++){?>
                        <option value="<?php echo $Situation[$i]['id']?>"><?php echo $Situation[$i]['nom']?></option>
                    <?php } ?>
                </select>

                <label for="genre">District du logement:</label>
                <select id="District" name="district" required>
                    <?php  for($i=0; $i<count($District); $i++){?>
                        <option value="<?php echo $District[$i]['id']?>"><?php echo $District[$i]['nom']?></option>
                    <?php } ?>
                </select>

            
        </div>

        <button type="button" onclick="afficherDeuxiemeFormulaire()">Suivant</button>
    </div>

    <div id="secondFormContainer" class="form-container">
        <h2>Suite</h2>
        <div class="left-column">
            
                <label for="diplome">Diplôme :</label>
                <select id="diplome" name="diplome" required>
                    <?php  for($i=0; $i<count($Diplome); $i++){?>
                        <option value="<?php echo $Diplome[$i]['id']?>"><?php echo $Diplome[$i]['nom']?></option>
                    <?php } ?>
                </select>

                <label for="estimationSalariale">Saliare maximum :</label>
                <input type="number" id="estimationSalariale" name="salaireMin" required>

            
            <button type="button" id="btnPrevious" onclick="afficherPremierFormulaire()">Précédent</button>
        </div>

        <div class="right-column">
            <label for="pdfDiplome" class="pdf-upload">PDF Diplôme :</label>
            <input type="file" id="pdfDiplome" name="pdfDiplome" accept=".pdf">

            <label for="estimationSalariale">Salaire minimum :</label>
            <input type="number" id="estimationSalariale" name="salaireMax" required>

            <input type="hidden" id="estimationSalariale" name="candidat" value="<?php echo $idC?>" required>

            <button type="submit" id="btnValidate" >Valider</button>
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

        function validerFormulaire() {
            // Ajoutez ici le code pour l'action du bouton valider
        }
    </script>

</body>
</html>
