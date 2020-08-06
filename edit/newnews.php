<!DOCTYPE HTML>
<html>
	<head>
		<link type="text/css" src="addevent.php">
		<style type="text/css">
			textarea#title
			{
				height:50px;
				width:500px;
				resize:none;
			}
			textarea#content
			{
				height:200px;
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
		<form action="addevent.php" method="POST">
			Title:
			<br>
			<textarea id="title" name="title"></textarea>
			<br>
			Content:
			<br>
			<textarea id="content" name="content"></textarea>
			<br>
			<button type="submit">Add</button>

		</form>
		<p><a href="view.php">Back to view</a></p>
	</body>
</html>


