<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="includes/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Raleway|Electrolize&display=swap" rel="stylesheet">
    <title>The Cats of Ulthar</title>

</head>

<body id="layout2">

    <div id="bg">
        <div id="flashlight"></div>
    </div>
    <div class="floating">
        <h1>
            The Cats of Ulthar <br>
        </h1>
        <h3>

            <i>Reimagined by <?php echo $_GET['name']; ?> . </i> <br>
            It is said that in <?php echo $_GET['city1']; ?> which lies beyond the river <?php $_GET['river']; ?> no man may kill a cat.<br>
            And this I can verily believe as I gaze upon him who sitteth purring before the <?php echo $_GET['setting']; ?>. <br>
            For the cat is cryptic, and close to strange things which men cannot <?php echo $_GET['Sense']; ?>. <br>
            He is the soul of antique <?php echo $_GET['god']; ?> and bearer of tales from forgotten cities in- <?php foreach ($_GET['city2'] as $value) {
                                                                                                                    echo  $value . ".";
                                                                                                                } ?> <br>
            He is the kin of the jungles lords, and heir to the secrets of hoary and sinister <?php echo $_GET['continent']; ?> . <br>
            The Sphinx is his cousin, and he <?php echo $_GET['speaks']; ?> her language,<br>
            but he is more <?php echo $_GET['adjective']; ?> than the Sphinx, and remembers that which she hath forgotten.


        </h3>

    </div>

    <!--BACKGROUND-->
    <img id="cat" src="http://awiclass.monoame.com/catpic/cat_lefttop.png">
    <script src="includes/main.js"></script>


</body>


</html>