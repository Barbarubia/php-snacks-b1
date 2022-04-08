<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks blocco 1</title>
</head>
<body>

    <!--
    Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60
    -->
    <h1>Snack 1</h1>
    <p>
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.<br>Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.<br>Stampiamo a schermo tutte le partite con questo schema.<br>Olimpia Milano - Cantù | 55-60    
    </p>

    <!-- Svolgimento -->
    <?php
        // Array delle partite
        $array_partite = [
            [
                'squadra_di_casa' => [
                    'nome' => 'Bertram Derthona Basket Tortona',
                    'punteggio' => 70,
                    ],
                'squadra_ospite' => [
                    'nome' => 'Carpegna Prosciutto Pesaro',
                    'punteggio' => 86,
                    ],
            ],
            [
                'squadra_di_casa' => [
                    'nome' => 'Allianz Pallacanestro Trieste',
                    'punteggio' => 81,
                    ],
                'squadra_ospite' => [
                    'nome' => 'Virtus Segafredo Bologna',
                    'punteggio' => 92,
                    ],
            ],
            [
                'squadra_di_casa' => [
                    'nome' => 'Banco di Sardegna Sassari',
                    'punteggio' => 92,
                    ],
                'squadra_ospite' => [
                    'nome' => 'A|X Armani Exchange Milano',
                    'punteggio' => 90,
                    ],
            ],
            [
                'squadra_di_casa' => [
                    'nome' => 'Happy Casa Brindisi',
                    'punteggio' => 72,
                    ],
                'squadra_ospite' => [
                    'nome' => 'Openjobmetis Varese',
                    'punteggio' => 75,
                    ],
            ],
            [
                'squadra_di_casa' => [
                    'nome' => 'Germani Brescia',
                    'punteggio' => 86,
                    ],
                'squadra_ospite' => [
                    'nome' => 'Dolomiti Energia Trentino',
                    'punteggio' => 62,
                    ],
            ],
            [
                'squadra_di_casa' => [
                    'nome' => 'UNAHOTELS Reggio Emilia',
                    'punteggio' => 78,
                    ],
                'squadra_ospite' => [
                    'nome' => 'Umana Reyer Venezia',
                    'punteggio' => 85,
                    ],
            ],
            [
                'squadra_di_casa' => [
                    'nome' => 'Fortitudo Kigili Bologna',
                    'punteggio' => 85,
                    ],
                'squadra_ospite' => [
                    'nome' => 'Vanoli Basket Cremona',
                    'punteggio' => 83,
                    ],
            ],
            [
                'squadra_di_casa' => [
                    'nome' => 'NutriBullet Treviso Basket',
                    'punteggio' => 67,
                    ],
                'squadra_ospite' => [
                    'nome' => 'GeVi Napoli Basket',
                    'punteggio' => 77,
                    ],
            ],
        ]
    ?>
    <!-- Lista con risultati delle partite richiamati da ciclo FOR in PHP -->
    <ul>
        <?php
            // Ciclo FOR in PHP che per ogni elemento dell'array delle partite stampa il nome delle squadre e i rispettivi punteggi
            for ($_i=0; $_i < count($array_partite); $_i++) {?>
                <li><strong><?php echo $array_partite[$_i]['squadra_di_casa']['nome'] . ' - ' . $array_partite[$_i]['squadra_ospite']['nome'] . ' | ' . $array_partite[$_i]['squadra_di_casa']['punteggio'] . ' - ' . $array_partite[$_i]['squadra_ospite']['punteggio']?></strong></li>
            <?php
            }
            ?>
    </ul>

    <hr>

    <!--
    Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.
    -->
    <h1>Snack 2</h1>
    <p>
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.<br>Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.
    </p>

    <!-- Svolgimento -->
    <!-- Form per inserimento del nome, dell'e-mail e dell'età -->
    <form action="" method="get">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name">
        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email">
        <label for="age">Età:</label>
        <input type="number" name="age" id="age">
        <button>Accedi</button>
    </form>

    <!-- Definisco in PHP i dati name, email e age inseriti -->
    <?php
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
    ?>

    <!-- Controllo che il nome inserito sia più lungo di 3 caratteri -->
    <?php
        if (strlen($name) > 3) {
            $name_verified = true;
        } else {
            $name_verified = false;
        }
    ?>

    <!-- Controllo che l'email contenga una chiocciola e un punto -->
    <?php
        if (strlen($email) > 0) {
            $pos_chiocciola = strpos($email, '@', 1); // cerco la posizione della chiocciola a partire dal secondo carattere
            // Se "posizione chiocciola" restituisce un valore (quindi la chiocciola è presente) cerco la posizione del punto successivo alla chiocciola (quindi la presenza del punto dopo la chiocciola)
            if ($pos_chiocciola !== false && strpos($email, '.', $pos_chiocciola) !== false) {
                $email_verified = true;
            } else {
                $email_verified = false;
            }
        } else {
            $email_verified = false;
        }
    ?>

    <!-- Controllo che l'età inserita sia un numero maggiore di zero-->
    <?php
        if (is_numeric($age) && $age > 0) {
            $age_verified = true;
        } else {
            $age_verified = false;
        }
    ?>

    <!-- se tutti i controlli restituiscono "true" stampo "Accesso riuscito", altrimenti "Accesso negato -->
    <?php
        if ($name_verified && $email_verified && $age_verified) {
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';
        }
    ?>

    <hr>
    
</body>
</html>