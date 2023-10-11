<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Vos Experiences
    <form action="<?php echo base_url('index.php/FrontController/Experience');?>">
       <table>
            <tr>
                <td>
                    <select name="entreprise" required>
                        <?php for($i=0; $i<count($entreprise); $i++){?>
                            <option value="<?php echo $entreprise[$i]['id']?>"><?php echo $entreprise[$i]['nom']?></option>
                        <?php }?>
                    </select>
                </td>
                <td>     
                <select id="diplome" name="poste" required>
                    <?php  for($i=0; $i<count($poste); $i++){?>
                        <option value="<?php echo $poste[$i]['id']?>"><?php echo $poste[$i]['nom']?></option>
                    <?php } ?>
                </select>
                </td>
                <td>
                    <input type="date" name="debut">
                </td>
                <td>
                    <input type="date" name="fin">
                    </td>
                <td>
                    <input type="submit" value="Ajouter">
                </td>
            </tr>
            <tr>
                <td>
                    Entreprise
                </td>
                <td>
                    Poste
                </td>
                <td>
                    Date debut
                </td>
                <td>
                    Date fin
                </td>
            </tr>
            <?php 
            if(isset($experience)){
                for($i=0; $i<count($experience); $i++){?>
                <tr>
                    <td>
                        <?php  echo $entreprise[$experience[$i]['identreprise']-1]['nom']?>
                    </td>
                    <td>
                        <?php  echo $poste[$experience[$i]['idpost']-1]['nom']?>
                    </td>
                    <td>
                        <?php  echo $experience[$i]['debut']?>
                    </td>
                    <td>
                        <?php  echo $experience[$i]['fin']?>
                    </td>
                </tr>
                <?php }
            } ?>
        </table>
    </form>
    <a href="<?php echo base_url('index.php/FrontController/QCM');?>">Aller au QCM</a>
</body>
</html>