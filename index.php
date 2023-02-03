<?php
require_once __DIR__ . '/models/Actors.php';
require_once __DIR__ . '/models/Movie.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Movie</title>
</head>

<body>

    <?php

    $Spiderman = new Movie('Spiderman', 2002, 'https://www.cinefacts.it/foto/h!spider-man-2-locandina-poster-cinefacts.jpg', new Actors('Spiderman', 'Nonna Spiderman', 'Zia Spiderman'));
    $Batman = new Movie('Batman', 2022, 'https://www.emp-online.it/dw/image/v2/BBQV_PRD/on/demandware.static/-/Sites-master-emp/default/dw0edd1db0/images/5/1/8/5/518546d.jpg?sfrm=png', new Actors('Batman', 'Nonna Batman', 'Nipote Batman'));

    $Spiderman->title = 'Spiderman 2';

    ?>

    <pre>
       <?php
        var_dump($Spiderman, $Batman);
        var_dump($Batman->getActors());
        ?>
    </pre>
</body>

</html>