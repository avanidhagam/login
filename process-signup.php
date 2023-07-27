<?php
if(empty($_POST["name"])){
    die("Name is required");
}
if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    die("Valid email is required");
}
if(strlen($_POST["password"])<8){
    die("Password must be atleast 8 characters");
}
if(! preg_match("/[a-z]/i",$_POST["password"])){
    die("password must contain atleast 1 letter");
}
if(! preg_match("/[0-9]/",$_POST["password"])){
    die("password must contain atleast 1 number");
}
if($_POST["password"]!==$_POST["password_confirmation"]){
    die("passwords must match");
}

print_r($_POST)

?>
