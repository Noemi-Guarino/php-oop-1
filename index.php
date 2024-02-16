<?php
// Definizione della classe Movie
class Movie {
    // Variabili di istanza
    public $title;
    public $genre;
    public $year;

    // Costruttore
    public function __construct($title, $genre, $year) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }
}

// Creazione di due oggetti Movie
$movie1 = new Movie("Fight Club","Thriller", 1999);
$movie2 = new Movie("Fuori di cresta SLC Punk!", "Commedia", 1998);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    
</body>
</html>