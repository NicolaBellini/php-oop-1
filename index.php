<?php
require_once __DIR__.'/Model/Movie.php';
require_once __DIR__.'/db.php';

$films = [];

foreach($films_data as $film_data){
  $film = new Movie($film_data['title'], $film_data['genre'], $film_data['year'], $film_data['rating']);
  $films[] = $film;

};


var_dump($films)

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <title>Document</title>
</head>
<body>
<div class="container">
 

  <?php foreach($films as $film): ?>
  <!-- card -->
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php $film->getfullInfo() ?></h5>
   
    </div>
  </div>

  <?php endforeach ?>
</div>

</body>
</html>