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

    
</body>
</html>