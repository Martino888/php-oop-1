<!-- I primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
    class movie{
        protected $title;
        protected $lenguage;
        protected $duration;
        protected $genre;
        protected $date;

        function __construct($_title, $_lenguage, $_duration, $_genre, $_date)
        {
            $this->title = $_title;
            $this->lenguage = $_lenguage;
            $this->duration = $_duration;
            $this->genre = $_genre;
            $this->date = $_date;
        }

        function setTitle($title){
            $this->title = $title;
        }

        function setLenguage($lenguage){
            $this->lenguage = $lenguage;
        }

        function setDuration($duration){
            $this->duration = $duration . "minutes";
        }

        function setGenre($genre){
            $this->genre = $genre;
        }

        function setDate($date){
            $this->date = $date . "date";
        }


        function getTitle(){
            return $this->title;
        }

        function getLenguage(){
            return $this->lenguage;
        }

        function getDuration(){
            return $this->duration;
        }

        function getGenre(){
            return $this->genre;
        }

        function getDate(){
            return $this->date;
        }

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Movie</title>
</head>
<body>

<div class="container">

<?php
    $movies = [];
    array_push($movies, new Movie("The Batman", "IT", "175'", "AZIONE", "(2022)"));
    array_push($movies, new Movie("Pastori e macellai", "IT", "106'", "DRAMMATICO", "(2016)"));
    array_push($movies, new Movie("Uncharted", "IT", "122'", "AVVENTURA", "(2022)"));
    array_push($movies, new Movie("Eternals", "IT", "156'", "FANTASCIENZA", "(2021)"));
    array_push($movies, new Movie("La torre", "IT", "83'", "HORROR", "(2005)"));


    foreach($movies as $movie){
        echo "<ul>";
        echo "<li><h4>Title</h4>: ".$movie->getTitle()."</li>";
        echo "<li><h4>Lenguage</h4>: ".$movie->getLenguage()."</li>";
        echo "<li><h4>Duration</h4>: ".$movie->getDuration()."</li>";
        echo "<li><h4>Genre</h4>: ".$movie->getGenre()."</li>";
        echo "<li><h4>Date</h4>: ".$movie->getDate()."</li>";
        echo "</ul>";
    }

?>

</div>

</body>
</html>
