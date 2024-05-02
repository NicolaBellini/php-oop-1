<?php
require_once __DIR__.'/Model/Movie.php';

$film_1= new Movie('baba', 'drama', 1998, 2.4);
$film_2= new Movie('Mago Di Oz', 'Fantasy', 1967, 3.4);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="container">
  <h1><?php $film_1->getFullInfo(); ?></h1>
  <h1><?php $film_2->getFullInfo(); ?></h1>
</div>

</body>
</html>