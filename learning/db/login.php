<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
  //  echo 'Username: '.$username .'<br>Password:  '. $password;

    $connection = pg_connect("host=localhost port=5432 dbname=php_learning user=postgres password=1408");
    if($connection){
        echo "Connected";
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
    <dix class="col-sm-6">
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
        </form>
    </dix>
</div>
</body>
</html>
