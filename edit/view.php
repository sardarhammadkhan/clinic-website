<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
        <title>View Records</title>
</head>
<body>

<?php
/* 
        VIEW.PHP
        Displays all data from 'news' table
*/

        // connect to the database
        include('connect_to_db.php');

        // get results from database
        $result = mysql_query("SELECT * FROM `news` ORDER BY id asc") 
                or die(mysql_error());  
                
        // display data in table
        echo "<p><b>View All</b> | <a href='view_p.php?page=1'>View Paginated</a></p>";
        
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>ID</th> <th>Title</th> <th>Content</th> <th></th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['title'] . '</td>';
                echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
                echo '<td><a href="remove.php?id=' . $row['id'] . '">Delete</a></td>';
                echo "</tr>"; 
        } 

        $result2 = mysql_query("SELECT * FROM `medicines` ORDER BY id desc") or die(mysql_error());

        // close table>
        echo "</table>";

        echo "<p><b>View All</b>";
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>ID</th> <th>Title</th> <th>Content</th> <th></th></tr>";

        // loop through results of database query, displaying them in the table
        while($row2 = mysql_fetch_array( $result2 )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row2['id'] . '</td>';
                echo '<td>' . $row2['name'] . '</td>';
                echo '<td><a href="edit_med.php?id=' . $row2['id'] . '">Edit</a></td>';
                echo '<td><a href="remove_med.php?id=' . $row2['id'] . '">Delete</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>
<p><a href="newnews.php">Add a new event</a></p>
<p><a href="add_medicine.php">Add a new medicine</a></p>

</body>
</html> 