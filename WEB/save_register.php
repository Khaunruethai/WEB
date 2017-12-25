<?php
$dbcon = mysqli_connect("localhost","root","","member");

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];

$sqlinsert = "Insert Into info (user,password,email,address) VALUES ('$name','$password','$email','$address')";
$check = mysqli_query($dbcon,$sqlinsert);

if($check){
  echo 'success';
  header('Location:login.html');
}else{
  echo 'fail';
}
?>
