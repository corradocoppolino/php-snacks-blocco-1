<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-7</title>
</head>
<body>
    
    <?php 
    
        $students = [

            [
                "nome" => "luigi",
                "cognome" => "verdi",
                "voti" => [rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10)] 
            ],
            [
                "nome" => "luca",
                "cognome" => "fritto",
                "voti" => [rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10)] 
            ],
            [
                "nome" => "simone",
                "cognome" => "inzaghi",
                "voti" => [rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10)] 
            ],
            [
                "nome" => "matteo",
                "cognome" => "ricci",
                "voti" => [rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10)] 
            ],
            [
                "nome" => "luana",
                "cognome" => "ciao",
                "voti" => [rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10)] 
            ]

            

            ];

    ?>

    <h1>STUDENTI</h1>

    <ul>
    
        <?php foreach($students as $value) { ?>

            <?php 
                
                $average = array_sum($value["voti"]) / count($value["voti"]);
            
            ?>

            <li> <?php echo $value["nome"] ?> <?php echo $value["cognome"] ?> <?php echo $average ?> </li>

        <?php } ?>

    </ul>

</body>
</html>