<!-- I primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
    class Movie{
        protected $title;
        protected $lenguage;
        protected $duration;
        protected $genre;
        protected $date;

        function __construct($_title, $lenguage, $duration, $genre, $date)
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
<h1>Movie</h1>
</div>

</body>
</html>
