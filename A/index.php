<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack A</title>
</head>

<body>

    <div style="text-align: center">
        <?php

            $teams = [
                [
                    "team1" => "Team Pizza",
                    "team2" => "Team Pasta ",
                    "team1Points" => 30,
                    "team2Points" => 16,
                ],
                [
                    "team1" => "Team Vaniglia",
                    "team2" => "Team Cioccolato",
                    "team1Points" => 7,
                    "team2Points" => 13,
                ],
                [
                    "team1" => "Team Arancia",
                    "team2" => "Team Fragola",
                    "team1Points" => 20,
                    "team2Points" => 20,
                ],
                [
                    "team1" => "Team Pistacchio",
                    "team2" => "Team Arachidi",
                    "team1Points" => 35,
                    "team2Points" => 27,
                ],
                [
                    "team1" => "Team Frutta",
                    "team2" => "Team Verdura",
                    "team1Points" => 32,
                    "team2Points" => 31,
                ],
                [
                    "team1" => "Team A",
                    "team2" => "Team B",
                    "team1Points" => 0,
                    "team2Points" => 10,
                ]
            ];

            $output = "";

            for ($i = 0; $i < count($teams); $i++) {
                $output .= $teams[$i]["team1"] . " - " . $teams[$i]["team2"] . " | " .  $teams[$i]["team1Points"] . "-" . $teams[$i]["team2Points"] . "<br>";
            }

            echo $output;

        ?>
    </div>

</body>
</html>