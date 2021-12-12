<?php
  $host = "mysql-fiscaparadise.alwaysdata.net";
  $user = "252196";
	$password = "GnTipNXYa4LvEcT";
	$dbName = "fiscaparadise_main_db";
	$table = "emails_table";

	$sqlConnection = mysqli_connect($host, $user, $password);
	$isConnected = mysqli_select_db($sqlConnection, $dbName);

	if ( !$sqlConnection || !$isConnected ){
    echo "<h1>Failed to connect to DB</h1>";
  }
?>
