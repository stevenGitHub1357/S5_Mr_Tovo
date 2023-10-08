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

    <h2>Demande de Service</h2>
    <form action="<?php echo base_url('index.php/BackController/BesoinInsert');?>" methode="get">
        <label for="service">Departement:</label>
        <select id="service" name="departement" required>
            <?php for($i=0; $i<count($Departement); $i++){?>
                <option value="<?php echo $Departement[$i]['id']?>"><?php echo $Departement[$i]['nom']?></option>
            <?php } ?>
        </select>

        <label for="service">Poste:</label>
        <select id="service" name="poste" required>
            <?php for($i=0; $i<count($Poste); $i++){?>
                <option value="<?php echo $Poste[$i]['id']?>"><?php echo $Poste[$i]['nom']?></option>
            <?php } ?>
        </select>

        <label for="volume_horaire">Volume horaire du projet:</label>
        <input type="number" id="volume_horaire" name="volumeH" required>

        <label for="temps_travail">Temps de travail en pers/jour:</label>
        <input type="number" id="temps_travail" name="hommeJ" required>

        <label for="temps_travail">Salaire:</label>
        <input type="number" id="temps_travail" name="salaire" required>

        <label for="temps_travail">Description:</label>
        <input type="text" id="temps_travail" name="description" required>

        <button type="submit">Suivant</button>
    </form>

</body>
</html>
