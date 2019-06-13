<?php
//Recieving User Data
if(isset($_POST["username"]) && isset($_POST["pass"])){
    $username = $_POST["username"];
    $pass = $_POST["pass"];




//Opening Connection

$dbhost = "182.50.133.168";
$dbuser = "studDB19a";
$dbpass = "stud19DB1!";
$dbname = "studDB19a";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//Testing connection success
if(mysqli_connect_errno()){
    die("DB connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
}


//Fetching Table

$sql = "SELECT name,password FROM tb_users_84 WHERE name = '" . $username . "' AND password = '" . $pass . "' LIMIT 0, 30 ";
$result = mysqli_query($connection,$sql);

$result=mysqli_fetch_assoc($result);

if(!$result){
 
echo "F-F-F-FAILED";
}

else{
echo "L-L-L-LOGGED IN";
}


}


?>



<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="includes/styles.css" rel="stylesheet">
    <title>Title</title>

</head>

<body>


<div id="wrapper">

</div>


    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="includes/main.js"></script>
</body>


</html>

<?php
mysqli_close($connection);
?>