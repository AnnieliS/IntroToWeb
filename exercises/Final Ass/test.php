<!DOCTYPE html>
<html>
<head>
        
</head>
<body>
<section>
            Welcome
            <?php
                $un = $_GET["reg_un"];
                if ($un == "or" )
                    echo "<h2>Good morning user: " . $un . "</h2>";
                else
                    echo "<h2>you shell not pass</h2>";
                ?>
        </section>


</body>
</html>