<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-3 fw-bold text-secondary">Hotel</h1>
        <!-- form -->
        <form method="get" class="mb-3">
            <div class="">
            <div class="form-check mb-3">
                <label for="vote" class="form-label">Voto</label>
                <input type="number" name="vote" id="vote" class="form-control w-25" min="1" max="5"
                    placeholder="Min 1 Max 5">
            </div>
            <div class="form-check">
                <label for="parking" class="form-check-label">Parcheggio</label>
                <input type="checkbox" name="parking" id="parking" class="form-check-input">
            </div>
            <button type="submit" class="btn btn-secondary mt-3">Ricerca</button>
            </div>
        </form>
        <hr>


        <!-- tabella -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>

                <!-- PHP -->
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

                //filtri
                $parking_filter = isset($_GET['parking']);
                $vote_filter = isset($_GET['vote']) && is_numeric($_GET['vote']) ? (int)$_GET['vote'] : 0;


                foreach ($hotels as $hotel) {
                    if ($parking_filter && !$hotel['parking']) {
                        continue;
                    }
                    if ($vote_filter > 0 && $hotel['vote'] < $vote_filter) {
                        continue;
                    }

                    echo "<tr>";
                    echo "<td>{$hotel['name']}</td>";
                    echo "<td>{$hotel['description']}</td>";
                    echo "<td>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>";
                    echo "<td>{$hotel['vote']}</td>";
                    echo "<td>{$hotel['distance_to_center']} km</td>";
                    echo "</tr>";
                }

                ?>
                <!-- FINE PHP -->
            </tbody>
        </table>
    </div>
</body>

</html>