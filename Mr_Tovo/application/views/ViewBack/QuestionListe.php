<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
        }

        .content {
            width: 80%;
            max-width: 800px;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #3498db;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #2980b9;
        }
    </style>
    <title>Liste des Postulants</title>
</head>
<body>

    <div class="content">
        <h1>Liste des Quèéstion</h1>
        <h3><?php echo count($question)?></h3>
            <?php for($i=0; $i<count($question); $i++){?>
                <?php echo $question[$i][0]['texte']?>
                <h3><?php echo count($question[$i][1])?></h3>
                    <?php for($n=0; $n<count($question[$i][1]); $n++){?>
                        <h3>.<?php echo $question[$i][1][$n]['texte'] ;?></h3>
                    <?php } ?> 

            <?php } ?>
        
    </div>

</body>
</html>
