<?php
$conn=mysqli_connect("localhost", "root", "", "login");
if(!$conn){
    die("Not Connected");
}
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "Select * from it Where email='$email' and password='$password' ";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo"SUCCESS";
    exit();
}
else{
    echo("INVALID");
}
mysqli_close($conn);
?>