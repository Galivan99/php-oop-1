<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
    class Movie {
        public $title;
        public $time;
        public $pub;    
        public $restrictions;
        

        function __construct($_title, $_pub, $_time, $_restrictions)
        {
            $this->title = $_title;
            $this->pub = $_pub;
            $this->time = $_time;
            $this->restrictions = $_restrictions;
        }


        function settitle($_title)
        {
            $this->title = $_title;
        }
        function gettitle()
        {
           return $this->title;
        }


        function set_pub($_pub)
        {
            $this->pub = $_pub;
        }
        function get_pub()
        {
           return $this->pub;
        }


        function set_time($_time)
        {
            $this->time = $_time;   
        }
        function get_time()
        {
           return $this->time; 
        }


        function set_restrictions($_restrictions)
        {
            $this->restrictions = $_restrictions; 
        }
        function get_restrictions()
        {
           return $this->restrictions; 
        }


        function get_info() {
            $info = $this->title. '<br/>'. $this->pub. '<br/>'. $this->time. '<br/>'. $this->restrictions. '<br/>';
            return $info;

        }
    }

    $movie_one_O7 = new Movie('Casino Royale', 'November 16, 2006', '2h 24m', 'T');
  

    $movie_two_O7 = new Movie('No Time To Die', 'April 2, 2021', '2h 43m', 'T');
    // var_dump($movie_one_O7);
    // var_dump($movie_two_O7);
    // var_dump(get_class_methods($movie_one_O7));

    echo $movie_one_O7->get_info();
    echo $movie_two_O7->get_info();

?>