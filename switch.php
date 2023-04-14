<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $mood = "happy";
    $mood2 = "sad";
    switch ($mood)
    {
        case "happy":
        echo "Yehey, Masaya ako!";
        break;

        case "sad":
        echo "Malumgkot ako!";
        break;

        default;
        echo "Wala akong pakiramdam";
    }
    ?>
</body>
</html>