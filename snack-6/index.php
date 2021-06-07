<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack-6</title>
</head>
<body>
    
    <?php
    
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    ?>

    <?php foreach($db as $key => $value) { ?>

        <?php if($key === 'teachers') { ?>

            <?php foreach($value as $info) { ?>

                <div class="container-grigio">
                
                    <h4> <?php echo $info['name'] ?> </h4>
                    <h4> <?php echo $info['lastname'] ?> </h4>
                
                </div>
            
            <?php } ?>   

        <?php } ?>

        <?php if($key === 'pm') { ?>

            <?php foreach($value as $info) { ?>

                <div class="container-verde">
                
                    <h4> <?php echo $info['name'] ?> </h4>
                    <h4> <?php echo $info['lastname'] ?> </h4>
                
                </div>

            <?php } ?>  

        <?php } ?>

          

    <?php } ?>

    



</body>
</html>