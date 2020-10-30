<?php session_start();
if(!$_SESSION['username']){
	header("location:login8.html");
}
?>
<?php
require_once("connect.php");
$sql = "DELETE FROM jodichart WHERE id='" . $_GET["id"] . "'";
mysqli_query($conn,$sql);
header("Location:index.php");

?>