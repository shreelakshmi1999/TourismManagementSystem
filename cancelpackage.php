<?php
include("connection.php");
//This allows the storeg info of the packages with refference to their id being deleted
$new1=$_GET['packageid'];
$sql="delete from packages where packageid=".$_GET['packageid'];
$result=mysqli_query($a,$sql);

if(mysqli_query($a,$sql)){
echo'<script>alert("PACKAGE DELETED"); window.location.href="adminpackages.php";</script>';
}
?>
