<?php
$sql = "SELECT * FROM users WHERE id='".$_SESSION["userID"]."'";
$logUser = Connect::runSql("singleData", $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Peak Golf Club - Private Area</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed:500|Open+Sans|Vollkorn" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/favicon/site.webmanifest">
    <link rel="mask-icon" href="../images/favicon/safari-pinned-tab.svg" color="#3d4e65">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
    <header>
        <div id="topNav">
            <a id="logoCms" href="dashboard.php"><img src="../images/logo.png" alt="logo" /></a>
            <a id="userName" href="dashboard.php">Logged as <?=$logUser['strName']?></a>
            <a id="logout" href="models/logout.php">Logout</a>
        </div><!--//container-->

        <nav>
            <div class="options">
                <a href="manage.php?area=users">
                    <span class="fas fa-users"></span>
                    <span class="label">Users</span>
                </a>
            </div><!-- //options -->

            <div class="options">
                <a href="manage.php?area=info">
                    <span class="fas fa-info-circle"></span>
                    <span class="label">Infos</span>
                </a>
            </div><!-- //options -->

            <div class="options">
                <a href="manage.php?area=services">
                    <span class="fas fa-people-carry"></span>
                    <span class="label">Services</span>
                </a>
            </div><!-- //options -->

            <div class="options">
                <a href="manage.php?area=photos">
                    <span class="fas fa-camera"></span>
                    <span class="label">Photos</span>
                </a>
            </div><!-- //options -->

            <div class="options">
                <a href="manage.php?area=menu">
                    <span class="fas fa-utensils"></span>
                    <span class="label">Menu</span>
                </a>
            </div><!-- //options -->

            <div class="options">
                <a href="models/logout.php">
                    <span class="fas fa-times-circle"></span>
                    <span class="label">Logout</span>
                </a>
            </div><!-- //options -->

        </nav>
    </header><!--//header-->
