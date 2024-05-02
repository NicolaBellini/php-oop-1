<?php 
class Movie{

  private $title;
  private $genre;
  private $year;
  private $rating;

  function __construct(string $_title, string $_genre,int $_year, float $_rating)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->rating = $_rating;
  }

  public function getFullInfo(){
    echo "TITOLO: $this->title,<br> GENERE: $this->genre,<br> ANNO: $this->year,<br> RATING: $this->rating ";
  }

}