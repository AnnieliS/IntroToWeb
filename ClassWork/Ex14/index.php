<?php

include "config.php";
include "db.php";

session_start();

if (!empty($_POST["loginMail"])) {  //TRUE is login submitted

    $query = "SELECT * FROM `tb_users_84` WHERE email='"
        . $_POST["loginMail"]
        . "' and password='"
        . $_POST["loginPass"]
        . "'";

    //echo $query;

    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    if (is_array($row)) {
        $_SESSION["user_id"] = $row['user_id'];
        header('Location: ' . URL . "posts.php");
    } else {
        $message = 'Invalid username or password';
    }
}


?>


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

    <div class="container">
        <h1>Login</h1>
        <form action="#" method="post" id="frm">
            <div class="form-group">
                <label for="loginMail">Email: </label>
                <input type="email" class="form-control" name="loginMail" id="loginMail" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password: </label>
                <input type="password" class="form-control" name="loginPass" id="loginPass" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-primary">Log Me In</button>
            <div class="error-message"><?php if (isset($message)) {
                                            echo $message;
                                        } ?></div>
        </form>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="includes/main.js"></script>
</body>


</html>


<?php

//Close DB connection

mysqli_close($connection);

?>