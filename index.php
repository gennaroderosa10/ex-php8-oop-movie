<?php

require_once './models/Genre.php';
require_once './models/Movie.php';



$action = new Genre('Azione', 'Film con molta adrenalina');
$comedy = new Genre('Commedia', 'Film divertenti e leggeri');

$movie1 = new Movie('Die Hard', 1988, 8.2, $action);
$movie2 = new Movie('Una notte da leoni', 2009, 7.7, $comedy);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <h1>Lista Film</h1>

    <p><?php echo $movie1->getInfo(); ?></p>
    <p><?php echo $movie2->getInfo(); ?></p>
</body>

</html>