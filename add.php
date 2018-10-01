<?php 
include ("classes/connect.php"); 
include ("models/checkUser.php"); 
include ("views/header.php"); 
?>
<div id="add" class="container">

<!-- start of add Users -->
<?php
if(($_GET["area"] == "users"))
{
	if(!isset($_GET["id"]))
	{
		$title = "Add New User";
		$username = "";
		$password = "";
		$name = "";
		$email = "";
		$phone = "";
		$id = "";
	}

	if(isset($_GET["id"]))
	{
		$userEdit = Connect::runSql("singleData", "SELECT * FROM users WHERE id=".$_GET["id"]);
		$username = $userEdit["strUsername"];
		$password = $userEdit["strPassword"];
		$name = $userEdit["strName"];
		$email = $userEdit["strEmail"];
		$phone = $userEdit["nPhone"];
		$title = "Edit User";
		$id = $userEdit["id"];
	}
?>
	<h1><?=$title?></h1>
	<form id="addUser" method="post" action="models/save.php?area=users" onsubmit="return validateForm();"  autocomplete="off">
		<input type="hidden" name="id" value="<?=$id?>" />
		<div class="blockfield">
			<label>Username</label>
			<input type="text" class="required" name="username" placeholder="i.e. johndoe" value="<?=$username?>" />
		</div><!--//blockfield-->
		
		<div class="blockfield">
			<label>Password</label>
			<input type="password" class="required" name="password" placeholder="password" value="<?=$password?>" />
		</div><!--//blockfield-->

		<div class="blockfield">
			<label>Full Name</label>
			<input type="text" class="required" name="name" placeholder="i.e. John Doe" value="<?=$name?>" />
		</div><!--//blockfield-->

		<div class="blockfield">
			<label>E-mail:</label>
			<input type="text" class="required" name="email" placeholder="i.e. email@email.com" value="<?=$email?>" />
		</div><!--//blockfield-->

		<div class="blockfield">
			<label>Phone:</label>
			<input type="text" class="required" name="phone" placeholder="i.e. (xxx) xxx xxxx" value="<?=$phone?>" />
		</div><!--//blockfield-->

		<input class="btn nudeRed" type="submit" value="Save" />
	</form>
<?php
}
//end of add Users

if(($_GET["area"] == "services"))
{
	if(!isset($_GET["id"]))
	{
		$title = "Add New Service";
		$id = "";
	}

	if(isset($_GET["id"]))
	{
		$serviceEdit = Connect::runSql("singleData", "SELECT * FROM services WHERE id=".$_GET["id"]);
		$title = "Edit User";
		$id = $serviceEdit["id"];
	}
?>
	<h1><?=$title?></h1>
	<p>Please, call our support to unlock this feature.</p>
<?php
}
?>
<!-- end of add Services -->
</div>
<?php
include ("views/footer.php"); 
?>