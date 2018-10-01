<?php 
include ("../functions/dbqueries.php"); 
include ("partials/checkUser.php"); 
include ("partials/header.php"); 

?>

<div id="users" class="container">

<?php
$sql = "SELECT * FROM users WHERE id='".$_GET["id"]."'";
$user = runSql("singleData", $sql);

if($_GET["area"] == "users")
{
?>
	<h1>Edit User</h1>
	<form id="addUser" method="post" action="update.php?area=users&id=<?=$user['id']?>" onsubmit="return validateForm();"  autocomplete="off">
		<label><span class="fas fa-user-plus"></span>Username:</label>
		<input type="text" class="required" name="username" value="<?=$user['strUsername']?>">

		<label><span class="fas fa-key"></span>Password:</label>
		<input type="password" class="required" name="password" placeholder="new password">

		<input class="btGeneral" type="submit" value="Save Changes">
	</form>
<?php
}
?>

</div>
<?php
include ("partials/footer.php"); 
?>