<?php
$connect = mysql_connect("sql305.0fees.net", "fees0_10625050", "759212408");
	if(!$connect)
	{
		die ('could not connect to host');
	}
	$connect_database = mysql_select_db("fees0_10625050_medicines", $connect);
	if(!$connect_database)
	{
		die ('cant connect to database');
	}
	$userid = $row['id'];
	$delete = "DELETE FROM `fees0_10625050_news`.`news` WHERE `news`.`id` = '$userid'";
	mysql_query($delete);

	mysql_close($connect);