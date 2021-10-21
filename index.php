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
   
        function __construct($_titolo, $_durata, $_anno, $_genere)
        {
            $this->titolo = $_titolo;
            $this->durata = $_durata;
            $this->anno = $_anno;
            $this->genere = $_genere;
        }

        public function setTitolo($_titolo){
            $this->titolo = $_titolo;
        }
        public function setDurata($_durata){
            $this->durata = $_durata;
        }
        public function setAnno($_anno){
            $this->anno = $_anno;
        }
        public function setGenere($_genere){
            $this->genere = $_genere;
        }
        public function getTitolo(){
            return $this->titolo;
        }
        public function getDurata(){
            return $this->durata;
        }
        public function getAnno(){
            return $this->anno;
        }
        public function getGenere(){
            return $this->genere;
        } 
    }

    $ilGladiatore = new Movie('Il Gladiatore', 235, 2000, 'Azione');
    echo 'TITOLO:' . ' ' . $ilGladiatore->titolo . '<br>';
    echo 'DURATA:' . ' ' .$ilGladiatore->durata . '<br>';
    echo 'ANNO:' . ' ' .$ilGladiatore->anno . '<br>';
    echo 'GENERE:' . ' ' .$ilGladiatore->genere . '<br><br><br>';
    $toloTolo = new Movie('Tolo Tolo', 130, 2020, 'Comico');
    echo 'TITOLO:' . ' ' . $toloTolo->titolo . '<br>';
    echo 'DURATA:' . ' ' .$toloTolo->durata . '<br>';
    echo 'ANNO:' . ' ' .$toloTolo->anno . '<br>';
    echo 'GENERE:' . ' ' .$toloTolo->genere . '<br>';








?>