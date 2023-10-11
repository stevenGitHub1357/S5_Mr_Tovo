<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QCM en PHP</title>
</head>
<body>
    <h1>Questionnaire à choix multiples</h1>
    <form action="<?php echo base_url('index.php/FrontController/QCMInsert');?>">
            <?php for($i=0; $i<count($question); $i++){?>
                <h2>Question <?php echo $i+1;?>:</h2>
                <p><?php echo $question[$i][0]['texte']?></p>
                        <?php for($n=0; $n<count($question[$i][1]); $n++){?>
                            <input type="checkbox" name="<?php echo $question[$i][0]['id'] .'//'. $question[$i][1][$n]['id']?>" value="<?php echo $question[$i][1][$n]['id'] ;?>"><?php echo $question[$i][1][$n]['texte'] ;?><br>
                        <?php } ?>   
            <?php } ?>
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>

</body>
</html>