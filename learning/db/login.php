<?php
global $connection;
include "db.php";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    //  echo 'Username: '.$username .'<br>Password:  '. $password;

    /*    if($connection){
            echo "Connected";
        }*/

    /*   $queryInsert = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
       $result = pg_query($connection, $query);
       if(!$result){
           die("query failed");
       }*/

    /*  $querySelect = "SELECT * FROM users;";
      $result = pg_query($connection, $querySelect);*/


    /*while ($row = pg_fetch_assoc($result)) {
        print_r($row);
        echo "<br>";
    }*/

    /*    $queryUpdate = "UPDATE users SET username = '$username', password = '$password' WHERE id = 1;";

        $result = pg_query($connection, $queryUpdate);
        if(!$result){
            die("query failed");
        }
    */
    deleteRow();
}

function deleteRow()
{
    global $connection;
    $query = "DELETE FROM users WHERE id=1";
    $result = pg_query($connection, $query);
    if (!$result) {
        die("query failed");
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="col-sm-6">
        <form action="login.php" method="post">
            <label for="username">Username</label>
            <div class="form-group">
                <input type="text" name="username" class="form-control">
            </div>
            <label for="password">Password</label>
            <div class="form-group">
                <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>
</body>
</html>
