<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Come detto a lezione, iniziate a dare un'occhiata alle slides legate all'ereditarierà, polimorfismo & co.
Resto a vostra disposizione per domande e dubbi attraverso i tickets :sorriso:
Buon lavoro! -->

<?php 

    class Movie {
        public $titolo;
        public $durata;
        public $anno;
        public $genere;
        public $lingua;
     
         
        function __construct($_titolo, $_durata, $_anno, $_genere, $_lingua)
        {
            $this->titolo = $_titolo;
            $this->durata = $_durata;
            $this->anno = $_anno;
            $this->genere = $_genere;
            $this->lingua = $_lingua;
        }

        function addType($_genere) {
           return $this->genere;
        }
    }

    $movieOne = new Movie('Il Gladiatore', 235, 2000, 'Azione', 'ita');
    $movieTwo = new Movie('Il Cantante', 135, 2006, 'Musica', 'fra');

    var_dump($movieOne);
    var_dump($movieTwo);
    echo $movieTwo->addType($_genere);








?>