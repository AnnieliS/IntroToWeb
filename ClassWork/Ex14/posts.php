<?php

include "db.php";
include "config.php";

session_start();

if(!isset($_SESSION["user_id"])){
    header("Location: " . URL . "index.php");
}


$query = "SELECT u.name, u.email, p.title, p.body, p.link FROM `tb_users_84` AS u INNER JOIN `tb_users_200` AS p ON p.user_id = u.user_id ORDER BY u.name;";

echo $query;

$model = mysqli_query($connection, $query);
if(!$model){
    die("DB QUERY FAILEDD");
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