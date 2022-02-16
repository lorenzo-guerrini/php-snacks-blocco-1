<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack C</title>
</head>
<body>
    <div style="text-align: center">
        <?php
        $nMax = 100;
        $nMin = 0;

        $numbersArray = [];
        
        while (count($numbersArray) < 15) {
            $randomNumber = mt_rand($nMin, $nMax);

            if (!in_array($randomNumber, $numbersArray)) {
                $numbersArray[] = $randomNumber;
            }
        }
        
        echo '<pre>' . var_dump($numbersArray) . '</pre>';
        ?>
    </div>
</body>

</html>