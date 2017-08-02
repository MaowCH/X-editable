<?
$con = mysqli_connect("localhost","root","1234","db_test");

$sql = "update tbl_test set ".$_POST["name"]." = '".$_POST["value"]."' where id = ".$_POST["pk"];
mysqli_query($con,$sql);

mysqli_close($con);

?>