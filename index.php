<?php
require_once __DIR__ . "/database.php";

class Movie{
  public $title;
  public $genre;
  public $year;
  public $vote;

  function __construct($_title)
  {
    $this->title = $_title;
  }

  public function getVote()
  {
    $valutation = 'good';
    if ($this->vote < 5) $valutation = 'low';
    else if ($this->vote < 7) $valutation = 'medium';
    return $valutation;
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
</head>

<body>

  <?php
  $fast_and_furious = new Movie($_fast_and_furious);
  $fast_and_furious->title = "Fast and Fuorious Tokio Drift";
  $fast_and_furious->genre = "Azione";
  $fast_and_furious->year = 2006;
  $fast_and_furious->vote = 5;

  $interstellar = new Movie($_interstellar);
  $interstellar->title = "Interstellar";
  $interstellar->genre = "Avventura/Fantascienza";
  $interstellar->year = 2014;
  $interstellar->vote = 9;
  ?>
  <div>
    <h1>Titolo:</h1>
    <h3><?php echo $fast_and_furious->title ?></h3>
    <h1>Genere:</h1>
    <h3><?php echo $fast_and_furious->genre ?></h3>
    <h1>Anno:</h1>
    <h3><?php echo $fast_and_furious->year ?></h3>
    <h1>Voto:</h1>
    <h3><?php echo $fast_and_furious->getVote(); ?></h3>
  </div>
  <div>
    <h1>Titolo:</h1>
    <h3><?php echo $interstellar->title ?></h3>
    <h1>Genere:</h1>
    <h3><?php echo $interstellar->genre ?></h3>
    <h1>Anno:</h1>
    <h3><?php echo $interstellar->year ?></h3>
    <h1>Voto:</h1>
    <h3><?php echo $interstellar->getVote(); ?></h3>
  </div>

  <h1>Film presi dal database:</h1>

  <?php foreach ($movies as $movie) :
    $new_movie = new Movie($movie['title']);
    $new_movie->genre = $movie['genre'];
    $new_movie->year = $movie['year'];
    $new_movie->vote = $movie['vote'];
  ?>
  <div>
  <h1>Titolo:</h1>
  <h3><?php echo $new_movie->title ?></h3>
  <h1>Genere:</h1>
  <h3><?php echo $new_movie->genre ?></h3>
  <h1>Anno:</h1>
  <h3><?php echo $new_movie->year ?></h3>
  <h1>Voto:</h1>
  <h3><?php echo $new_movie->getVote() ?></h3>
  </div>
  <?php endforeach; ?>
</body>

</html>