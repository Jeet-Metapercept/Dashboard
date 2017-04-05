<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- meta section -->
        <title>Metapercept- Admin Dashboard</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >
        <link rel="icon" href="favicon.ico" type="image/x-icon" >
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
    <?php
    include('includes/config.php');
    $user_id=$_GET['upd'];

    if(isset($_POST['submit']))
    {

        $user_name=mysqli_real_escape_string($dbcon, $_POST['user_name']);
        $user_pass=mysqli_real_escape_string($dbcon, $_POST['user_pass']);
        $update_users_query=mysqli_query($dbcon, "UPDATE users SET username='$user_name', password='$user_pass' WHERE id=$user_id");
        if($update_users_query)
        {   
            echo "User details updated successfully.!";
            header("location:dashboard.php");
        }
    }
    ?>
    <div class="update-details" style="margin-top:200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-primary" style="height:250px;">
                        <div class="panel-heading">
                            <h3 class="panel-title">Update Details</h3>
                        </div>
                        <br><br>
                        <fieldset>
                            <form method="post" action="">
                                User Name: <input type="text" name="user_name"><br><br>
                                Password: <input type="text" name="user_pass"><br><br>
                                <br>
                                <input class="btn-primary" type="submit" name="submit">
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>