<?php 
require_once './db.php';
class Movie{

  private $title;
  private $genre;
  private $year;
  private $rating;

  function __construct(string $_title, array $_genre,int $_year, float $_rating)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->rating = $_rating;
  }

  public function getFullInfo(){
    // ho imploso l' array in modo da poterlo leggere come stringa
    $genres = implode(', ', $this->genre);
    echo "TITOLO: $this->title,<br> GENERE: $genres,<br> ANNO: $this->year,<br> RATING: $this->rating ";
  }

}