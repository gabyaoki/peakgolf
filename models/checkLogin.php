<?php 
include ("../classes/connect.php"); 
session_start();

$sql = "SELECT * FROM users WHERE strUsername='".$_POST["username"]."' AND strPassword='".$_POST["password"]."'";
$arrUsers = Connect::runSql("getData", $sql);

if(isset($arrUsers))
{
	$_SESSION["userID"] = $arrUsers[0]["id"];
	header("location: ../dashboard.php");
} 
else {
	header("location: index.php?error=true");
	die;
}
	
?>