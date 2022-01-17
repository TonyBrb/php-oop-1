<?php


class Movie
{
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