<?
include "connect.php";
$name = $_POST['name'];
$password = $_POST['password'];
"SELECT * FROM info WHERE (user='$name')and(password='$password')";
$sqlquery = mysql_query($sqlselect);
$check = mysql_fetch_array($sqlquery);
if($check)
{
  echo 'login success';
}
else 
{
  echo 'login fail';
}
?>
