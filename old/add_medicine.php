<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head> <title> Add Medicine </title>
	<link type="text/css" src="post.php">
	<link type="text/css" src="addevent.php">
		<style type="text/css">
			textarea#name
			{
				height:50px;
				width:500px;
				resize:none;
			}
			textarea#description
			{
				height:200px;
				width:500px;
				resize:none;
		
			}
			textarea#price
			{
				height:40px;
				width:500px;
				resize:none;
			}
			body
			{
				text-align:center;
			}
		</style>
</head>

<body>
	<form action ="post.php" method="post">
		Name:
		<br>
		<textarea id="name" name="name"></textarea>
		<br>
		Description:
		<br>
		<textarea id="description" name="description"></textarea>
		<br>
		Price:
		<br>
		<textarea id="price" name="price"></textarea>
		<br>
		<button type="submit" >Add</button>
	</form>
</body>
</html>