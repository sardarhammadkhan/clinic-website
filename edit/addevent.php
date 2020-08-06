<?php
	$connect = mysql_connect("sql305.0fees.net", "fees0_10625050", "759212408");
	if(!$connect)
	{
		die ('could not connect to host');
	}
	$connect_database = mysql_select_db("fees0_10625050_medicines", $connect);
	if(!$connect_database)
	{
		die ('could not connect to database');
	}
	$empty = " ";
	$insert = "INSERT INTO `news` (id, title, content) 
					VALUES ('', '$_POST[title]', '$_POST[content]')";

	if(!mysql_query($insert, $connect) && !$empty)
	{
		die ("the error is ==>") . mysql_error();
	}
	else
	{
		echo "event added";
		echo "<meta http-equiv=\"refresh\" content=\"1;URL=view.php\" />";
	}
	mysql_close($connect);
?>