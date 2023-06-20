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

            // Funzione per ricavarsi il nome delle key
            $keys = array_keys($hotels[0]);

                    // // Funzione di risposta in base al valore dell'array
                    // if($hotels["parking"] === false) {
                    //     $hotels["parking"] = "not available"; 
                    // }else{
                    //     $hotels["parking"] = "available";
                    // }

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

                        foreach ($keys as $key) {
                            
                            echo '<th scope="col">' . $key . '</th>';
                        }
                        
                    ?>
                
                </tr>

                <tr>

                    <?php

                       echo '<td scope="col">' . $hotels[0]["name"] . '</td>';
                       echo '<td scope="col">' . $hotels[0]["description"] . '</td>';
                       echo '<td scope="col">' . $hotels[0]["parking"] . '</td>';
                       echo '<td scope="col">' . $hotels[0]["vote"] . '</td>';
                       echo '<td scope="col">' . $hotels[0]["distance_to_center"] . '</td>'; 
                    ?>

                </tr>

                <tr>

                    <?php
                        echo '<td scope="col">' . $hotels[1]["name"] . '</td>';
                        echo '<td scope="col">' . $hotels[1]["description"] . '</td>';
                        echo '<td scope="col">' . $hotels[1]["parking"] . '</td>';
                        echo '<td scope="col">' . $hotels[1]["vote"] . '</td>';
                        echo '<td scope="col">' . $hotels[1]["distance_to_center"] . '</td>'; 
                    ?>

                </tr>

                <tr>

                    <?php
                        echo '<td scope="col">' . $hotels[2]["name"] . '</td>';
                        echo '<td scope="col">' . $hotels[2]["description"] . '</td>';
                        echo '<td scope="col">' . $hotels[2]["parking"] . '</td>';
                        echo '<td scope="col">' . $hotels[2]["vote"] . '</td>';
                        echo '<td scope="col">' . $hotels[2]["distance_to_center"] . '</td>'; 
                    ?>
                </tr>

                <tr>

                    <?php
                        echo '<td scope="col">' . $hotels[3]["name"] . '</td>';
                        echo '<td scope="col">' . $hotels[3]["description"] . '</td>';
                        echo '<td scope="col">' . $hotels[3]["parking"] . '</td>';
                        echo '<td scope="col">' . $hotels[3]["vote"] . '</td>';
                        echo '<td scope="col">' . $hotels[3]["distance_to_center"] . '</td>'; 
                    ?>
                </tr>

                <tr>

                    <?php
                        echo '<td scope="col">' . $hotels[4]["name"] . '</td>';
                        echo '<td scope="col">' . $hotels[4]["description"] . '</td>';
                        echo '<td scope="col">' . $hotels[4]["parking"] . '</td>';
                        echo '<td scope="col">' . $hotels[4]["vote"] . '</td>';
                        echo '<td scope="col">' . $hotels[4]["distance_to_center"] . '</td>'; 
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