<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>Bravo</h1>
    <h2>Votre inscription est terminer</h2>
    <h2>Nous vous contacteront dans quelque jours</h2>
    <a href="<?php echo base_url('index.php/FrontController/CandidatInfo');?>" class="postuler-btn">Information me concernant</a>
    <a href="<?php echo base_url('index.php/FrontController');?>" class="postuler-btn">Revenir a liste de recrutement</a>
</body>
</html>