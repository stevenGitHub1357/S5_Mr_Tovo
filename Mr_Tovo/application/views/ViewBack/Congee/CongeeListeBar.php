<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Liste du personnel bar</title>
</head>
<body>

    <div class="content">
            <a href="<?php echo base_url('index.php/BackController/CongeeListe');?>?etat=3">La liste des refuses</a>
            <a href="<?php echo base_url('index.php/BackController/CongeeListe');?>?etat=2">La liste des accepter</a>
            <a href="<?php echo base_url('index.php/BackController/CongeeListe');?>?etat=1">La liste des en attente</a>
        
        
    </div>

</body>
</html>
