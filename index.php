<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
    // definizione di una classe (modello)
    class Movie {

        // attributi/proprietà
        public $title;
        public $description;
        public $year;
        public $length;

        // costruttori
        function __construct($title, $description = "no description", $year, $length) {
            $this->title = $title;
            $this->description = $description;
            $this->year = $year;
            $this->length = $length;
        }

        // metodi
        public function getExcerpt() {
            return substr($this->description, 0, 150) . "...";
        }
    }

    $titanicDescription = "Rose ha diciassette anni, una madre egoista, un fidanzato facoltoso e una vita pianificata. Imbarcata sul Titanic e insoddisfatta della propria subalternità al futuro sposo incontra Jack, romantico disegnatore della terza classe che ha vinto a poker un biglietto per l'America. Contro le convenzioni e il destino, che chiederà il conto in una notte senza luna, Rose e Jack si innamorano, spiegando il loro spirito come i motori del più grande transatlantico del mondo. Lanciato nella sua prima traversata oceanica il Titanic è colpito al cuore da un iceberg, 'affondando' millecinquecento persone e il futuro dei due giovani amanti. Ottantaquattro anni dopo l'ultracentenaria Rose, scampata al naufragio e sopravvissuta a Jack, racconterà a un gruppo di scienziati la meraviglia di un amore interclassista e la stupidità di un mondo diviso in classi. Un mondo che il Titanic inabisserà in un oceano nero il 15 aprile del 1912.";
    
    $avatarDescription = "Jake Sully è un marine costretto su una sedia a rotelle che accetta di trasferirsi sul pianeta Pandora in sostituzione del fratello morto, la cui missione era quella di esplorare il pianeta. Essendo l'atmosfera del pianeta tossica per gli umani sono stati creati degli esseri simili ai nativi Na'vi che possono essere 'guidati' dagli umani. Pandora è un enorme giacimento di un minerale prezioso per la Terra dove le fonti di energia sono azzerate. Gli indigeni Na'vi non hanno intenzione di essere colonizzati. Il compito iniziale dell'avatar di Jake sarà quello di conoscerne usi e costumi e di farsi accettare all'interno delle comunità indigene. Jake conosce così Neytiri, una guerriera Na'vi figlia del capo tribù. Da lei impara a divenire un guerriero molto diverso dal marine che è stato e se ne innamora ricambiato.";

    $movie1 = new Movie ("Titanic", $titanicDescription, "1997", "3h 30m");
    // var_dump($movie1);


    $movie2 = new Movie ("Avatar", $avatarDescription, "2010", "2h 42m");
    // var_dump($movie2);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>movies</title>
    </head>
    <body>

        <div class="movie">
            <h2><?= $movie1->title; ?></h2>
            <p><?= $movie1->year . " - " . $movie1->length; ?></p>
            <p><?= $movie1->getExcerpt(); ?></p>
        </div>

        <div class="movie">
            <h2><?= $movie2->title; ?></h2>
            <p><?= $movie2->year . " - " . $movie2->length; ?></p>
            <p><?= $movie2->getExcerpt(); ?></p>
        </div>

    </body>
</html>