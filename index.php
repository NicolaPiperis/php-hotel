<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CDN BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        
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

        ?>
    

        <title>php-hotel</title>
    </head>
    <body>

        <div>
            Parcheggio
        </div>
            
        <table class="table">

            <tbody>

                <tr>

                    <?php

                        foreach ($keys as $key) {
                            
                            echo '<th scope="col">' . $key . '</th>';
                        }
                        
                    ?>
                
                </tr>

                <?php
                    foreach($hotels as $hotel) {

                        echo "<tr>" ;
                        echo '<td scope="col">' . $hotel["name"] . '</td>';
                        echo '<td scope="col">' . $hotel["description"] . '</td>';
                        echo '<td scope="col">' . ($hotel["parking"] ? "yes" : "no" ) . '</td>';
                        echo '<td scope="col">' . $hotel["vote"] . '/5</td>';
                        echo '<td scope="col">' . $hotel['distance_to_center'] . ' KM</td>';
                    }           
                ?> 

            </tbody>

        </table>
        
    </body>
</html>