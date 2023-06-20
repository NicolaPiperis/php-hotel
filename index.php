<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CDN BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <!-- CSS -->
        <style>
            
        </style>

        <title>php-hotel</title>
    </head>
    <body>

        <?php

            $hotels = [

                [
                    'name' => 'Hotel Belvedere',
                    'description' => 'Hotel Belvedere Descrizione',
                    'parking' => true,
                    'vote' => 4,
                    'distance_to_center' => 10.4
                ],
                [
                    'name' => 'Hotel Futuro',
                    'description' => 'Hotel Futuro Descrizione',
                    'parking' => true,
                    'vote' => 2,
                    'distance_to_center' => 2
                ],
                [
                    'name' => 'Hotel Rivamare',
                    'description' => 'Hotel Rivamare Descrizione',
                    'parking' => false,
                    'vote' => 1,
                    'distance_to_center' => 1
                ],
                [
                    'name' => 'Hotel Bellavista',
                    'description' => 'Hotel Bellavista Descrizione',
                    'parking' => false,
                    'vote' => 5,
                    'distance_to_center' => 5.5
                ],
                [
                    'name' => 'Hotel Milano',
                    'description' => 'Hotel Milano Descrizione',
                    'parking' => true,
                    'vote' => 2,
                    'distance_to_center' => 50
                ],

            ];

            echo "<ul>";

            foreach ($hotels as $hotel) {

                foreach ($hotel as $hotelDetails) {

                    echo "<li>" . $hotelDetails . "</li>";
                }
            }

            echo "</ul>";

            echo "<br>"

        ?>

            
        <table class="table">

            <tbody>

                <tr>

                    <?php
                        foreach ($hotels as $hotel) {
                            echo '<td scope="col">' . $hotel["name"] . '</td>';
                        }
                    ?>
                
                </tr>

                <tr>

                    <?php
                        foreach ($hotels as $hotel) {
                            echo '<td scope="col">' . $hotel["description"] . '</td>';
                        }
                    ?>

                </tr>

                <tr>

                    <?php
                        foreach ($hotels as $hotel) {
                            echo '<td scope="col">' . $hotel["parking"] . '</td>';
                            if ($hotel["parking"] === false) {
                                echo "none";
                            }
                        }
                    ?>

                </tr>

                <tr>

                    <?php
                        foreach ($hotels as $hotel) {
                            echo '<td scope="col">' . $hotel["vote"] . '</td>';
                        }
                    ?>
                </tr>

                <tr>

                    <?php
                        foreach ($hotels as $hotel) {
                            echo '<td scope="col">' . $hotel["distance_to_center"] . '</td>';
                        }
                    ?>
                </tr>

            </tbody>

        </table>
        
    </body>
</html>


<!-- 
Stampare tutti i nostri hotel con tutti i dati disponibili.

Iniziare in modo graduale:
Prima stampate in pagina i dati, senza preoccuparvi dello stile (vedi var_dump). Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

Bonus
Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio
Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)

Nota Bene
Deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel 
-->