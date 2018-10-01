<?php 
include("../classes/connect.php");

$sql = "SELECT * FROM users WHERE strUsername='".$_POST["username"]."'";
$arrLoggedUser = Connect::runSql("singleData", $sql);

$passHash = $arrLoggedUser["strPassword"];

if(password_verify($_POST["password"], $passHash)){
	session_start();
	$_SESSION["userID"] = $arrLoggedUser["id"];
	header("location: ../dashboard.php");
} else {
	header("location: ../index.php?error=true");
}
?>