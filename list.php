<!DOCTYPE html>
<html lang="en">
<body>
<?php
include('includes/config.php');
$query1=mysql_query("select id, username from users");
echo "<table><tr><td>ID</td><td>Username</td><td></td><td></td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['id']."</td>";
echo "<td>".$query2['username']."</td>";
echo "<td><a href='edit.php?id=".$query2['id']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=".$query2['id']."'>x</a></td><tr>";
}
?>
</ol>
</table>
</body>
</html>