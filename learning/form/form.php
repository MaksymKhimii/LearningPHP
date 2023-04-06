<?php
const minimum =5;
$names = ["Edwin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "Tom"];

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

   /* if(strlen($username)<minimum){
        echo "Username has to be longer than five";
    }*/

    if(!in_array($username, $names)){
        echo "Sorry, you cannot login";
    } else {
        echo "Welcome";
    }


 //   echo 'Username: '.$username .'<br>Password:  '. $password;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<form action="form.php" method="post">
    <input type="text"  name="username" placeholder="Enter Username"><br>
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">
</form>

</body>
</html>
