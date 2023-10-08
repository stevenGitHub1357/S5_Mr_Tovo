<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annonces de Recrutement</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            text-align: center;
            color: #2e8b57;
        }

        .annonces-container {
            max-width: 80%;
            width: 100%;
        }

        .annonce {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }

        .annonce:hover {
            transform: scale(1.02);
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
        }

        ul {
            margin: 10px 0;
            padding: 0 0 0 20px;
            color: #555;
        }

        .service {
            margin-top: 10px;
            color: #777;
        }

        .postuler-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .postuler-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Annonces de Recrutement</h1>
    <div class="annonces-container">
        <?php for($i=0; $i<count($Besoin); $i++){?>
        <div class="annonce">
            <h2>Departement: <?php echo $Departement[$Besoin[$i]['iddepartement']-1]['nom']?></h2>
            <h2>Poste: <?php echo $Poste[$Besoin[$i]['idposte']-1]['nom']?></h2>
            <p>Description du travail: <?php echo $Besoin[$i]['descritpion']?></p>
            <p>Salaire proposer: <?php echo $Besoin[$i]['salaire']?></p>
            <p>Nombre de place disponible: <?php echo $Besoin[$i]['volumeh']/$Besoin[$i]['hommej']?></p>
            <p>Prérequis:
                <ul>
                    <li>Diplome: <?php echo $Diplome[$spectBesoin[$i]['iddiplome']-1]['nom']?></li>
                    <li>District de residence: <?php echo $District[$spectBesoin[$i]['iddistrict']-1]['nom']?></li>
                    
                </ul>
            </p>
            <a href="BesoinPostuler?idBesoin=<?php echo $Besoin[$i]['id']?>" class="postuler-btn" >Postuler</a>
            </div>
        <?php } ?>
    </div>


</body>
</html>
