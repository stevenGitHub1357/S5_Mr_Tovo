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
<form action="<?php echo base_url('index.php/BackController/CongeeInsert');?>">
    <div id="cvContainer" class="form-container">
            <h2>Inserer un congée</h2>
            
            <div class="left-column">
                
                    <label for="nom">Nom et prenom:</label>
                    <select id="genre" name="personnel" required>
                        <?php  for($i=0; $i<count($Personnel); $i++){?>
                            <option value="<?php echo $Personnel[$i]['id']?>"><?php echo $Personnel[$i]['nom'].'  '.$Personnel[$i]['prenom']?></option>
                        <?php } ?>
                    </select>

                    <label for="adresse">Date de debut :</label>
                    <input type="date" id="adresse" name="debut" required>
            </div>

            <div class="right-column">
                    <label for="email">Excuse :</label>
                    <select id="genre" name="excuse" required>
                        <?php  for($i=0; $i<count($Excuse); $i++){?>
                            <option value="<?php echo $Excuse[$i]['id']?>"><?php echo $Excuse[$i]['nom']?></option>
                        <?php } ?>
                    </select>

                    <label for="adresse">Date de fin :</label>
                    <input type="date" id="adresse" name="fin" required>
                
            </div>
            <button type="submit" id="btnValidate" >Valider</button>
    </div>
</form>

</body>
</html>
