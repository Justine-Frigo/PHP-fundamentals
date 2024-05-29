<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>
<body>

<?php 
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach ($pronouns as $pronoun){
    switch ($pronoun) {
        case 'He/She':
            echo $pronoun . " codes<br>";
            break;
        default:
            echo $pronoun . " code<br>";
    }
}


?>
    
</body>
</html>