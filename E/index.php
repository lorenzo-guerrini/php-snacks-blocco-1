<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack E</title>
</head>

<body>
    <div style="text-align: center">
        <?php
        $students = [
            [
                "name" => "Leonardo",
                "surname" => "Rossi",
                "grades" => [10, 7, 5, 3],
            ],
            [
                "name" => "Sofia",
                "surname" => "Bianchi",
                "grades" => [4, 6, 8, 9],
            ],
            [
                "name" => "Francesco",
                "surname" => "Ferari",
                "grades" => [1, 7, 4, 10],
            ],
            [
                "name" => "Giulia",
                "surname" => "Russo",
                "grades" => [10, 5, 2, 9],
            ],
            [
                "name" => "Alessandro",
                "surname" => "Romano",
                "grades" => [7, 8, 8, 7],
            ],
            [
                "name" => "Aurora",
                "surname" => "Gallo",
                "grades" => [9, 8, 9, 2],
            ]
        ];

        $output = "";

        for ($i = 0; $i < count($students); $i++) {

            $sum = 0;

            for ($p = 0; $p < count($students[$i]['grades']); $p++) {
                $sum += $students[$i]['grades'][$p];
            }

            $average = $sum / count($students[$i]['grades']);

            $output .= $students[$i]["name"] . " " . $students[$i]["surname"] . " - Media: " . $average . "<br>";
        }

        echo $output;

        ?>
    </div>
</body>

</html>