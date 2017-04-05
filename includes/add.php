<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<?php
require_once('includes/config.php');
$id = mysqli_real_escape_string($dbcon, $_REQUEST['id']);
$username = mysqli_real_escape_string($dbcon, $_REQUEST['username']);
$password = mysqli_real_escape_string($dbcon, $_REQUEST['password']);

$sql = "INSERT INTO users (id, username, password) VALUES ('$id', '$username', '$password')";
if(mysqli_query($dbcon, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbcon);
}
 
// close connection
mysqli_close($dbcon);

?>
<body>

</body>
</html>