<?php
    // dichiarazione della classe
    class Movie {
        // dichiarazione delle proprietà
        public $titolo;
        public $durata;
        public $anno;
        public $genere;
        // dichiarazione costruttore
        function __construct($_titolo, $_durata, $_anno, $_genere)
        {
            $this->titolo = $_titolo;
            $this->durata = $_durata;
            $this->anno = $_anno;
            $this->genere = $_genere;
        }
       
        // dichiarazione e definizione dei metodi
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
   
    $ilGladiatore = new Movie('il gladiatore', '230', '2000', 'azione');
    echo $ilGladiatore->getTitolo();
    echo $ilGladiatore->getDurata();
   
    // $ilGladiatore = new Movie('Il Gladiatore', 235, 2000, 'Azione');
    // echo 'TITOLO:' . ' ' . $ilGladiatore->titolo . '<br>';
    // echo 'DURATA:' . ' ' .$ilGladiatore->durata . '<br>';
    // echo 'ANNO:' . ' ' .$ilGladiatore->anno . '<br>';
    // echo 'GENERE:' . ' ' .$ilGladiatore->genere . '<br><br><br>';
    // $toloTolo = new Movie('Tolo Tolo', 130, 2020, 'Comico');
    // echo 'TITOLO:' . ' ' . $toloTolo->titolo . '<br>';
    // echo 'DURATA:' . ' ' .$toloTolo->durata . '<br>';
    // echo 'ANNO:' . ' ' .$toloTolo->anno . '<br>';
    // echo 'GENERE:' . ' ' .$toloTolo->genere . '<br>';
?>