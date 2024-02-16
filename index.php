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

    // Metodo per stampare le informazioni del film
    public function printInfo() {
        echo "Title: $this->title <br>";
        echo "Genre: $this->genre <br>";
        echo "Year: $this->year <br>";
        echo "<br>";
    }
    
}

// Creazione di due oggetti Movie
$movie1 = new Movie("Fight Club","Thriller", 1999);
$movie2 = new Movie("Fuori di cresta SLC Punk!", "Commedia", 1998);

// Stampare le informazioni dei film
echo "<h2>Movie 1:</h2>";
$movie1->printInfo();

echo "<h2>Movie 2:</h2>";
$movie2->printInfo();

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