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

    <h2>Question insert</h2>
    <form action="">
        <form action="">
        <?php for($n=0; $n<=1; $n++){?>
            <h3><label for="">Question <?php echo ($n);?>:</label></h3>
            <input type="texte" id="" name="question" value="La question<?php echo $n?>?" required>


            <?php for($i=0; $i<=2; $i++){?>
                . Reponse <?php echo ($i);?>:
                <input type="texte" id="" name="reponse" value="La reponse<?php echo $i?>?" required>
        
            <?php } ?>
            <input type="submit" value="Ajouter une reponse">
        <?php } ?>
        <button type="submit">Ajouter un question</button>
        </form>
        <button type="submit" value="">Fin de l'insertion</button>
    </form>

</body>
</html>
