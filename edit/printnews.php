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

	$query = "SELECT * FROM `news` ORDER BY id desc";
				$sql = mysql_query($query);

		while($row = mysql_fetch_array($sql))
		{
			$userid = $row['id'];
			$sql_query = "SELECT * FROM `news` WHERE id = '$userid'";
			
			echo "<div id=\"news\"><span>" . "<b>".$row['title']."</b>"."</span>". "<br>". " " ."<span> ".$row['content']. "</span></div>";
		}
	?>