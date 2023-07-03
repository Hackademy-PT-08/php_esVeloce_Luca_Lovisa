<?php 

class Videogame {
    public $name;
    public $genre;
    public $software_house;
    public $year ;
    public static $counter=0;

    

    public function __construct($nome,$genere,$azienda,$anno) {
        $this->name = $nome;
        $this->genre=$genere;
        $this->software_house=$azienda;
        $this->year=$anno;
        self::$counter++;

    }

    public function infoGame () {
        echo "$this->name è un videogioco del genere $this->genre prodotto da $this->software_house nel $this->year \n";

    }

    public function showCounter () {
        echo "Nella libreria ci sono ".self::$counter." Videogiochi";
    }
};


$game1 = new Videogame ("Mortal combat","Picchiaduro","Midway Games",1992);



$game2 = new Videogame ("Devil May Cry","Action","Capcom","2001");

$game1->infoGame();
$game2->showCounter();
