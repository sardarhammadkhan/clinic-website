<?php 

	$connect = mysql_connect("sql305.0fees.net", "fees0_10625050", "759212408");
	if(!$connect)
	{
		die ('could not connect to host');
	}

	$connect_database = mysql_select_db("fees0_10625050_medicines", $connect);
	if(!$connect_database)
		if(!$connect_database) 
		{
			die ("could not select blog database, the error is ==> ". mysql_error());
		}

		
		$empty = " ";
		
		$insert = "INSERT INTO `medicines` (id, name, description, price) 
					VALUES ('','$_POST[name]','$_POST[description]','$_POST[price]')";


		if(!mysql_query($insert, $connect))
		{
			die(("the error is ==> ") . mysql_error());
		}
		else
		{
			echo "Medicine Added";
			echo "<meta http-equiv=\"refresh\" content=\"1;URL=view.php\" />";

		}
		
		mysql_close($connect);
?>