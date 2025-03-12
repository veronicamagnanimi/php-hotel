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
 <form action="index.php" method="get" class="mb-3">
 <div class="form-check">
    <label for="parking" class="form-check-label" >Parcheggio</label>
    <input type="checkbox" name="parking" id="parking" class="form-check-input">
    </div>
    <div class="form-check">
    <label for="minVote" class="form-label">Voto minimo</label>
    <input type="number" name="minVote" id="minVote" class="form-control w-25" min="1" max="5">
</div>
    <button type="submit" class="btn btn-secondary mt-3">Ricerca</button>
 </form>


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
 

    foreach ($hotels as $curItem) {
        echo "<tr>";
        echo "<td>{$curItem['name']}</td>";
        echo "<td>{$curItem['description']}</td>";
        echo "<td>" . ($curItem['parking'] ? 'Sì' : 'No') . "</td>";
        echo "<td>{$curItem['vote']}</td>";
        echo "<td>{$curItem['distance_to_center']} km</td>";
        echo "</tr>";
    }

?>
<!-- FINE PHP -->
</tbody>
</table>
</div>
</body>
</html>