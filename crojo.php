<?php

$conn = mysqli_connect("localhost", "root", "", "bsit");
if(!$conn){
    die ("wala");
}

$id = $_POST['email'] ?? '';
$password = $_POST['password']?? '';

$sql = "Select * from students Where email= '$email'
and password = '$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0){
    header ("Location: home.html");
    exit();
}
else{
    echo "miss u";
}

mysqil_close($conn);
?>
