<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Service</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        form {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input, select {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h2>Caracteristique rechercher</h2>
    <a href="<?php echo base_url('index.php/BackController/BesoinListe');?>">Liste besoin</a>
    <form action="<?php echo base_url('index.php/BackController/BesoinInfoInsert');?>" methode="get">
        <label for="service">Diplome:</label>
        <select id="service" name="diplome" required>
            <?php for($i=0; $i<count($Diplome); $i++){?>
                <option value="<?php echo $Diplome[$i]['id']?>"><?php echo $Diplome[$i]['nom']?></option>
            <?php } ?>
        </select>

        <label for="service">Genre:</label>
        <select id="service" name="genre" required>
            <?php for($i=0; $i<count($Genre); $i++){?>
                <option value="<?php echo $Genre[$i]['id']?>"><?php echo $Genre[$i]['nom']?></option>
            <?php } ?>
        </select>

        <label for="service">Situation:</label>
        <select id="service" name="situation" required>
            <?php for($i=0; $i<count($Situation); $i++){?>
                <option value="<?php echo $Situation[$i]['id']?>"><?php echo $Situation[$i]['nom']?></option>
            <?php } ?>
        </select>

        <label for="service">District:</label>
        <select id="service" name="district" required>
            <?php for($i=0; $i<count($District); $i++){?>
                <option value="<?php echo $District[$i]['id']?>"><?php echo $District[$i]['nom']?></option>
            <?php } ?>
        </select>

        <label for="service">Nationalite:</label>
        <select id="service" name="nationalite" required>
            <?php for($i=0; $i<count($Nationalite); $i++){?>
                <option value="<?php echo $Nationalite[$i]['id']?>"><?php echo $Nationalite[$i]['nom']?></option>
            <?php } ?>
        </select>
        
        <input type="hidden" id="temps_travail" name="idBesoin"  value="<?php echo $IdBesoin?>">

        <button type="submit">Suivant</button>
    </form>

</body>
</html>
