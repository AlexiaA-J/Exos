<?php

/* Les enonces des projets :

1- Réalise un projet dans lequel a la saisi d'un nombre,  le factoriel de ce nombre est affiché
2- Réalise un deuxieme projet dans lequel a la saisi d'un nombre, il affiche les nombres paires et les nombre impaire en dessous du nombre saisi

*/

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title> Projets Php:</title>
</head>
<body>
    <div>
        <h1>Projets php :</h1>
        
        <h2>Projets 1 et 2</h2>

        <p> Pour obtenir le factoriel du chiffre que vous souhaitez, ecrivez ce dernier ci-dessous :</p> 
        <br>

        <form method='post' action=''>
        <label for='number'></label>
        <input type='text' id='number' name='number' value=''>
        <input type='submit' value='Submit'>
        </form>

        <br>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ('number' !== '') {
                function factorial($n){
                    $f = 1;
                    for($i = 1; $i <= $n; $i++){
                        $f = $f * $i;
                    }
                    return $f;
                }

            $userInput = $_POST['number'];
            $n = $userInput;
            $f = factorial($n);

                echo 'Le factoriel de ' .$n. ' est ' .$f. '! <br><br>';

                echo 'Nous voulons egalement connaitre les nombres pairs et impairs avant ' .$n. ' ! Les voici :<br><br>';
                    for($i = 1; $i <= $n; $i++){
                        if($i % 2 == 0){
                            echo 'Pair : ' .$i. ' ! <br><br>';
                        }
                        else{
                            echo 'Impair : ' .$i. ' ! <br><br>';
                        }
                    }
            }
        }
        ?>
      </div>   
</body>
</html>