<?php
session_start();
$_SESSION["favcolor"] = "red";
$_SESSION["favpage"] = "home";

echo $_SESSION["favcolor"];

session_unset();
session_destroy();
