<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK-1</title>
</head>
<body>
    
    <?php 
    
    $team = [
    
        [
            'casa' => 'Milano',
            'trasferta' => 'Piacenza',
            'puntiCasa' => '60',
            'puntiTrasferta' => '38'
        ],
        [
            'casa' => 'Cremona',
            'trasferta' => 'Parma',
            'puntiCasa' => '60',
            'puntiTrasferta' => '38'
        ],
        [
            'casa' => 'Rogoredo',
            'trasferta' => 'Besurica',
            'puntiCasa' => '60',
            'puntiTrasferta' => '38'
        ],
    
    ];

    ?>


    <ul>
    
        <?php foreach($team as $teamClass) { ?>
            <li><?php echo $teamClass['casa'] ?> - <?php echo $teamClass['trasferta'] ?> | <?php echo $teamClass['puntiCasa'] ?> - <?php echo $teamClass['puntiTrasferta'] ?></li>
        <?php } ?>    
    
    </ul>



</body>
</html>