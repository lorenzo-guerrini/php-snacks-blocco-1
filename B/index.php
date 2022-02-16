<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack B</title>
</head>

<body>
    <div style="text-align: center">
        <?php
            $name = $_GET["name"];
            $mail = $_GET["mail"];
            $age = $_GET["age"];

            echo "Name: " . $name . "<br> Age:" . $age . "<br> Mail: " . $mail . "<br>";

            $checkName = strlen($name) > 3;
            $checkAge = is_numeric($age);
            $checkMail = strpos($mail, '.') != false && strpos($mail, '@') != false;

            if ($checkName && $checkAge && $checkMail) {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            }
        ?>
    </div>
</body>
</html>