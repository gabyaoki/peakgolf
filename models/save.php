<?php 
include ("../classes/connect.php");

if(($_GET["area"] == "users"))
{

$hashpass = password_hash($_POST['password'], PASSWORD_DEFAULT);

	if($_POST["id"])
	{
		$sql = "UPDATE
					users
				SET
					strUsername = '".$_POST["username"]."',
					strPassword = '".$hashpass."',
					strName = '".$_POST["name"]."',
					strEmail = '".$_POST["email"]."',
					nPhone = '".$_POST["phone"]."'
				WHERE id=".$_POST["id"];

		Connect::runSql("saveData", $sql);
		header("location: ../manage.php?edit=true&area=users");
	} else
	{
		$sql = "INSERT INTO users 
			(strUsername, 
			strPassword,
			strName,
			strEmail,
			nPhone) 
		VALUES (
			'".$_POST["username"]."',
			'".$hashpass."',
			'".$_POST["name"]."',
			'".$_POST["email"]."',
			'".$_POST["phone"]."')";
		Connect::runSql("saveData", $sql);
		header("location: ../manage.php?add=true&area=users");
	}
}

if(($_GET["area"] == "infos"))
{
	$sql = "UPDATE
				globals
			SET
				strDetails = '".$_POST["phone"]."'
			WHERE id=2";
	Connect::runSql("saveData", $sql);

	$sql = "UPDATE
				globals
			SET
				strDetails = '".$_POST["email"]."'
			WHERE id=10";
	Connect::runSql("saveData", $sql);

	$sql = "UPDATE
				globals
			SET
				strDetails = '".$_POST["address"]."'
			WHERE id=7";
	Connect::runSql("saveData", $sql);

	$sql = "UPDATE
				globals
			SET
				strDetails = '".$_POST["city"]."'
			WHERE id=8";
	Connect::runSql("saveData", $sql);

	$sql = "UPDATE
				globals
			SET
				strDetails = '".$_POST["postalcode"]."'
			WHERE id=9";
	Connect::runSql("saveData", $sql);
	
	header("location: ../manage.php?edit=true&area=info");
}

if(($_GET["area"] == "photos"))
{
	$fileUpload = Connect::uploadImg("strName");
	$sql = "INSERT INTO medias
		(strName, nTypeID, strDesc) 
	VALUES (
		'".$fileUpload."',
		'".$_POST["nTypeID"]."',
		'".$_POST["strDesc"]."')";
	Connect::runSql("saveData", $sql);
	header("location: ../manage.php?add=true&area=photos");
}

?>