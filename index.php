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
   
    $ilGladiatore = new Movie('Il Gladiatore', '230', '2000', 'azione');
    echo 'TITOLO:' . ' ' . $ilGladiatore->getTitolo() . '<br>';
    echo 'DURATA:' . ' ' . $ilGladiatore->getDurata(). ' ' . 'minuti' . '<br>';
    echo 'ANNO:' . ' ' . $ilGladiatore->getAnno() . '<br>';
    echo 'GENERE:' . ' ' .$ilGladiatore->getGenere() . '<br><br>';
    $toloTolo = new Movie('Tolo Tolo', '130', '2006', 'comico');
    echo 'TITOLO:' . ' ' . $toloTolo->getTitolo() . '<br>';
    echo 'DURATA:' . ' ' . $toloTolo->getDurata(). ' ' . 'minuti' . '<br>';
    echo 'ANNO:' . ' ' . $toloTolo->getAnno() . '<br>';
    echo 'GENERE:' . ' ' .$toloTolo->getGenere() . '<br><br>';
    $freddyVsJason = new Movie('Freddy vs Jason', '138', '2003', 'horror');
    echo 'TITOLO:' . ' ' . $freddyVsJason->getTitolo() . '<br>';
    echo 'DURATA:' . ' ' . $freddyVsJason->getDurata(). ' ' . 'minuti' . '<br>';
    echo 'ANNO:' . ' ' . $freddyVsJason->getAnno() . '<br>';
    echo 'GENERE:' . ' ' .$freddyVsJason->getGenere() . '<br><br>';

?>
