<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score</title>
</head>
<body>
    <h1>Answer</h1>
    
    <?php
        for ($i=0; $i < count($data) ; $i++) { 
            if($data[$i]['correct']){
                echo "<p> La palabra {$data[$i]['answer']} es correcta </p>";
            }else{
                echo "<p> La palabra {$data[$i]['answer']} es incorrecta, la respuesta correcta es {$data[$i]['word']} </p>";
            }
        }    
    ?>
</body>
</html>