<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Put the words in order</h1>
    <form action="play/feedback" method="post">
        <?php
            foreach ($data as $value) {
                echo "<label>{$value['word']}</label><input name='{$value['idWord']}' type='text'><br>";
            }
        ?>
        <button type="submit">SEND</button>
    </form>

</body>

</html>