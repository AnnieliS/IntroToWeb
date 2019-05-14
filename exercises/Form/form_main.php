<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="includes/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Finger+Paint|Fredericka+the+Great|Monoton" rel="stylesheet">
    <title></title>

</head>

<body>
        <?php

        $name = $_GET["name"];
        $Ulthar = $_GET["city1"];
        $Skai = $_GET["river"];
        $fire = $_GET["setting"];
        $see = $_GET["Sense"];
        $Aegyptus = $_GET["god"];
        $Meroe = $_GET["city2"];
        $Ophir = $_GET["city3"];
        $Africa = $_GET["continent"];
        $speaks  = $_GET["sense"];
        $ancient = $_GET["adjective"];



        echo "The Cats of Ulthar";
        echo "Reimagined by " .name . "...";
        echo "It is said that in " . $Ulthar .  "which lies beyond the river " . $Skai . "no man may kill a cat;";
        echo "And this I can verily believe as I gaze upon him who sitteth purring before the " .  $fire .".";
        echo "For the cat is cryptic, and close to strange things which men cannot  " . $see. ".";
        echo  "He is the soul of antique " . $Aegyptus . ", and bearer of tales from forgotten cities in " . $Meroe . "and " .  $Ophir .".";
        echo  "He is the kin of the jungles lords, and heir to the secrets of hoary and sinister " . $Africa .".";
        echo   "The Sphinx is his cousin, and he " . $speaks . "her language;";
        echo    "but he is more " . $ancient . "than the Sphinx, and remembers that which she hath forgotten.";

        ?>



        <!--BACKGROUND-->
        <img id="cat" src="http://awiclass.monoame.com/catpic/cat_lefttop.png">
        <script src="includes/main.js"></script>


</body>


</html>