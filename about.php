<?php


$con =mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}

mysqli_select_db($con, 'photo_g');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = "INSERT INTO users (name, email, mobile) VALUES('$name', '$email', '$number')";

mysqli_query($con, $query);
header('location:index.php#contact');

?>