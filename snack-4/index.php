<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-4</title>
</head>
<body>
    
    <?php 
    
        $mioArray = [];

        while(count($mioArray) <= 15){

            $numero = rand(0,15);

            if(in_array($numero,$mioArray) === false){
                
                $mioArray[] = $numero;
    
            }

        }

        print_r($mioArray);

    ?>

</body>
</html>