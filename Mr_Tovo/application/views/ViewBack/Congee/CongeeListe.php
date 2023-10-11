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
    <title>Liste du personnel</title>
</head>
<body>

    <div class="content">
        <h1>Liste des Congee <?php echo '  '.$Etat[0]['nom']?></h1>

        
        <table>
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Prénom</th>
                    <th>Debut</th>
                    <th>Fin</th>
                    <th>Excuse</th>
                    
                </tr>
            </thead>
            <?php for($i=0; $i<count($Congee); $i++){?>
                <tbody>

                    <tr>
                        <td><?php echo $Personnel[$Congee[$i]['idpersonnel']-1]['nom']?></td>
                        <td><?php echo $Personnel[$Congee[$i]['idpersonnel']-1]['prenom']?></td>
                        <td><?php echo $Congee[$i]['debut']?></td>
                        <td><?php echo $Congee[$i]['fin']?></td>
                        <td><?php echo $Excuse[$Congee[$i]['excuse']-1]['nom']?></td>
                        
                        <?php if($Congee[$i]['etat']==1){?>
                            <td><a href="<?php echo base_url('index.php/BackController/congeeAccepter');?>?id=<?php echo $Congee[$i]['id']?>">Accepter</a></td>
                            <td><a href="<?php echo base_url('index.php/BackController/congeeRefuser');?>?id=<?php echo $Congee[$i]['id']?>">Refuser</a></td>
                        <?php } ?>
                    </tr>
                
                </tbody>
            <?php } ?>
        </table>
        
    </div>

</body>
</html>
