<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="includes/styles.css" rel="stylesheet">
    <title>Title</title>

</head>

<body>

<div id="login">


    <?php
    $un = $_GET["reg_un"];
    $pw = $_GET["reg_pass"];

    if ($un == "Annieli" && $pw == "fluffy")
        echo "<h1>OH " . $un . '</h1> <img class="fluffy" src="https://media0.giphy.com/media/10jRHyuxV1FsvC/giphy.gif">';
    else
        echo "<h2>not so fluff</h2>";

    ?>




    <div class="dog">
        <div class="head">
            <div class="nose"></div>
            <div class="ear"></div>
        </div>
        <div class="body">
            <div class="paw"></div>
            <div class="tail"></div>
        </div>
        <div class="bone">
            <div class="left"></div>
            <div class="right"></div>
        </div>
    </div>


</div>
</body>


</html>